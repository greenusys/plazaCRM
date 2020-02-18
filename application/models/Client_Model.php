<?php
class Client_Model extends CI_Model{

	public function create_client($data){
		$checker=array('email'=>$data['email']);
		$this->db->where($checker);
		$check = $this->db->get("tbl_client")->result_array();
		if(count($check) ==0 ){
		 	if($this->db->insert("tbl_client",$data)){ 		
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

	public function getClients(){
		$this->db->select('client_id, name');
		$this->db->order_by('client_id', 'Desc');
		$check = $this->db->get("tbl_client")->result();
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

	public function getAllClient(){
		$this->db->order_by('tbl_client.client_id', 'Desc');
		// $this->db->join('tbl_customer_group','tbl_customer_group.customer_group_id=tbl_client.customer_group_id','full');
		$this->db->join('tbl_project','tbl_project.client_id=tbl_client.client_id');
		$check = $this->db->get("tbl_client")->result();
		
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
	public function getClientDetails(){
		$this->db->order_by('tbl_client.client_id', 'Desc');
		// $this->db->join('tbl_customer_group','tbl_customer_group.customer_group_id=tbl_client.customer_group_id','full');
	
		$check = $this->db->get("tbl_client")->result();
		
		if(count($check)==0 ){
			return false;
		}else{
			return $check;
		} 
	}

}

?>