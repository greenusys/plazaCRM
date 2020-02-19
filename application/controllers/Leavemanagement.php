<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leavemanagement extends MY_Controller {
	function __construct(){
		parent::__construct();
 		$this->load->model('Leave_model','leave');
	}
	public function index()
	{
		$usersdetail=$this->session->logged_user;
	    $formyleave=$usersdetail[0]->user_id;
		$data['fetch_leave_data']=$this->leave->fetchLeaveDetails();
		$data['fetch_users_data']=$this->leave->fetchUserForApplyLeave();
		$data['fetch_leave_category_data']=$this->leave->fetchLeaveCategoryData();
		$data['fetch_Myleave_data']=$this->leave->fetchMyLeaveDetails($formyleave);
		$data['fetch_Department_data']=$this->leave->fetchDepartmentforLeave();
// 		print_r($data['fetch_leave_data']);
		$this->load->view('layout/header');
		$this->load->view("pages/leave_management",$data);
		$this->load->view("layout/footer");
	}
	public function LeavePolicySection()
	{
		
		
		$data['fetch_Department_data']=$this->leave->fetchDepartmentforLeave();
		$data['leave_category_data']=$this->leave->fetchLeaveCategoryData();
		// $data['fetch_Yearly_data']=$this->leave->fetchLeaveYearlyData();
		$this->load->view('layout/header');
		$this->load->view("pages/leave_policy",$data);
		$this->load->view("layout/footer");	
	}
	public function Fetchtotalleave()
	{
		$dept_id=$this->input->post('dept_id');
		$data=$this->leave->fetchtotalLeaveById($dept_id);
		die(json_encode(array('code'=>1,'data'=>$data)));

	}
	public function fetchDesignationById()
	{
		$dept_id=$this->input->post('dept_id');
		$data=$this->leave->fetchDesignationforLeaveById($dept_id);
		die(json_encode(array('code'=>1,'data'=>$data)));


	}
	
	public function LeaveYearySection()
	{
		$data['fetch_Department_data']=$this->leave->fetchDepartmentforLeave();
		$data['fetch_Yearly_data']=$this->leave->fetchLeaveYearlyData();

		$this->load->view('layout/header');
		$this->load->view("pages/leave_yearlyassign",$data);
		$this->load->view("layout/footer");	
	}
	public function addYearlyLeave()
	{ 
		$dept=$this->input->post('dept_id');
		$total_leave=$this->input->post('totalleave'); 	 
		$data = array(
        	'department_id'=>$dept,
        	'total_Yearlyleave'=>$total_leave
        );
   
        $result=$this->leave->addYearlyLeaveData($data,$dept);
		if($result==1){
			die(json_encode(array('status' =>'1' ,'msg'=>'Added Successfully')));
		}
		elseif($result==0){
			die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
		}
		else{
			die(json_encode(array('status' =>'2' ,'msg'=>'already exist')));
		}
	}
	public function Edit_Yearlyleave($id)
	{
	    $data['fetch_leave_yearly']=$this->leave->EditYearlyleave($id);
	   $data['fetch_Department_data']=$this->leave->fetchDepartmentforLeave();
	    // print_r( $data['fetch_leave_yearly']);
    	$this->load->view('layout/header');
		$this->load->view("pages/edityearly_leave",$data);
		$this->load->view("layout/footer");	
	
	}
	public function updateYearlyleave()
	{
		$leaveyearid=$this->input->post('year_leaveid');
		$dept=$this->input->post('dept_id');
		$total_leave=$this->input->post('totalleave'); 	 
		$data = array(
        	'department_id'=>$dept,
        	'total_Yearlyleave'=>$total_leave
        );
   
        $result=$this->leave->UpdateYearlyLeaveData($data,$leaveyearid);
		if($result==1){
			die(json_encode(array('status' =>'1' ,'msg'=>'Update Successfully')));
		}
		elseif($result==0){
			die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
		}
		else{
			die(json_encode(array('status' =>'2' ,'msg'=>'Try Again')));
		}
	}
	public function Deleteyearlyleave()
	{
		$data=array('year_leaveid'=>$this->input->post('lyear_id'));
		$results=$this->leave->Deleteyearlyleave($data);
		die(json_encode($results));

	}
	public function checkAvailableleave()
	{
		$dept_id=$this->input->post('dept_id');
		$data=$this->leave->checkAvailableleave($dept_id);
		die(json_encode(array('code'=>1,'data'=>$data)));
		
	}
	public function addLeavePolicyData()
	{ 	  
		$data = array(
			'lpolicy_department_id'=>$this->input->post('lpolicy_department_id'),
			'lpolicy_designation_id'=>$this->input->post('lpolicy_designation_id'),
			'lpolicy_category_id'=>$this->input->post('lpolicy_category_id'),
			'lpolicy_days'=>$this->input->post('lpolicy_days'),
			'lpolicy_gender'=>$this->input->post('lpolicy_gender'),
			'lpolicy_effective_date'=>$this->input->post('lpolicy_effective_date'),
			'lpolicy_activate'=>$this->input->post('lpolicy_activate'));
   
        $result=$this->leave->addLeavePolicyData($data);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Added Successfully')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
		}
	}
	public function addleavecategory()
	{
		$leave_category=$this->input->post('leave_category');
		$leave_quota=$this->input->post('leave_quota');
		$dept_id=$this->input->post('dept_id');	
			$data = array(
        	'leave_category'=>$leave_category,
        	'leave_quota'=>$leave_quota,
        	'leave_cat_dept_id'=>$dept_id
        );
   
        $result=$this->leave->addleaveCategoryData($data);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Leave Category added Successfully')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Error')));
		}
	}
	public function getleavecat()
	{
		if(count($data=$this->leave->getAllDetails)>0)
		{
			die(json_encode(array("code"=>1,"data"=>$data)));
		}else{
			die(json_encode(array("code"=>0,"data"=>"No Data Found.")));
		}
		
	}
	public function getleavecatbyid()
	{
		
		$condition=array("leave_category_id"=>$this->input->post('cat_id'));
		if(count($data=$this->leave->getAllDetails($condition))>0)
		{
			die(json_encode(array("code"=>1,"data"=>$data)));
		}else{
			die(json_encode(array("code"=>0,"data"=>"No Data Found.")));
		}
		
	}
	public function Leave_Modal_Detailss()
	{
	   $leave_id=$this->input->post('leaveapp_id');
	   $data=$this->leave->fetchleaveDataByIdToModal($leave_id);
	   die(json_encode(array('msg'=>1,'data'=>$data)));
	   //print_r($transid);
	}
	public function addleaveapplication()
	{
	   // print_r($_POST);
		$user_id=$this->input->post('user_id');
// 		$album_title=$this->input->post('alb_title');
		$leave_category_id=$this->input->post('leave_category_id');
		$reason=$this->input->post('editor1');
 		$leave_type=$this->input->post('duration');
//  		print_r($leave_type);
//  		die();
 		
		$hours=$this->input->post('hours');
		$leave_start_date=$this->input->post('leave_start_date');
		$leave_end_date=$this->input->post('leave_end_date');
     	$application_status=$this->input->post('application_status');
		$application_date=date('d-m-Y H:i:s');
// 		$view_status=$this->input->post('attachment');
		$comments=$this->input->post('comments');
		$approve_by=$this->input->post('approve_by');
		$data = array();
		// If file upload form submitted
			if(!empty($_FILES['files']['name']))
			{
			   $filesCount = count($_FILES['files']['name']);
			     for($i = 0; $i < $filesCount; $i++)
		        {
		            $ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
		                $_FILES['file']['name']     = "leave-image".date("Y-m-d-H-i-s").$i.".".$ext;
		                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
		                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
		                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
		                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
		                // File upload configuration
	            $uploadPath = './uploads/leave/';
		                $config['upload_path'] = $uploadPath;
		                $config['allowed_types'] = 'jpg|jpeg|png|gif';
	 
	            // Load and initialize upload library
	             $this->load->library('upload', $config);
		                $this->upload->initialize($config);
	            
	            // Upload file to server
	            if($this->upload->do_upload('file'))
		                {
		                    // Uploaded file data
		                    $fileData = $this->upload->data();
		                    $uploadData[$i]['file_name'] = $fileData['file_name'];
		                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
		                }
		                else
		                {
		                	echo"";
		                }
		                $attach[]=$_FILES['file']['name'];	
    	            
		        }
	            $attachfiles=implode(",",$attach);
			    // $videos=implode(",",$images);
			    if(!empty($uploadData))
			    {
			        // Insert files data into the database
				$uploadDate=date("Y-m-d H:i:s");
				$data = array(
	        	'user_id'=>$user_id,
	        	'leave_category_id'=>$leave_category_id,
	        	'reason'=>$reason,
	        	'leave_type'=>$leave_type,
	        	'hours'=>$hours,
	        	'leave_start_date'=>$leave_start_date,
	        	'leave_end_date'=>$leave_end_date,
	        	'application_status'=>1,
	        	'view_status'=>0,
	        	'application_date'=>$application_date,
	        	'attachment'=>$attachfiles,
	        	'comments'=>$comments,
	        	'approve_by'=>$approve_by);
	       //	print_r($data);
	        $results=$this->leave->addLeaveData($data);
    	        	  switch ($results) 
    				{
    					case 0:$this->session->set_flashdata('msg','Error');
    						break;
    					case 1:$this->session->set_flashdata('msg','Leave applied Successfully');
    						break;
    					
    					default:$this->session->set_flashdata('msg','Error');
    						break;
    				}
    					redirect('Leavemanagement/index');
			    }
	        
    // 			if($results)
    // 			{
    // 				die(json_encode(array('status' =>'1' ,'msg'=>'Leave applied Successfully')));
    // 					redirect('Leavemanagement/index');
    				
    // 			}
 			else
 			{
 			    	die(json_encode(array('status' =>'2' ,'msg'=>'code error')));
 			}
 			// image if end
		}
		else
		{
		    	die(json_encode(array('status' =>'3' ,'msg'=>'Error Try Again ')));
		}
	
	}
	public function getleaveapp()
	{
		if(count($data=$this->leave->getAllDetails)>0)
		{
			die(json_encode(array("code"=>1,"data"=>$data)));
		}else{
			die(json_encode(array("code"=>0,"data"=>"No Data Found.")));
		}
		
	}
		public function getleaveappbyid()
	{
		$condition=array("leave_application_id"=>$this->input->post('leave_application_id'));
		if(count($data=$this->leave->getAllDetails($condition))>0)
		{
			die(json_encode(array("code"=>1,"data"=>$data)));
		}else{
			die(json_encode(array("code"=>0,"data"=>"No Data Found.")));
		}
		
	}
	public function changeLeaveStatus()
	{
		$applictaion_status=2;
		$leave_id=$this->input->post('leave_id');
		$data=array('application_status'=>$applictaion_status);
		$dataaa=$this->leave->changeleavestatusByid($leave_id,$data);
		if($dataaa)
		{
			die(json_encode(array('code'=>1,'data'=>$dataaa)));
		}
		else
		{
			die(json_encode(array('code'=>0,'data'=>"Error try again")));
		}

	}
	public function RejectLeaveStatus()
	{
		$applictaion_status=3;
		$leave_id=$this->input->post('leave_id');
		$data=array('application_status'=>$applictaion_status);
		$dataaa=$this->leave->rejectleavestatusByid($leave_id,$data);
		if($dataaa)
		{
			die(json_encode(array('code'=>1,'data'=>$dataaa)));
		}
		else
		{
			die(json_encode(array('code'=>0,'data'=>"Error try again")));
		}

	}
}
?>