<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#Author-->Chirag -->Shah
class HMS_House_Model extends CI_Model{

	public function get_house_details($userId){
		$this->db->select('*');
		$this->db->from('hms_house_details');
		$this->db->join('hms_user_house_mapping','hms_house_details.house_id = hms_user_house_mapping.house_id','LEFT');
		$this->db->where('hms_user_house_mapping.user_id',$userId);
		$query=$this->db->get();
			return $query->result_array();  
	}

	public function get_all_house_details(){
		$this->db->select('*');
		$this->db->from('hms_house_details');
		$query=$this->db->get();
			return $query->result_array();  
	}

	public function get_house_detailsWhereHouseIdIs($houseId){
		$this->db->select('*');
		$this->db->from('hms_house_details');
		$this->db->where('house_id',$houseId);
		$query=$this->db->get();
			return $query->result_array();  
	}

	public function get_house_expense_details($houseId){
		$this->db->select('*');
		$this->db->from('hms_expenses');
		$this->db->where('house_id',$houseId);
		$query=$this->db->get();
			return $query->result_array();  
	}

	
	public function insert_house_details($data){
		if($this->db->insert('hms_house_details',$data)){
			return $this->db->insert_id();
		}
		else{
			return 0;
		}
	}

	public function insert_house_expenses($data){
		if($this->db->insert('hms_expenses',$data)){
			return true;
		}
		else{
			return false;
		}
	}

#Author-->Chirag -->Shah
	public function update_house_expenses($data,$expense_id){
		$this->db->where('expense_id',$expense_id);
		$this->db->update('hms_expenses', $data);
	}

	public function update_house_detailsWhereHouseIdIs($data,$houseId){
		$this->db->where('house_id',$houseId);
		$this->db->update('hms_house_details', $data);
	}


	public function delete_houseWhereHouseIdIs($houseId){
		$this->db->where('house_id', $houseId);
		$this->db->delete('hms_house_details');
		$this->delete_house_mappingWhereHouseIdIs($houseId);
	}
	public function delete_house_mappingWhereHouseIdIs($houseId){
		$this->db->where('house_id', $houseId);
		$this->db->delete('hms_user_house_mapping');
	}

	public function delete_expensesWhereExpenseIdIs($expenseId){
		$this->db->where('expense_id', $expenseId);
		$this->db->delete('hms_expenses');
	}
}