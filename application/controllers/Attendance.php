
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

	public function timeHistory()
	{
		echo 'timeHistory';
	}
	public function timeChaneRequest()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/timechange_request");
		$this->load->view("layout/footer");
	}
	public function attendanceReport()
	{
		echo 'attendanceReport';
	}
	public function markAttendance()
	{
		echo 'markAttendance';
	}
	
	
	
}
?>