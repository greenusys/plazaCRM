<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilities extends CI_Controller { 

	public function holiday(){
		$this->load->view('layout/header');
		$this->load->view("pages/holiday");
		$this->load->view("layout/footer");
	}
	public function gaolTracking(){
		$this->load->view('layout/header');
		$this->load->view("pages/goal_tracking");
		$this->load->view("layout/footer");
	}
}
?>