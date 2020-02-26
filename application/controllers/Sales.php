<?php
date_default_timezone_set('Asia/Kolkata');
	class Sales extends MY_Controller
	{	
	function __construct(){
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Client_Model');
		$this->load->model('Sales_Model');
	}

	public function index()
	{
		$data['users']=$this->User_model->fetch_user();
		$data['clients']=$this->Client_Model->getClients();
		$this->load->view('layout/header');
		$this->load->view("pages/invoice",$data);
		$this->load->view("layout/footer");
	}	

	public function fetch_project(){
		$result=$this->Client_Model->fetch_projects_by_client_id($_POST['client_id']);
		if ($result) {
			die(json_encode(array('status'=>'1','data'=>$result)));
		}
		else{
			die(json_encode(array('status'=>'0')));
		}
	}

	public function create_invoice(){
		$invoice_date=$_POST['invoice_date'];
		if (isset($_POST['recur_frequency'])) {
			$_POST['recurring']="1";
			if ($_POST['recur_frequency']=="7D") {
				$_POST['recuring_frequency']="7";
			}
			elseif ($_POST['recur_frequency']=="1M") {
				$_POST['recuring_frequency']="31";
			}
			elseif ($_POST['recur_frequency']=="3M") {
				$_POST['recuring_frequency']="93";
			}
			elseif ($_POST['recur_frequency']=="6M") {
				$_POST['recuring_frequency']="182";
			}
			elseif ($_POST['recur_frequency']=="1Y") {
				$_POST['recuring_frequency']="365";
			}
			elseif ($_POST['recur_frequency']=="2Y") {
				$_POST['recuring_frequency']="730";
			}
			elseif ($_POST['recur_frequency']=="3Y") {
				$_POST['recuring_frequency']="1095";
			}
			else{
				$_POST['recuring_frequency']="31";
			}
			$_POST['recur_next_date']=date("Y-m-d", strtotime("$invoice_date +".$_POST['recuring_frequency']." days"));
		}
		else{
			$_POST['recurring']="2";
		}
		if(isset($_POST['everyone'])){
			unset($_POST['everyone']);
		}
		$exploder=explode("-",$invoice_date);
		$_POST['invoice_month']=$exploder[0]."-".$exploder[1];
		$_POST['invoice_year']=$exploder[0];
		$_POST['currency']="INR";
		$_POST['date_saved']=date('Y-m-d H:i:s');
		$_POST['total_tax']='{"tax_name":null,"total_tax":null}';
		$result=$this->Sales_Model->create_invoice($_POST);
		if (!$result) {
			die(json_encode(array('status'=>'0','msg'=>'Invoice ID already Exists')));
		}
		else{
			die(json_encode(array('status'=>'1','invoice_id'=>$result)));
		}
	}
}
?>	