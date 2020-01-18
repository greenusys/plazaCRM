
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
	}
	public function markMyAttendance(){
		$my_Id=22;
		$my_time=$this->input->post('d_time');
		$type=$this->input->post('type');
		$ip=$this->input->ip_address();
		$date_=date('Y-m-d');
		$attendanceId=$this->getLastInsertedId();
		// `tbl_clock`(``, ``, `clockin_time`, `clockout_time`, `comments`, `clocking_status`, `ip_address`)
		//first time
		if($type==1){
			$data=array(
				"clockin_time"=>$my_time,
				"ip_address"=>$ip,
			);
			$attArray=array(
				"user_id"=>$my_Id,
				"leave_application_id"=>0,
				"date_in"=>$date_,
				"attendance_status"=>1,
				"clocking_status"=>0
			);
		}else{
			$data=array(
				"clockout_time"=>$my_time,
				"ip_address"=>$ip,
			);
			$attArray=array(
				"user_id"=>$my_Id,
				"leave_application_id"=>0,
				"date_out"=>$date_,
				"attendance_status"=>1,
				"clocking_status"=>0
			);
		}
		//die(json_encode(array("Ip"=>$ip,"last"=>$attendanceId[0]['attendance_id'])));
		// tbl_clock`(`clock_id`, ``, ``, ``, `comments`, `clocking_status`, `ip_address`)
		$st=$this->ATND->markMyAttendance($data,$my_Id,$attArray);
		if($st!=false){
			// echo '===>'.$st;
			if($response=$this->checkForExistenceIntblClock($st)){
				//insert
				// echo 'Insert Krna Hai';
				// print_r($response);
				$temp=0;
				$clk_id=0;
				foreach($response as $clk){
					// echo ' Clock In Time : '.$clk->clockin_time;
					// echo ' Clock Out Time : '.$clk->clockout_time;
					if($clk->clockout_time==""){
						$temp=1;
						$clk_id=$clk->clock_id;
					}
				}
				if($temp==1){
					// echo 'isiko update krana h';
					$this->db->where('clock_id',$clk_id);
					$clock_out=$my_time;
					if($this->db->update('tbl_clock',array("clockout_time"=>$clock_out))){
						$_SESSION['clocked']=0;
						die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$st)));
					}else{
						die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$st)));
					} 
				}else{
					// echo 'insert krna hai';
					$new=array_merge($data,array("attendance_id"=>$st));
					if($this->db->insert('tbl_clock',$new)){
						$_SESSION['clocked']=1;
						die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$st)));
					}else{
						die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$st)));
					} 
				}
			}else{
				//print_r($response);
				// echo 'Insert Krna Hai';
				$new=array_merge($data,array("attendance_id"=>$st));
				if($this->db->insert('tbl_clock',$new)){
					$_SESSION['clocked']=1;
					die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$st)));
				}else{
					die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$st)));
				}
				// if($this->db->update('tbl_clock',$new)){
				// 	die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$st)));
				// }else{
				// 	die(json_encode(array("code"=>1,"msg"=>"Failed to Mark Attendance.","data"=>$st)));
				// }
				//update
			}


			//insert or update tbl_clock
			
		}else{
			die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$st)));
		}
	}
	public function checkForExistenceIntblClock($st){
		return $this->ATND->getClock($st);
	}
	public function getLastInsertedId(){
		return $this->ATND->getLastAttendanceId();
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