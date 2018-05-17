<?php
#Author-->Chirag -->Shah
class HMS_Login extends CI_Controller {
	public function index(){
	    $this->load->view('hms_login');
	}

	public function verify_login(){
	    $this->load->model('HMS_User_Model');
	    $userDetails=$this->HMS_User_Model->get_user_detailsWhereEmailIs($_POST["email"]);
	    if($userDetails[0]["user_password"] == $_POST["password"]){
	    	$_SESSION["user_name"]=$userDetails[0]["user_name"];;
			$_SESSION["user_id"]=$userDetails[0]["user_id"];
			$_SESSION["user_type"]=$userDetails[0]["user_type"];
			$this->load->view('hms_index');
	    }
	    else{
	    	$data['errorMessage']='Error: Enter proper LogIn Credentials!';
	    	$this->load->view('hms_login',$data);
	    	//echo "<span style='color:red;font-size:20px;font-weight: bold;'>Error: Enter proper credentials</span>";
	    }
	}
}