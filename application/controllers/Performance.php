<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
	}
	public function index()
	{
		echo 'Working';
	}
	public function performanceReport()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/performance_report");
		$this->load->view("layout/footer");
	}
	public function giveAppraisal()
	{
		$data['Employee']=$this->ATND->fetchEmployee();
		$this->load->view('layout/header');
		$this->load->view("pages/give_appraisal",$data);
		$this->load->view("layout/footer");
	}
<<<<<<< HEAD
	public function indicator()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/indicator");
=======
		public function paySlip()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/payslip");
>>>>>>> 582b575540b6689fc5e835e7b1efb27eff33d168
		$this->load->view("layout/footer");
	}
}
?>