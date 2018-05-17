<?php
#Author-->Chirag -->Shah
class HMS_Logout extends CI_Controller {
	
	public function index(){
		session_destroy();
	    $this->load->view('hms_login');
	}
}