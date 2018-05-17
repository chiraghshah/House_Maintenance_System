<?php
#Author-->Chirag -->Shah
class HMS_Payments extends CI_Controller {

	public function index(){
		$data['house_IDs']=$this->get_user_house_details();
		   $this->load->view('hms_add_expenses',$data);
	    // $this->load->view('hms_payments',$data);
	}

	public function add(){
		$data['house_IDs']=$this->get_user_house_details();
	    $this->load->view('hms_add_expenses',$data);
	}

	public function get_user_house_details() {
		$this->load->model('HMS_House_Model');
		$house_IDs =$this->HMS_House_Model->get_house_details($_SESSION["user_id"]);
		return $house_IDs;
	}

	public function insert_expenses() {
		$this->load->model('HMS_House_Model');
		$house=$_POST["house"];
		$type=$_POST["type"];
		$amount=$_POST["txt"];
		$i=0;
		foreach ($_POST["type"] as $key) {
			$data['house_id']=$house[$i];
			$data['expense_type']=$type[$i];
			$data['expense_amount']=$amount[$i];
			$this->HMS_House_Model->insert_house_expenses($data);
			$i++;
		}
		
		 redirect(base_url().HMS_Payments);
	}


	public function show_expenses(){
		$house_id= $this->input->get('house_id');
		$this->load->model('HMS_House_Model');
		$data['house_expenses'] =$this->HMS_House_Model->get_house_expense_details($house_id);
		$data['house_IDs']=$this->HMS_House_Model->get_house_detailsWhereHouseIdIs($house_id);		
		 $this->load->view('hms_show_expenses',$data);
	}

	public function edit_expenses(){
		$house_id= $this->input->get('house_id');
		$this->load->model('HMS_House_Model');
		$data['house_id']=$house_id;
		$data['house_expenses'] =$this->HMS_House_Model->get_house_expense_details($house_id);
		$data['house_IDs']=$this->HMS_House_Model->get_house_detailsWhereHouseIdIs($house_id);	
		 $this->load->view('hms_edit_expenses',$data);
	}

	public function update_expenses(){
		$this->load->model('HMS_House_Model');
		$house=$_POST["expense_id"];
		$type=$_POST["type"];
		$amount=$_POST["txt"];
		$i=0;
		foreach ($_POST["type"] as $key) {
			$data['expense_type']=$type[$i];
			$data['expense_amount']=$amount[$i];
			$this->HMS_House_Model->update_house_expenses($data,$house[$i]);
			$i++;
		}

		 $this->show_expenses();
	}

	public function delete_expenses(){
		$expense_id=$this->input->get('expense_id');
		$house_id=$this->input->get('house_id');
		$this->load->model('HMS_House_Model');
		$this->HMS_House_Model->delete_expensesWhereExpenseIdIs($expense_id);
		$data['house_expenses'] =$this->HMS_House_Model->get_house_expense_details($house_id);
		$data['house_IDs']=$this->HMS_House_Model->get_house_detailsWhereHouseIdIs($house_id);	
		$this->load->view('hms_edit_expenses',$data);
	}

}