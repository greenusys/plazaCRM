<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tasks_Model');
		}


	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/tasks");
		$this->load->view("layout/footer");
	}

	public function create_task(){
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