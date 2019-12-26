<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

public function __construct(){
		parent::__construct();
		$this->load->model('Client_Model');
		}


	public function index()
	{
		echo 'Task';
	}

	public function create_client(){
		 $result = $this->Client_Model->create_client($_POST);
		 if($result == TRUE){
		 	die(json_encode(array('status' =>'1','msg'=>'Client Created Successfully')));
		 }
		 else{
		 	die(json_encode(array('status' =>'0','msg'=>'Client With Same Email Already Exists')));
		 }
	}

	public function fetch_client(){
		$client_id=$_POST['client_id'];
		$result=$this->Client_Model->fetch_client($client_id);
		if($result){
			die(json_encode(array('status' =>'1' ,'data'=>$result )));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'no data ')));
		}
	}

	public function update_client(){
		$result=$this->Client_Model->update_client($_POST);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Updated')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}

	public function delete_client(){
		$id=$_POST['client_id'];
		$result=$this->Client_Model->delete_client($id);
		if($result == TRUE){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Deleted')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}
}
?>