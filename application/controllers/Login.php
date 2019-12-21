<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel','Login');
	}

	public function index()
	{
		$this->load->view('pages/auth-login');
	}
	public function validateLogin(){
		// print_r($_POST);
		$data=array("user_name_"=>$this->input->post('user_name'),"password_"=>$this->input->post('pass_code'));
		if($res=$this->Login->verifyThisUser($data)){
			$this->session->set_userdata('logged_user',$res);
			redirect('Dashboard');
		}else{
			$this->session->set_flashdata('msg','Invalid Username Or Password');
			redirect('Login');
		}
	}
}
