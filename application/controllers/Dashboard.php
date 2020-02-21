<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tasks_Model');
		$this->load->model('Notification_model');
		$this->load->model('User_model');
		$this->load->model('Rahul_Model','Demo');
		$this->load->model('Global_Model');
	}

	public function index()
	{
		$session=$this->session->userdata('logged_user');
		$user_id=$session[0]->user_id;
		$data['admin_employee']=$this->User_model->fetch_all_employees_admin();
		$data['to_do']=$this->Tasks_Model->fetch_todo($user_id);
		$data['in_progress_project']=$this->Demo->get_in_progress_project();
		$data['in_progress_task']=$this->Demo->get_in_progress_task();
		$data['over_due_project']=$this->Demo->get_over_due_project();
		$data['over_due_task']=$this->Demo->get_over_due_task();
		$data['fetch_holiday']=$this->Global_Model->fetch_holidays();
		// $data['over_due_task']=$this->Demo->get_online_user();
		$this->load->view('layout/header');
		$this->load->view('pages/index',$data);
		$this->load->view('layout/footer');
	}
	public function getInProgressProject(){
		die(json_encode($this->Demo->get_in_progress_project()));
	}
	public function getOverDueProject(){
		die(json_encode($this->Demo->get_over_due_project()));
	}
	public function getInProgressTask(){
		die(json_encode($this->Demo->get_in_progress_task()));
	}
	public function getOverDueTask(){
		die(json_encode($this->Demo->get_over_due_task()));
	}
	public function fetchOnlineUser(){
		die(json_encode($this->Demo->get_online_user()));
	}
}
?>