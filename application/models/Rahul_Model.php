<?php
	/**
	 * 
	 */
	class Rahul_Model extends CI_Model
	{
		public function get_in_progress_project(){
			$today=date('Y-m-d');
			$qy="Select * from tbl_project where project_status='in_progress' and end_date>='$today'";
			return $this->db->query($qy)->result();
		}
		public function get_particualr_user_project(){
			$qy="Select project_id,tbl_project.uploads as project_uploads, project_name,progress,end_date,project_status,permission,tbl_client.name as client_name from tbl_project join tbl_client on tbl_client.client_id=tbl_project.project_id ";
			return $this->db->query($qy)->result_array();
		}
		public function get_over_due_project(){
			$today=date('Y-m-d');
			// $this->db->select('project_id,tbl_project.uploads as project_uploads, project_name,progress,end_date,project_status,permission,tbl_client.name as client_name');
			// $condition=array("tbl_project.project_status"=>"in_progress",);
			// $this->db->join('tbl_client', 'tbl_client.client_id = tbl_project.client_id');
			// $check = $this->db->get("tbl_project")->result_array();
			// if(count($check)==0 ){
			// 	return false;
			// }else{
			// 	return $check;
			// } 
			$qy="Select project_id,tbl_project.uploads as project_uploads, project_name,progress,end_date,project_status,permission,tbl_client.name as client_name from tbl_project join tbl_client on tbl_client.client_id=tbl_project.project_id where tbl_project.project_status='in_progress' and tbl_project.end_date < '$today'";
			return $this->db->query($qy)->result_array();
		}
		// public function fetch_projects(){
		// 	$this->db->select('project_id,tbl_project.uploads as project_uploads, project_name,progress,end_date,project_status,permission,tbl_client.name as client_name');
		// 	$this->db->join('tbl_client', 'tbl_client.client_id = tbl_project.client_id');
		// 	$check = $this->db->get("tbl_project")->result_array();
		// 	if(count($check)==0 ){
		// 		return false;
		// 	}else{
		// 		return $check;
		// 	} 
		// }
		public function get_in_progress_task(){
			$today=date('Y-m-d');
			$qy="Select * from tbl_task where task_status='in_progress' and due_date>='$today'";
			return $this->db->query($qy)->result();
		}
		public function get_over_due_task(){
			$today=date('Y-m-d');
			$qy="Select * from tbl_task where task_status='in_progress' and due_date<'$today'";
			return $this->db->query($qy)->result_array();
		}
		public function get_online_user(){
			$this->db->Select('tbl_account_details.user_id,tbl_account_details.fullname,tbl_account_details.avatar');
			$this->db->join('tbl_account_details','tbl_account_details.user_id=tbl_users.user_id');
			$this->db->where('online_time',1);
			return $this->db->get('tbl_users')->result();
		}
	}
	
?>