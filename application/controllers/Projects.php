<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Projects_Model');
		$this->load->model('Client_Model');
		$this->load->model('User_model');
		$this->load->model('Notification_model');
		}

	public function index()
	{
		//echo 'Projects';
		$data['clients']=$this->Client_Model->getClients();
		$data['users']=$this->User_model->fetch_user();
		$data['settings']=$this->Projects_Model->fetch_settings();
		$projects=$this->Projects_Model->fetch_projects();
		foreach ($projects as $pr) {
			$perm=$pr['permission'];
			$user=array();
			if($perm=="all"){
				$user[]="Everyone";
			}
			else{
			$new=json_decode($perm);
			foreach($new as $key => $value){
				$user[]=$this->User_model->fetch_user_by_id($key);
			 }
			}
			$project_data[]=array_merge($pr,$user);
		}
		$data['project']=$project_data;
		$this->load->view('layout/header');
		$this->load->view("pages/projects",$data);
		$this->load->view("layout/footer");
	}

	public function create_project(){
		$date=date('Y-m-d H:i:s');
		unset($_POST['everyone']);
		unset($_POST['vehicle2']);
		unset($_POST['vehicle1']);
		unset($_POST['editor1']);
		$permission=$_POST['permission'];
		$session=$this->session->userdata('logged_user');
		$user_id=$session[0]->user_id;
		 $result = $this->Projects_Model->create_project($_POST);
		 if($result == TRUE){
		 	if ($permission=="all") {
		 		$fetch_users=$this->User_model->fetch_all_employees_admin();
		 		foreach ($fetch_users as $users) {
		 			$emp_id=$users->user_id;
		 			$new_data=array('date'=>$date,
		 							'description'=>'Project',
		 							'from_user_id'=>$user_id,
		 							'to_user_id'=>$emp_id,
		 							'link'=>'Projects',
		 							'value'=>$_POST['project_name']);
		 			$notify=$this->Notification_model->insert_notification($new_data);
		 		}
		 	}
		 	else{
		 		$new=json_decode($permission);
				foreach($new as $key => $value){
					$new_data=array('date'=>$date,
		 							'description'=>'Project',
		 							'from_user_id'=>$user_id,
		 							'to_user_id'=>$key,
		 							'link'=>'Projects',
		 							'value'=>$_POST['project_name']);
		 			$notify=$this->Notification_model->insert_notification($new_data);
				 }
		 	}
		 	die(json_encode(array('status' =>'1','msg'=>'Project Created Successfully')));
		 }
		 else{
		 	die(json_encode(array('status' =>'0','msg'=>'Project With Same Name Already Exists')));
		 }
	}

	public function fetch_all_projects(){
		$projects=$this->Projects_Model->fetch_projects();
		die(json_encode(array('status' =>'1' ,"data"=>$projects )));
	}

	public function fetch_project(){
		$project_id=$_POST['project_id'];
		$result=$this->Projects_Model->fetch_project($project_id);
		if($result){
			die(json_encode(array('status' =>'1' ,'data'=>$result )));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'no data ')));
		}
	}

	public function update_project(){
		$result=$this->Projects_Model->update_project($_POST);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Updated')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}

	public function delete_project(){
		$id=$_POST['project_id'];
		$result=$this->Projects_Model->delete_project($id);
		if($result == TRUE){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Deleted')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}

}
?>