<?php
	
	class Department extends MY_Controller{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Department_model','DPT');
			$this->load->model('AttendanceModel','ATND');
		}
		public function index(){
			$data['Depart']=$this->DPT->getAllDeppartments();
			$data['Employee']=$this->ATND->fetchEmployee();
			// print_r($data['Depart']);
			$dp=$data['Depart'];
			foreach ($dp as $department ) {
				// print_r($department);
				// print_r($department->departments_id);
				$d['fullname']=$department->fullname;
				$d['Dept_id']=$department->departments_id;
				$d['Dept_head']=$department->department_head_id;
				$d['Dept_name']=$department->deptname;
				$d['designation']=$this->getDesignations($department->departments_id);
				$dat[]=$d;
			}
			$data['Deatils']=$dat;
			// print_r($data['Deatils']);
			// die;
			$session=$this->session->userdata('logged_user');
		$designation_id=$session[0]->designations_id;
		$data['Assign_permission']=$this->DPT->CheckPermission($designation_id);
			$this->load->view('layout/header');
			$this->load->view('pages/department',$data);
			$this->load->view('layout/footer');
		}

		public function getDesignations($departments_id){
			// $this->db->where('');
			return $this->DPT->getDesignations($departments_id);
		}

		public function getDesignations_ajax(){
			$departments_id=$_POST['dept_id'];
			$result=$this->DPT->getDesignations($departments_id);
			die(json_encode(array('status'=>'1','data'=>$result)));
		}

		public function fetch_designation(){
			$designation_id=$_POST['desig_id'];
			$result=$this->DPT->fetch_designation($designation_id);
			echo $result[0]->permission;
		}

		public function updateDeptName (){
			$name=$this->input->post('dptName');
			$id=$this->input->post('dptId');
			$depHead=$this->input->post('depHead');
			if($this->DPT->updateDeptName($name, $id, $depHead)){
				die(json_encode(array("code"=>1, "data"=>"Department Name Updated Successfully.")));
			}else{
				die(json_encode(array("code"=>0, "data"=>"Failed To Update Department Name")));
			}
		}
		public function newDepartment(){
			$data['Employee']=$this->ATND->fetchEmployee();
			$data['Depart']=$this->DPT->getAllDeppartments();
			$this->load->view('layout/header');
			$this->load->view('pages/newDepart',$data);
			$this->load->view('layout/footer');
		}
		public function addNewDep(){
			$dep_id=$this->input->post('department');
			$newDep=$this->input->post('newDepartment');
			// $departmentHead=$this->input->post('departmentHead');
			$newDesig=$this->input->post('designation');
			if($dep_id==0){
				// echo 'Create Department';
				if($this->DPT->createDepartment($newDep,$newDesig)){
					die(json_encode(array("code"=>1,"msg"=>"Department Added Successfully.")));
				}else{
					die(json_encode(array("code"=>0,"msg"=>"Failed To Add Department")));
				}
				//create Designation
			}else{
				// echo 'Create Designation';
				if($this->DPT->createDesignation($dep_id,$newDesig)){
					die(json_encode(array("code"=>1,"msg"=>"Designation Added Successfully.")));
				}else{
					die(json_encode(array("code"=>0,"msg"=>"Failed To Add Designation")));
				}
				// create Department
			}
		}
		public function deleteDepartment(){
			// $this->input->post('depId')
			if($this->DPT->deleteDepartment($this->input->post('depID'))){
				die(json_encode(array("code"=>1, "data"=>"Department Delete Successfully.")));
			}else{
				die(json_encode(array("code"=>0, "data"=>"Failed To Delete Department")));
			}
		}
		public function deleteDesignation(){
			// $this->input->post('depId')
			if($this->DPT->deleteDesignation($this->input->post('desID'))){
				die(json_encode(array("code"=>1, "data"=>"Designation Delete Successfully.")));
			}else{
				die(json_encode(array("code"=>0, "data"=>"Failed To Delete Designation")));
			}
		}
		
		

	}

?>