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
	public function indicator()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/indicator");
		$this->load->view("layout/footer");
	}
}
?>