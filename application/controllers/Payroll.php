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
		$this->load->view('layout/header');
		$this->load->view("pages/hourly_rate");
		$this->load->view("layout/footer");
	}
	public function manageSalary()
	{
		echo 'manageSalary';
	}
	public function empSalary()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/employee_salary_list");
		$this->load->view("layout/footer");
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
		echo 'makePayment';
	}
	public function generatePaySlip()
	{
		echo 'generatePaySlip';
	}
	public function payrollSummary()
	{
		echo 'payrollSummary';
	}
	public function advanceSalary()
	{
		echo 'advanceSalary';
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