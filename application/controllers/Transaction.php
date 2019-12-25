<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function index()
	{
		echo 'Working';
	}

	public function expense(){
		$this->load->view('layout/header');
		$this->load->view("pages/expense");
		$this->load->view("layout/footer");
	}
	public function deposit(){
		$this->load->view('layout/header');
		$this->load->view("pages/deposit");
		$this->load->view("layout/footer");
	}

	public function transfer(){
		$this->load->view('layout/header');
		$this->load->view("pages/transfer");
		$this->load->view("layout/footer");
	}
	public function TransactionReport(){
		$this->load->view('layout/header');
		$this->load->view("pages/transaction_report");
		$this->load->view("layout/footer");
	}
	public function TransferReport(){
		$this->load->view('layout/header');
		$this->load->view("pages/transfer_report");
		$this->load->view("layout/footer");
	}
	public function BankAndCash(){
		$this->load->view('layout/header');
		$this->load->view("pages/manage_account");
		$this->load->view("layout/footer");
	}

}
?>