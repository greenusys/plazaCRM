<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends CI_Controller {

	public function index()
	{
			$this->load->view('layout/header');
		$this->load->view("pages/announcements");
		$this->load->view("layout/footer");
	}
}
?>