<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel','Login');
	}

	public function index()
	{
        $data['countries']=$this->db->get('countries')->result();
		$this->load->view('pages/auth-register',$data);
	}
	public function addUser(){
		print_r($_POST);
		
	}
}
