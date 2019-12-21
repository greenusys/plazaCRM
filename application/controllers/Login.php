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
		$data=array("user_name_"=>$this->input->post(''),"password_"=>$this->input->post(''));
		if(count($this->Login->verifyThisUser($data))>0){
			redirect('Dashboard')
		}
	}
}
