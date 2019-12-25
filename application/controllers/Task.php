<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/tasks");
		$this->load->view("layout/footer");
	}
}
?>