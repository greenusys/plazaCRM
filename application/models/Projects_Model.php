<?php
class Projects_Model extends CI_Model{

	public function create_project($data){
		$checker=array('project_name'=>$data['project_name']);
		$this->db->where($checker);
		$check = $this->db->get("tbl_project")->result_array();
		if(count($check) ==0 ){
		 	if($this->db->insert("tbl_project",$data)){ 		
		 		return true;
		 	}else{
		 		return false;
		 	}
		}else{
			return false;
		} 
	}

	public function fetch_project($id){
		$checker=array('id'=>$id);
		$this->db->where($checker);
		$check = $this->db->get("projects_")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function fetch_projects(){
		$this->db->select('project_id, project_name,progress,end_date,project_status,permission,tbl_client.name as client_name');
		$this->db->join('tbl_client', 'tbl_client.client_id = tbl_project.client_id');
		$check = $this->db->get("tbl_project")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function fetch_settings(){
		$check = $this->db->get("tbl_project_settings")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function update_project($data){
			$id=$data['id'];
			unset($data['id']);
			$this->db->where('id', $id);
    		if($this->db->update('projects_',$data)){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

	public function delete_project($data){
			$this->db->where('id', $data);
			if($this->db->delete('projects_')){
				return TRUE;
			}
			else{
				return FALSE;
			}
	}

}

?>