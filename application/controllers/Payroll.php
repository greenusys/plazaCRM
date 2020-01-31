<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Payroll_model');
		}

	public function index()
	{
		echo 'Payroll';
	}
	public function salaryTemplate()
	{
		$data['templates']=$this->Payroll_model->fetch_templates();
		$this->load->view('layout/header');
		$this->load->view("pages/salary_template",$data);
		$this->load->view("layout/footer");
	}

    public function edit_template(){
        $id=$this->uri->segment(3);
        $data['templates']=$this->Payroll_model->fetch_templates();
        $data['template_details']=$this->Payroll_model->fetch_template_by_id($id);
        $data['allowance']=$this->Payroll_model->fetch_allowance_by_id($id);
        $data['deduction']=$this->Payroll_model->fetch_deduction_by_id($id);
        $this->load->view('layout/header');
        $this->load->view("pages/edit_template",$data);
        $this->load->view("layout/footer");
    }

    public function delete_template(){
        $template_id=$_POST['template_id'];
        $delete=$this->Payroll_model->delete_template($template_id);
        if($delete){
            die(json_encode(array('status'=>'1','msg'=>'deleted')));
        }
        else{
            die(json_encode(array('status'=>'0','msg'=>'failed')));
        }
    }

    public function fetch_template(){
        $id=$_POST['template_id'];
        $template_details=$this->Payroll_model->fetch_template_by_id($id);
        $allowance=$this->Payroll_model->fetch_allowance_by_id($id);
        $deduction=$this->Payroll_model->fetch_deduction_by_id($id);
        die(json_encode(array("template_details"=>$template_details,"allowance"=>$allowance,"deduction"=>$deduction)));
    }

	public function hourlyTemplate()
	{
		$data['templates']=$this->Payroll_model->fetch_hourly_templates();
		$this->load->view('layout/header');
		$this->load->view("pages/hourly_rate",$data);
		$this->load->view("layout/footer");
	}

    public function update_template_ajax(){
        $update=$this->Payroll_model->update_hourly($_POST);
        if ($update) {
            echo "1";
        }
        else{
            echo "0";
        }
    }


    public function update_hourly_template(){
        $id=$this->uri->segment(3);
        $data['templates']=$this->Payroll_model->fetch_hourly_templates();
        $data['templater']=$this->Payroll_model->fetch_hourly_template_by_id($id);
        $this->load->view('layout/header');
        $this->load->view("pages/edit_hourly_rate",$data);
        $this->load->view("layout/footer");
    }

	public function manageSalary()
	{
		$data['departments']=$this->Payroll_model->fetch_departments();
		$this->load->view('layout/header');
		$this->load->view("pages/manage_salary",$data);
		$this->load->view("layout/footer");
	}

    public function update_salary_details(){
        $user_id = $this->input->post('user_id', TRUE);

        $hourly_status = $this->input->post('hourly_status', TRUE);
        $hourly_rate_id = $this->input->post('hourly_rate_id', TRUE);

        $monthly_status = $this->input->post('monthly_status', TRUE);
        $salary_template_id = $this->input->post('salary_template_id', TRUE);
        foreach ($user_id as $user) {
            $update_null=$this->Payroll_model->update_null_payroll($user);
        }
        foreach($hourly_status as $hourly){
            $hourly_user=$hourly;
            $user_index=array_search($hourly,$user_id);
            $hourly_index=$hourly_rate_id[$user_index];
            $update_hourly=$this->Payroll_model->update_hourly_model($hourly_user,$hourly_index);
        }
        foreach($monthly_status as $monthly){
            $monthly_user=$monthly;
            $user_index=array_search($monthly,$user_id);
            $monthly_index=$salary_template_id[$user_index];
            $update_monthly=$this->Payroll_model->update_monthly_model($monthly_user,$monthly_index);
        }
        redirect('Payroll/empSalary');
    }

	public function fetch_department_data(){
		$dept_id=$this->uri->segment(3);
		$data['department']=$this->Payroll_model->fetch_departments_data($dept_id);
		$data['hourly_grade']=$this->Payroll_model->fetch_hourly_templates();
		$data['monthly_grade']=$this->Payroll_model->fetch_templates();
		$data['departments']=$this->Payroll_model->fetch_departments();
		$this->load->view('layout/header');
		$this->load->view("pages/manage_salary_num",$data);
		$this->load->view("layout/footer");
        //die(json_encode($data['department']));
	}

	public function empSalary()
	{
		$data['employee']=$this->Payroll_model->get_emp_salary_list();
		$this->load->view('layout/header');
		$this->load->view("pages/emp_salary_list",$data);
		$this->load->view("layout/footer");
	}

	public function set_hourly_template(){
		$template=$this->Payroll_model->set_hourly_template($_POST);
		if($template){
			echo "1";
		}
		else{
			echo "0";
		}
	}

	public function add_overtime(){
		$template=$this->Payroll_model->add_overtime($_POST);
		if($template){
			echo "1";
		}
		else{
			echo "0";
		}
	}

	public function add_account(){
		$result=$this->Payroll_model->add_account($_POST);
		if($result){
			die(json_encode(array('status'=>'1','id'=>$result,'name'=>$_POST['account_name'])));
		}
		else{
			die(json_encode(array('status'=>'0','data'=>'no data')));
		}
	}

    public function update_template(){
        //print_r($_POST);
        $data=array('salary_grade' => $_POST['salary_grade'],
                    'basic_salary' => $_POST['basic_salary'],
                    'overtime_salary' => $_POST['overtime_salary']);
        $update_template=$this->Payroll_model->update_template($data,$_POST['template_id']);
        $deleter=$this->Payroll_model->delete_allowances_deductions($_POST['template_id']);
        $allowance_label=explode(",", $_POST['allowance_label']);
        $allowance_value=explode(",",$_POST['allowance_value']);
        $i=0;
        foreach ($allowance_label as $allowance) {
            if($allowance_value[$i]!=0){
                $new_data=array();
                $new_data=array('salary_template_id' => $_POST['template_id'], 
                                'allowance_label' => $allowance,
                                'allowance_value' => $allowance_value[$i]);
                $allowance_insert=$this->Payroll_model->set_template_allowance($new_data);
            }
            $i++;
        }
        $deduction_label=explode(",",$_POST['deduction_label']);
        $deduction_value=explode(",", $_POST['deduction_value']);
        $z=0;
        foreach ($deduction_label as $deduction) {
            if($deduction_value[$z]!=0){
                $new_data=array();
                $new_data=array('salary_template_id' => $_POST['template_id'], 
                                'deduction_label' => $deduction,
                                'deduction_value' => $deduction_value[$z]);
                $deduction_insert=$this->Payroll_model->set_template_deduction($new_data);
            }
            $z++;
        }
        echo "1";
    }


	public function set_template(){
		$data=array('salary_grade' => $_POST['salary_grade'],
				    'basic_salary' => $_POST['basic_salary'],
				    'overtime_salary' => $_POST['overtime_salary']);
		$template_id=$this->Payroll_model->set_template($data);
		$allowance_label=explode(",", $_POST['allowance_label']);
		$allowance_value=explode(",",$_POST['allowance_value']);
		$i=0;
		foreach ($allowance_label as $allowance) {
			if($allowance_value[$i]!=0){
				$new_data=array();
				$new_data=array('salary_template_id' => $template_id, 
								'allowance_label' => $allowance,
								'allowance_value' => $allowance_value[$i]);
				$allowance_insert=$this->Payroll_model->set_template_allowance($new_data);
			}
			$i++;
		}
		$deduction_label=explode(",",$_POST['deduction_label']);
		$deduction_value=explode(",", $_POST['deduction_value']);
		$z=0;
		foreach ($deduction_label as $deduction) {
			if($deduction_value[$z]!=0){
				$new_data=array();
				$new_data=array('salary_template_id' => $template_id, 
								'deduction_label' => $deduction,
								'deduction_value' => $deduction_value[$z]);
				$deduction_insert=$this->Payroll_model->set_template_deduction($new_data);
			}
			$z++;
		}
		die(json_encode(array('status'=>'1','msg'=>'success')));
	}

	public function makePayment()
	{
		if (isset($_POST['dept_id']) && isset($_POST['sal_date'])) {
		$date=$_POST['sal_date'];
		$dept_id=$_POST['dept_id'];
		$department=$this->Payroll_model->fetch_departments_data($dept_id);
		foreach ($department as $dept) {
			$user_id=$dept->user;
			$check_payment_status=$this->Payroll_model->check_user_payment($user_id,$date);
			if(count($check_payment_status)>0){
				$dept->salary_paid="true";
				$dept->search_date=$date;
			}
			else{
				$dept->salary_paid="false";
				$dept->search_date=$date;
			}
			$arr[]=$dept;
		}
		$data['table_data']=$arr;
		$data['departments']=$this->Payroll_model->fetch_departments();
		//print_r($data['table_data']);
		$this->load->view('layout/header');
		$this->load->view("pages/make_payment",$data);
		$this->load->view("layout/footer");
		}
		else{
		$data['table_data']=array();
		$data['departments']=$this->Payroll_model->fetch_departments();
		//print_r($data['table_data']);
		$this->load->view('layout/header');
		$this->load->view("pages/make_payment",$data);
		$this->load->view("layout/footer");
		}
	}

	public function make_payment_pay(){
		$date=$this->uri->segment(4);
		$user_id=$this->uri->segment(3);
		$departments_id=$this->uri->segment(5);
		$data=$this->make_payment_new($user_id,$departments_id,$date);
		$this->load->view('layout/header');
		$this->load->view("pages/make_payment_history.php",$data);
		$this->load->view("layout/footer");
	}

	    public function make_payment_new($user_id = NULL, $departments_id = NULL, $payment_month = NULL)
    {
        $data['title'] = "Make Payment";
// retrive all data from department table
        $data['all_department_info'] = $this->db->get('tbl_departments')->result();
        if ($user_id != 0 && !empty($payment_month)) {
// check payment history by employee id
            $check_existing_payment = $this->db->where('user_id', $user_id)->get('tbl_salary_payment')->result();

            $data['user_id'] = $user_id;
            //$data['staff_details'] = get_staff_details($user_id);
            $total_slary_amount = 0;
            if (!empty($check_existing_payment)) {
                foreach ($check_existing_payment as $key => $v_paymented_id) {
                    $salary_payment_id = $v_paymented_id->salary_payment_id;
                    $data['emp_salary_info'] = $this->Payroll_model->get_salary_payment_info($salary_payment_id);
                    $data['salary_payment_info'][] = $this->Payroll_model->get_salary_payment_info($salary_payment_id, true);

                    $this->Payroll_model->_table_name = "tbl_salary_payment_details"; // table name
                    $this->Payroll_model->_order_by = "salary_payment_id"; // $id
                    $salary_payment_history = $this->db->where('salary_payment_id', $salary_payment_id)->get('tbl_salary_payment_details')->result();
                    if (!empty($salary_payment_history)) {
                        foreach ($salary_payment_history as $v_payment_history) {
                            if (is_numeric($v_payment_history->salary_payment_details_value)) {
                                if ($v_payment_history->salary_payment_details_label == 'overtime_salary') {
                                    $rate = $v_payment_history->salary_payment_details_value;
                                } elseif ($v_payment_history->salary_payment_details_label == 'hourly_rates') {
                                    $rate = $v_payment_history->salary_payment_details_value;
                                }
                                $total_slary_amount += $v_payment_history->salary_payment_details_value;
                            }
                        }
                    }
                    $salary_allowance_info = $this->db->where('salary_payment_id', $salary_payment_id)->get('tbl_salary_payment_allowance')->result();
                    $total_allowance = 0;
                    if (!empty($salary_allowance_info)) {
                        foreach ($salary_allowance_info as $v_salary_allowance_info) {
                            $total_allowance += $v_salary_allowance_info->salary_payment_allowance_value;
                        }
                    }
                    if (!empty($rate)) {
                        $rate = $rate;
                    } else {
                        $rate = 0;
                    }

                    $data['total_paid_amount'][] = $total_slary_amount + $total_allowance - $rate;
                    $salary_deduction_info = $this->db->where('salary_payment_id', $salary_payment_id)->get('tbl_salary_payment_deduction')->result();
                    $total_deduction = 0;
                    if (!empty($salary_deduction_info)) {
                        foreach ($salary_deduction_info as $v_salary_deduction_info) {
                            $total_deduction += $v_salary_deduction_info->salary_payment_deduction_value;
                        }
                    }
                    $data['total_deduction'][] = $total_deduction;
                }
            }
            $data['payment_month'] = $payment_month;
            $data['payment_flag'] = 1;
            $data['departments_id'] = $departments_id;
// get employee info by employee id
            $data['employee_info'] = $this->Payroll_model->get_emp_salary_list($user_id);
// get all allowance info by salary template id
            if (!empty($data['employee_info']->salary_template_id)) {
                $data['allowance_info'] = $this->get_allowance_info_by_id($data['employee_info']->salary_template_id);
// get all deduction info by salary template id
                $data['deduction_info'] = $this->get_deduction_info_by_id($data['employee_info']->salary_template_id);
// get all overtime info by month and employee id
                $data['overtime_info'] = $this->get_overtime_info_by_id($user_id, $data['payment_month']);
            }
// get all advance salary info by month and employee id
            $data['advance_salary'] = $this->get_advance_salary_info_by_id($user_id, $data['payment_month']);
// get award info by employee id and payment month
// get award info by employee id and payment date
            $this->Payroll_model->_table_name = 'tbl_employee_award';
            $this->Payroll_model->_order_by = 'user_id';
            //$data['award_info'] = $this->Payroll_model->get_by(array('user_id' => $user_id, 'award_date' => $data['payment_month']), FALSE);
// check hourly payment info
// if exist count total hours in a month
// get hourly payment info by id
            if (!empty($data['employee_info']->hourly_rate_id)) {
                $data['total_hours'] = $this->get_total_hours_in_month($user_id, $data['payment_month']);
            }
            if (!empty($data['total_hours'])) {
                if ($data['total_hours'] == 0 && $data['total_minutes'] == 0) {
                    $type = 'error';
                    $message = '<strong>' . $data['employee_info']->fullname . ' ' . '</strong>' . lang('working_hour_empty');
                    set_message($type, $message);
                    redirect('admin/payroll/make_payment/' . '0' . '/' . $data['employee_info']->departments_id . '/' . $data['payment_month']);
                }
            }
        } else {
            $flag = $this->input->post('flag', TRUE);
            if (!empty($flag) || !empty($departments_id)) { // check employee id is empty or not
                $data['flag'] = 1;
                if (!empty($departments_id)) {
                    $data['departments_id'] = $departments_id;
                } else {
                    $data['departments_id'] = $this->input->post('departments_id', TRUE);
                }
                if (!empty($payment_month)) {
                    $data['payment_month'] = $payment_month;
                } else {
                    $data['payment_month'] = $this->input->post('payment_month', TRUE);
                }
// get all designation info by Department id
                $designation_info = $this->db->where('departments_id', $data['departments_id'])->get('tbl_designations')->result();
                if (!empty($designation_info)) {
                    foreach ($designation_info as $v_designatio) {
                        $data['employee_info'][] = $this->payroll_model->get_emp_salary_list('', $v_designatio->designations_id);
                        $employee_info = $this->payroll_model->get_emp_salary_list('', $v_designatio->designations_id);
                        foreach ($employee_info as $value) {

// get all allowance info by salary template id
                            if (!empty($value->salary_template_id)) {
                                $data['allowance_info'][$value->user_id] = $this->get_allowance_info_by_id($value->salary_template_id);
// get all deduction info by salary template id
                                $data['deduction_info'][$value->user_id] = $this->get_deduction_info_by_id($value->salary_template_id);
// get all overtime info by month and employee id
                                $data['overtime_info'][$value->user_id] = $this->get_overtime_info_by_id($value->user_id, $data['payment_month']);
                            }
// get all advance salary info by month and employee id
                            $data['advance_salary'][$value->user_id] = $this->get_advance_salary_info_by_id($value->user_id, $data['payment_month']);
// get award info by employee id and payment month
                            $data['award_info'][$value->user_id] = $this->get_award_info_by_id($value->user_id, $data['payment_month']);
// check hourly payment info
// if exist count total hours in a month
// get hourly payment info by id
                            if (!empty($value->hourly_rate_id)) {
                                $data['total_hours'][$value->user_id] = $this->get_total_hours_in_month($value->user_id, $data['payment_month']);
                            }
                        }
                    }
                }
            }
        }
       	return $data;
        //$data['subview'] = $this->load->view('admin/payroll/make_payment', $data, TRUE);
        //$this->load->view('admin/_layout_main', $data);
    }

    public function get_allowance_info_by_id($salary_template_id)
    {
        $salary_allowance_info = $this->db->where('salary_template_id', $salary_template_id)->get('tbl_salary_allowance')->result();
        $total_allowance = 0;
        foreach ($salary_allowance_info as $v_allowance_info) {
            $total_allowance += $v_allowance_info->allowance_value;
        }
        return $total_allowance;
    }

    public function get_deduction_info_by_id($salary_template_id)
    {
        $salary_deduction_info = $this->db->where('salary_template_id', $salary_template_id)->get('tbl_salary_deduction')->result();
        $total_deduction = 0;
        foreach ($salary_deduction_info as $v_deduction_info) {
            $total_deduction += $v_deduction_info->deduction_value;
        }
        return $total_deduction;
    }

    public function get_overtime_info_by_id($user_id, $payment_month)
    {
        $start_date = $payment_month . '-' . '01';
        $end_date = $payment_month . '-' . '31';
        $part_data=array('start_date' => $start_date, 'end_date' => $end_date, 'user_id' => $user_id);
        $all_overtime_info=$this->Payroll_model->get_overtime_info($part_data);
        $hh = 0;
        $mm = 0;
        foreach ($all_overtime_info as $overtime_info) {
            $hh += $overtime_info->overtime_hours;
            $mm += date('i', strtotime($overtime_info->overtime_hours));
        }
        if ($hh > 1 && $hh < 10 || $mm > 1 && $mm < 10) {
            $total_mm = '0' . $mm;
            $total_hh = '0' . $hh;
        } else {
            $total_mm = $mm;
            $total_hh = $hh;
        }
        if ($total_mm > 59) {
            $total_hh += intval($total_mm / 60);
            $total_mm = intval($total_mm % 60);
        }
        $result['overtime_hours'] = $total_hh;
        $result['overtime_minutes'] = $total_mm;
        return $result;
    }

    public function get_advance_salary_info_by_id($user_id, $payment_month)
    {

        $advance_salary_info = $this->Payroll_model->get_advance_salary_info_by_date($payment_month, '', $user_id); // get all report by start date and in date
        $advance_amount = 0;
        foreach ($advance_salary_info as $v_advance_salary) {
            $advance_amount += $v_advance_salary->advance_amount;
        }
        $result['advance_amount'] = $advance_amount;
        return $result;

    }

	public function generatePaySlip()
	{
		if (isset($_POST['dept_id']) && isset($_POST['sal_date'])) {
		$date=$_POST['sal_date'];
		$dept_id=$_POST['dept_id'];
		$department=$this->Payroll_model->fetch_departments_data($dept_id);
		foreach ($department as $dept) {
			$user_id=$dept->user;
			$check_payment_status=$this->Payroll_model->check_user_payment($user_id,$date);
			if(count($check_payment_status)>0){
				$dept->salary_paid="true";
				$dept->search_date=$date;
			}
			else{
				$dept->salary_paid="false";
				$dept->search_date=$date;
			}
			$arr[]=$dept;
		}
		$data['table_data']=$arr;
		$data['departments']=$this->Payroll_model->fetch_departments();
		//print_r($data['table_data']);
		$this->load->view('layout/header');
		$this->load->view("pages/make_payment",$data);
		$this->load->view("layout/footer");
		}
		else{
		$data['table_data']=array();
		$data['departments']=$this->Payroll_model->fetch_departments();
		//print_r($data['table_data']);
		$this->load->view('layout/header');
		$this->load->view("pages/make_payment",$data);
		$this->load->view("layout/footer");
		}
	}
	public function payrollSummary()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/payroll_summary");
		$this->load->view("layout/footer");
	}
	public function advanceSalary()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/advance_salary");
		$this->load->view("layout/footer");
		
	}
	public function providentFund()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/provident_fund");
		$this->load->view("layout/footer");
	}
	public function overTime($id="")
	{
		$data['current_month'] = date('m');
        if ($this->input->post('year', TRUE)) { // if input year
            $data['year'] = $this->input->post('year', TRUE);
        } else { // else current year
            $data['year'] = date('Y'); // get current year
        }
        // get all expense list by year and month
        $data['all_overtime_info'] = $this->get_overtime_info($data['year']);
        $data['current_month'] = date('m');
        if ($this->input->post('year', TRUE)) { // if input year
            $data['year'] = $this->input->post('year', TRUE);
        } else { // else current year
            $data['year'] = date('Y'); // get current year
        }

        $data['all_employee'] = $this->Payroll_model->get_all_employee();
        if (!empty($id)) {
            $data['overtime_info'] = $this->Payroll_model->get_overtime_info_by_emp_id($id);
        }
        //die(json_encode($data));
        //$data['modal_subview'] = $this->load->view('admin/utilities/overtime/new_overtime', $data, FALSE);
		$this->load->view('layout/header');
		$this->load->view("pages/overtime",$data);
		$this->load->view("layout/footer");
	}

    public function get_overtime_info($year, $month = NULL)
    {// this function is to create get monthy recap report
        if (!empty($month)) {
            if ($month >= 1 && $month <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                $start_date = $year . "-" . '0' . $month . '-' . '01';
                $end_date = $year . "-" . '0' . $month . '-' . '31';
            } else {
                $start_date = $year . "-" . $month . '-' . '01';
                $end_date = $year . "-" . $month . '-' . '31';
            }
            $get_expense_list = $this->Payroll_model->get_overtime_info_by_date($start_date, $end_date); // get all report by start date and in date
        } else {
            for ($i = 1; $i <= 12; $i++) { // query for months
                if ($i >= 1 && $i <= 9) { // if i<=9 concate with Mysql.becuase on Mysql query fast in two digit like 01.
                    $start_date = $year . "-" . '0' . $i . '-' . '01';
                    $end_date = $year . "-" . '0' . $i . '-' . '31';
                } else {
                    $start_date = $year . "-" . $i . '-' . '01';
                    $end_date = $year . "-" . $i . '-' . '31';
                }
                $get_expense_list[$i] = $this->Payroll_model->get_overtime_info_by_date($start_date, $end_date); // get all report by start date and in date
            }
        }
        return $get_expense_list; // return the result
    }

	public function employeeAward()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/employee_award");
		$this->load->view("layout/footer");
	}
	
	
}
?>