<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tasks_Model');
		$this->load->model('User_model');
		}


	public function index()
	{
		$data['all_tasks']=$this->Tasks_Model->fetch_all_task(null);
		$data['users']=$this->User_model->fetch_user();
		$this->load->view('layout/header');
		$this->load->view("pages/tasks",$data);
		$this->load->view("layout/footer");
	}

	public function task_updater(){
		$task_id=$_POST['task_id'];
		$permission=$_POST['permission'];
		$updater=$this->Tasks_Model->update_permission($task_id,$permission);
		if ($updater) {
			echo "1";
		}
		else{
			echo "0";
		}
	}

	public function update_tasks($id,$string){
		$task_id=$id;
		$task_status=$string;
		$update=$this->Tasks_Model->update_tasks($task_id,$task_status);
		redirect('Task');
	}

	public function create_task(){
		unset($_POST['client_id']);
		unset($_POST['radio_admin']);
		unset($_POST['editor1']);
		 $result = $this->Tasks_Model->create_task($_POST);
		 if($result == TRUE){
		 	die(json_encode(array('status' =>'1','msg'=>'Task Created Successfully')));
		 }
		 else{
		 	die(json_encode(array('status' =>'0','msg'=>'Task With Same Name Already Exists')));
		 }
	}

	public function fetch_task(){
		$task_id=$_POST['task_id'];
		$result=$this->Tasks_Model->fetch_task($task_id);
		if($result){
			die(json_encode(array('status' =>'1' ,'data'=>$result )));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'no data ')));
		}
	}

	public function update_task(){
		$result=$this->Tasks_Model->update_task($_POST);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Updated')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}

	public function delete_task(){
		$id=$_POST['task_id'];
		$result=$this->Tasks_Model->delete_task($id);
		if($result == TRUE){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Deleted')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}
}
?>