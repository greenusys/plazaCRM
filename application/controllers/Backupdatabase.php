<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backupdatabase extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/backup_database");
		$this->load->view("layout/footer");
	}
}
?>