<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends CI_Controller {

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
		$this->load->view('layout/header');
		$this->load->view("pages/give_appraisal");
		$this->load->view("layout/footer");
	}
}
?>