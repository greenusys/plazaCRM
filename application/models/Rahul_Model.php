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
		public function get_over_due_project(){
			$today=date('Y-m-d');
			$qy="Select * from tbl_project where project_status='in_progress' and end_date<'$today'";
			return $this->db->query($qy)->result();
		}
		public function get_in_progress_task(){
			$today=date('Y-m-d');
			$qy="Select * from tbl_task where task_status='in_progress' and due_date>='$today'";
			return $this->db->query($qy)->result();
		}
		public function get_over_due_task(){
			$today=date('Y-m-d');
			$qy="Select * from tbl_task where task_status='in_progress' and due_date<'$today'";
			return $this->db->query($qy)->result();
		}
	}
	
?>