<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('pages/index');
		$this->load->view('layout/footer');
	}
}
?>