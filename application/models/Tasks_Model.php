<?php
class Tasks_Model extends CI_Model{

	public function create_task($data){
		$checker=array('task_name'=>$data['task_name']);
		$this->db->where($checker);
		$check = $this->db->get("tasks_")->result_array();
		if(count($check) ==0 ){
		 	if($this->db->insert("tasks_",$data)){ 		
		 		return true;
		 	}else{
		 		return false;
		 	}
		}else{
			return false;
		} 
	}

	public function fetch_task($id){
		$checker=array('id'=>$id);
		$this->db->where($checker);
		$check = $this->db->get("tasks_")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function update_task($data){
			$id=$data['id'];
			unset($data['id']);
			$this->db->where('id', $id);
    		if($this->db->update('tasks_',$data)){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

	public function delete_task($data){
			$this->db->where('id', $data);
			if($this->db->delete('tasks_')){
				return TRUE;
			}
			else{
				return FALSE;
			}
	}

}

?>