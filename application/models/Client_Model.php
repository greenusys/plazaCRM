<?php
class Client_Model extends CI_Model{

	public function create_client($data){
		$checker=array('comp_email'=>$data['comp_email']);
		$this->db->where($checker);
		$check = $this->db->get("client_")->result_array();
		if(count($check) ==0 ){
		 	if($this->db->insert("client_",$data)){ 		
		 		return true;
		 	}else{
		 		return false;
		 	}
		}else{
			return false;
		} 
	}

	public function fetch_client($id){
		$checker=array('id'=>$id);
		$this->db->where($checker);
		$check = $this->db->get("client_")->result_array();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function update_client($data){
			$id=$data['id'];
			unset($data['id']);
			$this->db->where('id', $id);
    		if($this->db->update('client_',$data)){
    			return true;
    		}
    		else{
    			return false;
    		}
	}

	public function delete_client($data){
			$this->db->where('id', $data);
			if($this->db->delete('client_')){
				return TRUE;
			}
			else{
				return FALSE;
			}
	}

}

?>