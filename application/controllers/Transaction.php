<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Transactions_model');
	}

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
		$data['transaction_report']=$this->Transactions_model->fetch_transactions();
		$this->load->view('layout/header');
		$this->load->view("pages/transaction_report",$data);
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