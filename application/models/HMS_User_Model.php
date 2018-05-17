<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HMS_User_Model extends CI_Model{

	public function get_user_detailsWhereEmailIs($email){
		$this->db->select('*');
		$this->db->from('hms_user_details');
		$this->db->where('user_email',$email);
		$query=$this->db->get();
		return $query->result_array(); 
	}

	public function get_user_detailsWhere($userId){
		$this->db->select('*');
		$this->db->from('hms_user_details');
		$this->db->where('user_id',$userId);
		$query=$this->db->get();
		return $query->result_array(); 
	}

	public function get_user_details(){
		$this->db->select('*');
		$this->db->from('hms_user_details');
		$query=$this->db->get();
		return $query->result_array(); 
	}

	public function insert_user_details($data){
		if($this->db->insert('hms_user_details',$data)){
			return $this->db->insert_id();
		}
		else{
			return 0;
		}
	}

	public function insert_user_house_mapping($data){
		if($this->db->insert('hms_user_house_mapping',$data)){
			return true;
		}
		else{
			return false;
		}
	}

	public function insert_user_sub_user_mapping($data){
		if($this->db->insert('hms_user_sub_user_mapping',$data)){
			return true;
		}
		else{
			return false;
		}
	}

	public function update_user_detailsWhere($data,$user_id){
		$this->db->where('user_id',$user_id);
		$this->db->update('hms_user_details', $data);
	}

	public function get_usersAndsub_user_detailsWhere($userId){
		$this->db->select('*');
		$this->db->from('hms_user_details');
		$this->db->join('hms_user_sub_user_mapping','hms_user_details.user_id = hms_user_sub_user_mapping.sub_user_id ','LEFT');
		$this->db->where('hms_user_sub_user_mapping.user_id',$userId);
		$this->db->order_by("hms_user_sub_user_mapping.user_id", "asc");
		$query=$this->db->get();
			return $query->result_array();

	}

	public function delete_user($userId){
		$this->db->where('user_id', $userId);
		$this->db->delete('hms_user_details');
	}

}

