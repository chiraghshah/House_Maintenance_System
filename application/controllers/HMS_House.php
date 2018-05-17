<?php

class HMS_House extends CI_Controller {

public function index(){
	$data['house_IDs']=$this->get_user_house_details();
    $this->load->view('hms_house_details',$data);
}

public function get_user_house_details() {
	$this->load->model('HMS_House_Model');
	if($_SESSION["user_type"]=='Admin'){
		    	$house_IDs =$this->HMS_House_Model->get_all_house_details();
		}
	else{
				$house_IDs =$this->HMS_House_Model->get_all_house_details($_SESSION["user_id"]);
		}
	return $house_IDs;
}

public function register_new_house(){
	$this->load->view('hms_add_new_house');
}

public function insert_new_house(){
			$this->load->model('HMS_House_Model');
			$house_id= $this->HMS_House_Model->insert_house_details(
				['house_name'=>$_POST["name"],'house_location'=>$_POST["location"], 'house_type'=>$_POST["type"], 'house_area'=>$_POST["area"],'house_reg_year'=>$_POST["year"], 'house_purchase_amount'=>$_POST["amount"]]);
			if($house_id !=0){
				$this->load->model('HMS_User_Model');
				$this->HMS_User_Model->insert_user_house_mapping(['user_id'=>$_SESSION["user_id"],'house_id'=>$house_id]);
					redirect(base_url().HMS_House);
			}	
			else{
				$data['errorMessage']='Error in addding new House!';
				$this->load->view('hms_add_new_house',$data);
			}
}
public function edit_houses() {
	$house_id= $this->input->get('house_id');
	$this->load->model('HMS_House_Model');
	$data['house_IDs'] =$this->HMS_House_Model->get_house_detailsWhereHouseIdIs($house_id);
	$this->load->view('hms_edit_house',$data);
}

public function update_houses() {
	$this->load->model('HMS_House_Model');
	$house_id= $_POST["house_id"];
	$data['house_name']=$_POST["name"];
	$data['house_location']=$_POST["location"];
	$data['house_type']=$_POST["type"];
	$data['house_area']=$_POST["area"];
	$data['house_reg_year']=$_POST["year"];
	$data['house_purchase_amount']=$_POST["amount"];
	$this->HMS_House_Model->update_house_detailsWhereHouseIdIs($data,$house_id);
	redirect(base_url().HMS_House);
}

public function delete_house(){
		$house_id= $this->input->get('house_id');
		$this->load->model('HMS_House_Model');
		$this->HMS_House_Model->delete_houseWhereHouseIdIs($house_id);
		redirect(base_url().HMS_House);
	}
//edit_user_house_details

}