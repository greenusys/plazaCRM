<?php
date_default_timezone_set('Asia/Kolkata');
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Tasks_Model');
		$this->load->model('Notification_model');
		$this->load->model('User_model');
		}


	public function index()
	{
		$session=$this->session->userdata('logged_user');
		$id=$session[0]->user_id;
		$data['all_tasks']=$this->Tasks_Model->fetch_all_task(null);
		$data['all_tasks']=$data['all_tasks'];
		foreach ($data['all_tasks'] as $pr) {
        	$pr=(array)$pr;
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
		$task_data[]=array_merge($pr,array("assigned_to"=>$user));
        }
        $data['task_data']=$task_data;
		$data['users']=$this->User_model->fetch_user();
      	$data['profile_info'] = $this->db->where('user_id', $id)->get('tbl_account_details')->row();


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
		$date=date('Y-m-d H:i:s');
		$permission=$_POST['permission'];
		$session=$this->session->userdata('logged_user');
		$user_id=$session[0]->user_id;
		unset($_POST['client_id']);
		unset($_POST['radio_admin']);
		unset($_POST['editor1']);
		 $result = $this->Tasks_Model->create_task($_POST);
		 if($result == TRUE){
		 	    if ($permission=="all") {
		 		$fetch_users=$this->User_model->fetch_all_employees_admin();
		 		foreach ($fetch_users as $users) {
		 			$emp_id=$users->user_id;
		 			$new_data=array('date'=>$date,
		 							'description'=>'Task',
		 							'from_user_id'=>$user_id,
		 							'to_user_id'=>$emp_id,
		 							'link'=>'Task',
		 							'value'=>$_POST['task_name']);
		 			$notify=$this->Notification_model->insert_notification($new_data);
		 		}
		 	}
		 	else{
		 		$new=json_decode($permission);
				foreach($new as $key => $value){
					$new_data=array('date'=>$date,
		 							'description'=>'Task',
		 							'from_user_id'=>$user_id,
		 							'to_user_id'=>$key,
		 							'link'=>'Task',
		 							'value'=>$_POST['task_name']);
		 			$notify=$this->Notification_model->insert_notification($new_data);
				 }
		 	}
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

public function task_details($id=NULL)
	{
	 	$this->db->where(array('task_id' => $id));
 	 	// $this->db->join('tbl_users','tbl_task.created_by=tbl_users.user_id');
        $data['task_details']= $this->db->get('tbl_task')->result_array();
        // print_r($data['task_details']);
        foreach ($data['task_details'] as $pr) {
        	# code...
        	echo $perm=$pr['permission'];
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
		$task_data[]=array_merge($pr,array("assigned_to"=>$user));
        }
        $data['task_data']=$task_data;
        // print_r($task_data);
        // die;
        
  //       $project_id=$pr['project_id'];
  //      // print_r($project_id.'<br>');

  //       $taskprogress['taskprogress']=$this->counttaskprogress($project_id);
  //      // print_r($taskprogress);
  //      // die;
       
		// $user=array();
		// if($perm=="all"){
		// 	$user[]="Everyone";
		// }
		// else{
		// $new=json_decode($perm);
		// foreach($new as $key => $value){
		// 	$user[]=$this->User_model->fetch_user_by_id($key);
		//  }
		// }
		// $project_data[]=array_merge($pr,array("assigned_to"=>$user),$taskprogress);
		$this->load->view('layout/header');
		$this->load->view("pages/task_details",$data);
		$this->load->view("layout/footer");
	}
}
?>