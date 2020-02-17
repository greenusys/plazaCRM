<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tasks_Model');
		$this->load->model('Notification_model');
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['admin_employee']=$this->User_model->fetch_all_employees_admin();
		$data['to_do']=$this->Tasks_Model->fetch_todo();
		$this->load->view('layout/header');
		$this->load->view('pages/index',$data);
		$this->load->view('layout/footer');
	}
}
?>