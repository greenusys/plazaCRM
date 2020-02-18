<?php
	/**
	 * 
	 */
	class Rahul extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Rahul_Model','Demo');
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