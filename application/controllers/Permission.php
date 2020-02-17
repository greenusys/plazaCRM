<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
		$this->load->model('Job_circular_model');
		$this->load->model('Tasks_Model');
		$this->load->model('User_model');
		$this->load->model('Performance_model');
	}
	public function index(){
		$data['Employee']=$this->ATND->fetchEmployee();
		$data['Designation']=$this->db->get('tbl_designations')->result();
		
		$this->load->view('layout/header');
		$this->load->view("pages/set_perm",$data);
		$this->load->view("layout/footer");
	}

}