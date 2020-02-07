<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/*
 * 	@author : themetic.net
 * 	date	: 21 April, 2015
 * 	Inventory & Invoice Management System
 * 	http://themetic.net
 *  version: 1.0
 */

class User_model extends MY_Model
{

    public $_table_name;
    public $_order_by;
    public $_primary_key;

    public function select_user_roll_by_id($user_id)
    {
        $this->db->select('tbl_user_role.*', false);
        $this->db->select('tbl_menu.*', false);
        $this->db->from('tbl_user_role');
        $this->db->join('tbl_menu', 'tbl_user_role.menu_id = tbl_menu.menu_id', 'left');
        $this->db->where('tbl_user_role.user_id', $user_id);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function insert_user($data){
       $this->db->insert('tbl_users', $data);
       $insert_id = $this->db->insert_id();
       return  $insert_id;
    }

    public function insert_account($data){
       $this->db->insert('tbl_account_details', $data);
       return  true;
    }

    public function check_user($username,$email){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('username',$username);
        $this->db->or_where('email',$email);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function fetch_user(){
        $checker=array('role_id'=>'1',
                       'activated'=>'1',
                       'banned'=>'0');
        $checker2=array('role_id'=>'3',
                       'activated'=>'1',
                       'banned'=>'0');
        $this->db->where($checker);
        $this->db->or_where($checker2);
        $check = $this->db->get("tbl_users")->result_array();
        if(count($check)==0 ){
            return false;
        }else{
            return $check;
        } 
    }

    public function fetch_all_users(){
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->join('tbl_account_details', 'tbl_users.user_id = tbl_account_details.user_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;

    }

    public function fetch_user_by_id($id){
        $checker=array('tbl_users.user_id'=>$id);
        $this->db->select('tbl_users.user_id as userid,fullname,avatar');
        $this->db->join('tbl_account_details', 'tbl_users.user_id = tbl_account_details.user_id');
        $this->db->where($checker);
        $check = $this->db->get("tbl_users")->row();
        return $check;
    }

    public function get_new_user()
    {
        $post = new stdClass();
        $post->user_name = '';
        $post->name = '';
        $post->email = '';
        $post->flag = 3;
        $post->employee_login_id = '';

        return $post;
    }

    public function get_user($filterBy = null)
    {
        $users = array();
        $all_users = array_reverse($this->get_permission('tbl_users'));
        if (empty($filterBy)) {
            return $all_users;
        } else {
            foreach ($all_users as $v_users) {
                if ($filterBy == 'admin' && $v_users->role_id == 1) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'client' && $v_users->role_id == 2) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'staff' && $v_users->role_id == 1) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'active' && $v_users->activated == 1) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'deactive' && $v_users->activated == 0) {
                    array_push($users, $v_users);
                }
                if ($filterBy == 'banned' && $v_users->banned == 1) {
                    array_push($users, $v_users);
                }
            }
        }
        return $users;
    }


}
