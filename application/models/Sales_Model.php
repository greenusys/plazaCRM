<?php

class Sales_Model extends MY_Model
{
	public function create_invoice($data){
		$this->db->select('*');
        $this->db->from('tbl_invoices');
        $this->db->where('reference_no',$data['reference_no']);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            return false;
        }
        else{
	       $this->db->insert('tbl_invoices', $data);
	       $insert_id = $this->db->insert_id();
	       return  $insert_id;
        }
    }

    public function main_invoice($data){
    	$this->db->insert('tbl_items', $data);
	    return true;
    }

    public function fetch_invoices(){
        $this->db->select('*');
        $this->db->from('tbl_invoices');
        $this->db->join('tbl_client', 'tbl_invoices.client_id = tbl_client.client_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
}
?>