<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Projects_Model');
		}

	public function index()
	{
		//echo 'Projects';
		$this->load->view('layout/header');
		$this->load->view("pages/projects");
		$this->load->view("layout/footer");
	}

	public function create_project(){
		 $result = $this->Projects_Model->create_project($_POST);
		 if($result == TRUE){
		 	die(json_encode(array('status' =>'1','msg'=>'Project Created Successfully')));
		 }
		 else{
		 	die(json_encode(array('status' =>'0','msg'=>'Project With Same Name Already Exists')));
		 }
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