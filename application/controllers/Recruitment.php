<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recruitment extends CI_Controller {

	public function index()
	{
		echo 'Working';
	}
	public function jobsPosted()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/job_posted");
		$this->load->view("layout/footer");
	}
	public function jobsApplications()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/jobs_applications");
		$this->load->view("layout/footer");
	}
}
?>