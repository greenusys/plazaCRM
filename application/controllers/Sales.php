<?php
date_default_timezone_set('Asia/Kolkata');
	class Sales extends MY_Controller
	{	

	public function index()
	{
	
		$this->load->view('layout/header');
		$this->load->view("pages/invoice");
		$this->load->view("layout/footer");
	}	
}
?>	