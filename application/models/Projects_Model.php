<?php
class Projects_Model extends CI_Model{

	public function create_project($data){
		$checker=array('project_name'=>$data['project_name']);
		$this->db->where($checker);
		$check = $this->db->get("projects_")->result_array();
		if(count($check) ==0 ){
		 	if($this->db->insert("projects_",$data)){ 		
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