<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('LoginModel','Login');
		$this->load->model('AttendanceModel','ATND');
	}

	public function index()
	{
		$this->load->view('pages/auth-login');
	}
	public function validateLogin(){
		// print_r($_POST);
		$data=array("user_name_"=>$this->input->post('user_name'),"password_"=>$this->input->post('pass_code'));
		if($res=$this->Login->verifyThisUser($data)){
			$this->session->set_userdata('logged_user',$res);
			redirect('Dashboard');
		}else{
			$this->session->set_flashdata('msg','Invalid Username Or Password');
			redirect('Login');
		}
	}
	public function logout(){
		$session=$this->session->userdata('logged_user');
		$my_Id=$session[0]->user_id;
		$condition=array("user_id"=>$my_Id,"date_in"=>date('Y-m-d'));
       
		$da=$this->ATND->getAttendanceId($condition);
		$attendanceId=$da[0]->attendance_id;
		print_r($attendanceId);
		echo  ' ****** ';
		print_r($da);
		if($da[0]->date_out==""){
			echo 'It is Empty';
		}else{
			echo 'Not Empty';
		}
		// $sess_array = array();
		// // $this->db->where('user_id',$_SESSION['logged_in'][0]->user_id);
		// // if($this->db->update('users',array('login_Status'=>0))){
		// 	$this->session->unset_userdata('clocked', $sess_array);
		// 	$this->session->set_flashdata('msg','Successfully Logout');
		// 	// redirect(base_url());
		// // }
		// $this->session->sess_destroy();
		// redirect('Login');
	}
	
}
