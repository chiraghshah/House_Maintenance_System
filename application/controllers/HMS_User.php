<?php
#Author-->Chirag -->Shah
class HMS_User extends CI_Controller {

public function index(){  
    $this->load->model('HMS_User_Model');
			if($_SESSION["user_type"]=='Admin'){
		    	$data['userDetails']=$this->HMS_User_Model->get_user_details();
			}
			else{
				if($_SESSION["user_type"]=='Owner'){
					$userid=$_SESSION["user_id"];
		   			 $data['userDetails']=$this->HMS_User_Model->get_usersAndsub_user_detailsWhere($userid);
				}
				else{
				$userid=$_SESSION["user_id"];
		   			 $data['userDetails']=$this->HMS_User_Model->get_user_detailsWhere($userid);	
				}
			}
			$this->load->view('hms_user_details',$data);
	}
}