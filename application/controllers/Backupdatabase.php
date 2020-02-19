<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backupdatabase extends MY_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/database_backup");
		$this->load->view("layout/footer");
	}
	// public function backupDatabase()
	// {
	// 	$this->load->view('layout/header');
	// 	$this->load->view("pages/backup_database");
	// 	$this->load->view("layout/footer");
	// }
}
?>