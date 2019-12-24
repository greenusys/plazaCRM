<?php
class Leave_Model extends CI_Model
{
	public function getAllDetails($table_name, $condition=""){
		if($condition!=""){
			$this->db->where($condition);	
		}
		return $this->db->get($table_name)->result();
	}
	public function addData($table_name,$data){
		if($this->db->insert($table_name,$data)){
			return true;
		}else{
			return false;
		}
	}
	public function updateData($table_name,$data,$condition){
		$this->db->where($condition);
		if($this->db->update($table_name,$data)){
			return true;
		}else{
			return false;
		}
	}
}

?>