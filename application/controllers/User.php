<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel','Login');
		$this->load->model('Job_circular_model');
	}

	public function index()
	{
        $data['countries']=$this->db->get('countries')->result();
		$this->load->view('pages/auth-register',$data);
	}
	public function user_list()
	{
		$data['countries']=$this->db->get('tbl_countries')->result();
		$data['all_dept_info'] = $this->db->get('tbl_departments')->result();
	 	foreach ($data['all_dept_info'] as $v_dept_info) {
            $data['all_department_info'][] = $this->Job_circular_model->get_add_department_by_id($v_dept_info->departments_id);
        }
		$this->load->view('layout/header');
		$this->load->view("pages/user_list",$data);
		$this->load->view("layout/footer");
	}
	public function addUser(){
		print_r($_POST);
		
	}
}
