
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
	}
	public function markMyAttendance(){
		// echo $_SESSION['clocked']=0;
		// die;
		$session=$this->session->userdata('logged_user');
		$my_Id=$session[0]->user_id;
		
// 		print_r($da)
// ;			echo '========';
		
		
		$my_time=$this->input->post('d_time');
		$type=$this->input->post('type');
		$ip=$this->input->ip_address();
		$date_=date('Y-m-d');
		
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

		$st=$this->ATND->markMyAttendance($data,$my_Id,$attArray);
		if($st!=false){
			$condition=array("user_id"=>$my_Id,"date_in"=>date('Y-m-d'));
			$da=$this->ATND->getAttendanceId($condition);
			$attendanceId=$da[0]->attendance_id;
			if($response=$this->checkForExistenceIntblClock($attendanceId)){
				$temp=0;
				$clk_id=0;
				foreach($response as $clk){
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
						die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$attendanceId,"act"=>"Update ")));
					}else{
						die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$attendanceId)));
					} 
				}else{
					// echo 'insert krna hai';
					$new=array_merge($data,array("attendance_id"=>$attendanceId));
					if($this->db->insert('tbl_clock',$new)){
						$_SESSION['clocked']=1;
						die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$attendanceId,"act"=>"Insert")));
					}else{
						die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$attendanceId)));
					} 
				}
			}else{
				//print_r($response);
				// echo 'Insert Krna Hai';
				$new=array_merge($data,array("attendance_id"=>$attendanceId));
				if($this->db->insert('tbl_clock',$new)){
					$_SESSION['clocked']=1;
					die(json_encode(array("code"=>1,"msg"=>"Attendance Marked.","data"=>$attendanceId,"act"=>"Insert ")));
				}else{
					die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$attendanceId)));
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
			die(json_encode(array("code"=>0,"msg"=>"Failed to Mark Attendance.","data"=>$attendanceId)));
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
	public function getTimeHistory(){
		$userId=$this->input->post('emp_id');
		$data['active'] = date('Y');
		$attendance_info = $this->ATND->get_attendance(array('user_id' => $userId));
        $data['mytime_info'] = $this->get_mytime_info($attendance_info);
        // print_r($data['mytime_info']);
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
	public function get_mytime_info($attendance_info)
    {

        if (!empty($attendance_info)) {

            foreach ($attendance_info as $v_info) {
            	
            	
                if ($v_info->date_in == $v_info->date_out) {
                	// echo ' ****** ';
                    $date = strftime("%m.%d.%Y", strtotime($v_info->date_in));
                    // print_r($date);
                } else {
                    $date = 'Day In'. ' : ' . strftime("%m.%d.%Y", strtotime($v_info->date_in)) . ', ' . 'Day Out'. ': ' . strftime("%m.%d.%Y", strtotime($v_info->date_out));
                }
                // echo $v_info->attendance_id;
                $details_=$this->get_result($v_info->attendance_id);
                // print_r($details_);
                $clock_info[date('Y', strtotime($v_info->date_in))][date('W', strtotime($v_info->date_in))][$date] = $details_;
//                    $this->attendance_model->get_mytime_info($v_info->attendance_id);
            }
            // print_r($clock_info);
            // echo '****************************************************************************************************************';
            return $clock_info;
        }
    }
    public function get_Result($id){
    	return $this->ATND->getAttendanceDetails($id);
    }
	
	
	
}
?>