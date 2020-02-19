<?php
	class Bugs extends MY_Controller
	{	
		function __construct()
		{
			parent::__construct();
			// $this->load->model('Rahul_Model','Demo');
		}
		public function index(){
			$this->load->view('layout/header');
			$this->load->view('pages/Bugs');
			$this->load->view('layout/footer');
		}	
	}
?>
