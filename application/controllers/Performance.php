<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Performance extends CI_Controller 
{

	function __construct(){
		parent::__construct();
		$this->load->model('AttendanceModel','ATND');
		$this->load->model('Job_circular_model');
		$this->load->model('Performance_model');
	}
	public function index()
	{
		echo 'Working';
	}
	public function performanceReport()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/performance_report");
		$this->load->view("layout/footer");
	}
	public function giveAppraisal()
	{
		$data['Employee']=$this->ATND->fetchEmployee();
		$this->load->view('layout/header');
		$this->load->view("pages/give_appraisal",$data);
		$this->load->view("layout/footer");
	}
	public function indicator()
	{
		$data['all_dept_info'] = $this->db->get('tbl_departments')->result();
	 	foreach ($data['all_dept_info'] as $v_dept_info) {
            $data['all_department_info'][] = $this->Job_circular_model->get_add_department_by_id($v_dept_info->departments_id);
        }
        $data['fetch_indicator']=$this->Performance_model->fetch_indicator($data);
		$this->load->view('layout/header');
		$this->load->view("pages/indicator",$data);
		$this->load->view("layout/footer");
	}
	public function create_indicator()
	{
		//print_r($_POST);
		$designations_id=$this->input->post('designations_id');
		$customer_experiece_management=$this->input->post('customer_experiece_management');
		$marketing=$this->input->post('marketing');
		$management=$this->input->post('management');
		$administration=$this->input->post('administration');
		$presentation_skill=$this->input->post('presentation_skill');
		$quality_of_work=$this->input->post('quality_of_work');
		$efficiency=$this->input->post('efficiency');
		$integrity=$this->input->post('integrity');
		$professionalism=$this->input->post('professionalism');
		$team_work=$this->input->post('team_work');
		$critical_thinking=$this->input->post('critical_thinking');
		$conflict_management=$this->input->post('conflict_management');
		$attendance=$this->input->post('attendance');
		$ability_to_meed_deadline=$this->input->post('ability_to_meed_deadline');
 		$data = array(
			"designations_id"=>$designations_id,
 			"customer_experiece_management"=>$customer_experiece_management,
 			"marketing"=>$marketing,
 			"management"=>$management,
 			"administration"=>$administration,
 			"presentation_skill"=>$presentation_skill,
 			"quality_of_work"=>$quality_of_work,
 			"efficiency"=>$efficiency,
 			"integrity"=>$integrity,
 			"professionalism"=>$professionalism,
 			"team_work"=>$team_work,
 			"critical_thinking"=>$critical_thinking,
 			"conflict_management"=>$conflict_management,
 			"attendance"=>$attendance,
 			"ability_to_meed_deadline"=>$ability_to_meed_deadline	
        );
		 // print_r($data);
		$result = $this->Performance_model->create_indicator($data);
		if($result == TRUE)
		{
		 	die(json_encode(array('status' =>'1','msg'=>'Indicator inserted Successfully')));
		}
		else
		{
		 	die(json_encode(array('status' =>'0','msg'=>'Indicator With Same Name Already Exists')));
		}
	}
		public function paySlip()
	{
		$this->load->view('layout/header');
		$this->load->view("pages/payslip");
		$this->load->view("layout/footer");
	}
}
?>