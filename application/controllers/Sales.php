<?php
date_default_timezone_set('Asia/Kolkata');
	class Sales extends MY_Controller
	{	
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Client_Model');
		$this->load->model('Sales_Model');
	}

	public function index()
	{
		$data['users']=$this->User_model->fetch_user();
		$data['clients']=$this->Client_Model->getClients();
		$this->load->view('layout/header');
		$this->load->view("pages/invoice",$data);
		$this->load->view("layout/footer");
	}	

	public function fetch_project(){
		$result=$this->Client_Model->fetch_projects_by_client_id($_POST['client_id']);
		if ($result) {
			die(json_encode(array('status'=>'1','data'=>$result)));
		}
		else{
			die(json_encode(array('status'=>'0')));
		}

	}
}
?>	