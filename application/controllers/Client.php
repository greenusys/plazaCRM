<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

public function __construct(){
		parent::__construct();
		$this->load->model('Client_Model','Client');
		}


	public function index()
	{


		$data['Clients']= $this->Client->getAllClient();
		$this->load->view('layout/header');
		$this->load->view("pages/client",$data);
		$this->load->view("layout/footer");
	}
	public function clientList($type = null)
    {
        if ($this->input->is_ajax_request()) {
            $this->load->model('datatables');
            $this->datatables->table = 'tbl_client';
            $this->datatables->join_table = array('tbl_customer_group');
            $this->datatables->join_where = array('tbl_customer_group.customer_group_id=tbl_client.customer_group_id');
            $this->datatables->column_order = array('name', 'email', 'short_note', 'website', 'tbl_customer_group.customer_group');
            $this->datatables->column_search = array('name', 'email', 'short_note', 'website', 'tbl_customer_group.customer_group');
            $this->datatables->order = array('client_id' => 'desc');
            // get all invoice
            if (!empty($type)) {
                $where = array('tbl_client.customer_group_id' => $type);
            } else {
                $where = null;
            }

            // $fetch_data = make_datatables($where);

            // $data = array();
            // $edited = can_action('4', 'edited');
            // $deleted = can_action('4', 'deleted');
            // foreach ($fetch_data as $_key => $client_details) {
            //     $action = null;
            //     $client_transactions = $this->db->select_sum('amount')->where(array('paid_by' => $client_details->client_id))->get('tbl_transactions')->result();
            //     $customer_group = $this->db->where('customer_group_id', $client_details->customer_group_id)->get('tbl_customer_group')->row();

            //     $client_outstanding = $this->invoice_model->client_outstanding($client_details->client_id);

            //     $sub_array = array();
            //     $name = null;
            //     $name .= '<a class="text-info" href="' . base_url() . 'admin/client/client_details/' . $client_details->client_id . '">' . (!empty($client_details->name) ? $client_details->name : '-') . '</a>';
            //     $sub_array[] = $name;

            //     $contacts = null;
            //     $contacts .= '<span class="label label-success" data-toggle="tooltip" data-palcement="top" title="' . lang('contacts') . '" >' . $this->client_model->count_rows('tbl_account_details', array('company' => $client_details->client_id)) . '</a>';
            //     $sub_array[] = $contacts;
            //     $sub_array[] = fullname($client_details->primary_contact);

            //     $sub_array[] = count($this->db->where('client_id', $client_details->client_id)->get('tbl_project')->result());
            //     if ($client_outstanding > 0) {
            //         $due_amount = display_money($client_outstanding, client_currency($client_details->client_id));
            //     } else {
            //         $due_amount = '0.00';
            //     }
            //     $sub_array[] = $due_amount;
            //     $sub_array[] = display_money($this->client_model->client_paid($client_details->client_id), client_currency($client_details->client_id));
            //     if ($client_transactions[0]->amount > 0) {
            //         $paid_amount = display_money($client_transactions[0]->amount, client_currency($client_details->client_id));
            //     } else {
            //         $paid_amount = '0.00';
            //     }
            //     $sub_array[] = $paid_amount;
            //     $sub_array[] = (!empty($customer_group->customer_group) ? $customer_group->customer_group : '-');

            //     $custom_form_table = custom_form_table(12, $client_details->client_id);
            //     if (!empty($custom_form_table)) {
            //         foreach ($custom_form_table as $c_label => $v_fields) {
            //             $sub_array[] = $v_fields;
            //         }
            //     }

            //     if (!empty($edited)) {
            //         $action .= btn_edit('admin/client/manage_client/' . $client_details->client_id) . ' ';
            //     }
            //     if (!empty($deleted)) {
            //         $action .= '<a data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-xs" title="Click to ' . lang("delete") . ' " href="' . base_url() . 'admin/client/delete_client/' . $client_details->client_id . '"><span class="fa fa-trash-o"></span></a>' . ' ';
            //     }
            //     $action .= btn_view('admin/client/client_details/' . $client_details->client_id) . ' ';

            //     $sub_array[] = $action;
            //     $data[] = $sub_array;

            // }
            echo($where);
            // render_table($data, $where);
        } else {
            // redirect('admin/dashboard');
        }
    }


	public function create_client(){
		if(isset($_POST['smsNoti']) && $_POST['smsNoti']=="on"){
			$notify=1;
		}else{
			$notify=0;
		}
		$data=array(
					"primary_contact"=>$this->input->post('compPhone'),
					"name"=>$this->input->post('compName'),
					"email"=>$this->input->post('compEmail'),
					"short_note"=>$this->input->post('short_note'),
					"website"=>$this->input->post('compWebsite'),
					"phone"=>$this->input->post('compPhone'),
					"mobile"=>$this->input->post('compMobile'),
					"fax"=>$this->input->post('compFax'),
					"address"=>$this->input->post('compAddress'),
					"city"=>$this->input->post('compCity'),
					"zipcode"=>$this->input->post('compZipCode'),
					"currency"=>$this->input->post('currency'),
					"skype_id"=>$this->input->post('compSkype'),
					"linkedin"=>$this->input->post('LinkedinUrl'),
					"facebook"=>$this->input->post('faceBookUrL'),
					"twitter"=>$this->input->post('TwitterURL'),
					"language"=>$this->input->post('compLanguage'),
					"country"=>$this->input->post('countryName'),
					"vat"=>$this->input->post('compVat'),
					"hosting_company"=>$this->input->post('hostingCompany'),
					"hostname"=>$this->input->post('hostName'),
					"port"=>$this->input->post('compPort'),
					"password"=>$this->input->post('compPassword'),
					"username"=>$this->input->post('compUsername'),
					"latitude"=>$this->input->post('compLatitude'),
					"longitude"=>$this->input->post('compLongitude'),
					"customer_group_id"=>$this->input->post('customer_group_id'),
					"sms_notification"=>$notify
					);
		 $result = $this->Client->create_client($data);
		 if($result == TRUE){
		 	$this->session->set_flashdata('msg','Client Created Successfully.');
		 }
		 else{
		 	$this->session->set_flashdata('msg','Client With Same Email Already Exists.');
		 }
		 redirect('Client');
	}

	public function fetch_client(){
		$client_id=$_POST['client_id'];
		$result=$this->Client_Model->fetch_client($client_id);
		if($result){
			die(json_encode(array('status' =>'1' ,'data'=>$result )));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'no data ')));
		}
	}

	public function update_client(){
		$result=$this->Client_Model->update_client($_POST);
		if($result){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Updated')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}

	public function delete_client(){
		$id=$_POST['client_id'];
		$result=$this->Client_Model->delete_client($id);
		if($result == TRUE){
			die(json_encode(array('status' =>'1' ,'msg'=>'Successfully Deleted')));
		}
		else{
			die(json_encode(array('status' =>'0' ,'msg'=>'Failed')));
		}
	}
}
?>