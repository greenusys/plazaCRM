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
	public function hourlyTemplate()
	{
		$data['templates']=$this->Payroll_model->fetch_hourly_templates();
		$this->load->view('layout/header');
		$this->load->view("pages/hourly_rate",$data);
		$this->load->view("layout/footer");
	}
	public function manageSalary()
	{
		$data['departments']=$this->Payroll_model->fetch_departments();
		$this->load->view('layout/header');
		$this->load->view("pages/manage_salary",$data);
		$this->load->view("layout/footer");
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
		// if(count($data)>0){
		// 	die(json_encode(array('status' =>'1' , 'data'=>$data ,'hourly'=>$hourly_grade,'monthly'=>$monthly_grade)));
		// }
		// else{
		// 	die(json_encode(array('status' => '0' , 'data'=>'no data')));
		// }
	}

	public function empSalary()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/emp_salary_list");
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
		$this->load->view('layout/header');
		$this->load->view("pages/make_payment");
		$this->load->view("layout/footer");
	}
	public function generatePaySlip()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/generate_payslip.php");
		$this->load->view("layout/footer");
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
		echo 'providentFund';
	}
	public function overTime()
	{
		echo 'overTime';
	}
	public function employeeAward()
	{
		echo 'employeeAward';
	}
	
	
}
?>