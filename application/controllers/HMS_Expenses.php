<?php
#Author-->Chirag -->Shah
class HMS_Expenses extends CI_Controller {

	public function index(){
		$house_id= $this->input->get('house_id');
		$this->load->model('HMS_House_Model');
		$data['house_expenses'] =$this->HMS_House_Model->get_house_expense_details($house_id);
		$data['house_IDs']=$this->HMS_House_Model->get_house_detailsWhereHouseIdIs($house_id);		
		 $this->load->view('hms_show_expenses',$data);
	}
}