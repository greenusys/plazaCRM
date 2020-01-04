
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
	}

	public function timeHistory()
	{
		$data['Employee']=$this->ATND->fetchEmployee();
		$this->load->view('layout/header');
		$this->load->view("pages/time_history",$data);
		$this->load->view("layout/footer");
	}
	public function timeChaneRequest()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/timechange_request");
		$this->load->view("layout/footer");
	}
	public function attendanceReport()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/attendance_report");
		$this->load->view("layout/footer");
	}
	public function markAttendance()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/mark_attendance");
		$this->load->view("layout/footer");
	}
	
	
	
}
?>