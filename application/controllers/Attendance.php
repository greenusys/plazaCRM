
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

	public function timeHistory()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/time_history");
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