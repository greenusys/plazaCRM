<?php
	
	class Department extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Department_model','DPT');
		}
		public function index(){
			$data['Depart']=$this->DPT->getAllDeppartments();
			// print_r($data['Depart']);
			$dp=$data['Depart'];
			foreach ($dp as $department ) {
				// print_r($department);
				// print_r($department->departments_id);
				$d['Dept_id']=$department->departments_id;
				$d['Dept_head']=$department->department_head_id;
				$d['Dept_name']=$department->deptname;
				$d['designation']=$this->getDesignations($department->departments_id);
				$dat[]=$d;
			}
			$data['Deatils']=$dat;
			// print_r($data['Deatils']);
			// die;
			$this->load->view('layout/header');
			$this->load->view('pages/department',$data);
			$this->load->view('layout/footer');
		}
		public function getDesignations($departments_id){
			// $this->db->where('');
			return $this->DPT->getDesignations($departments_id);
		}

	}

?>