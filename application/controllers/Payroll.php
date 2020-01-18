<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll extends CI_Controller {

	public function index()
	{
		echo 'Payroll';
	}
	public function salaryTemplate()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/salary_template");
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
		$this->load->view('layout/header');
		$this->load->view("pages/manage_salary");
		$this->load->view("layout/footer");
	}
	public function empSalary()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/emp_salary_list");
		$this->load->view("layout/footer");
	}
	public function makePayment()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/make_payment");
		$this->load->view("layout/footer");
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