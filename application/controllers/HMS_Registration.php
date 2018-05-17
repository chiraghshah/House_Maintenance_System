<?php
#Author-->Chirag -->Shah
class HMS_Registration extends CI_Controller {

public function index(){
    $this->load->view('hms_user_registration');
}

public function verify_user(){
	$this->load->model('HMS_User_Model');
	    $userDetails=$this->HMS_User_Model->get_user_detailsWhereEmailIs($_POST["email"]);
	   if(count($userDetails)>0){
		    if($userDetails[0]["user_email"] == $_POST["email"]){
		    	$data['errorMessage']='Error: Already user with Email : '.$_POST["email"] .' exists!';
				$this->load->view('hms_user_registration',$data);
		    }
		}
	    else{
    		$this->insert_user();
	    }
}


	public function insert_user()
			{
				$this->load->model('HMS_User_Model');

				$user_id= $this->HMS_User_Model->insert_user_details(
					['user_name'=>$_POST["name"], 'user_type'=>$_POST["type"], 'user_email'=>$_POST["email"], 'user_password'=>$_POST["password"], 'user_address'=>$_POST["address"], 'user_phone'=>$_POST["phone"]]);
				$this->HMS_User_Model->insert_user_sub_user_mapping(['user_id'=>$user_id,'sub_user_id'=>$user_id]);
				if($user_id !=0){
					$_SESSION["user_name"]=$_POST["name"];
					$_SESSION["user_id"]=$user_id;
					$_SESSION["user_type"]=$_POST["type"];
					$this->load->view('hms_add_houses');
				}	
				else{
					$data['errorMessage']='Error in registering user!!';
					$this->load->view('hms_user_registration',$data);
				}
			}

	public function register_house()
		{
			$this->load->model('HMS_House_Model');
			$house_id= $this->HMS_House_Model->insert_house_details(
				['house_name'=>$_POST["name"],'house_location'=>$_POST["location"], 'house_type'=>$_POST["type"], 'house_area'=>$_POST["area"],'house_reg_year'=>$_POST["year"], 'house_purchase_amount'=>$_POST["amount"]]);
			if($house_id !=0){
				$this->load->model('HMS_User_Model');
				$this->HMS_User_Model->insert_user_house_mapping(['user_id'=>$_SESSION["user_id"],'house_id'=>$house_id]);
				$this->load->view('hms_index');
			}	
			else{
				$data['errorMessage']='Error: Enter in House Registeration!';
				$this->load->view('hms_add_houses',$data);
			}
		}



		public function add()
		{
			$this->load->model('HMS_House_Model');
			$house_IDs =$this->HMS_House_Model->get_house_details($_SESSION["user_id"]);
			$data['house_IDs']=$house_IDs;
			$this->load->view('hms_additional_user_registration',$data);
		}

		public function add_user()
		{
			$this->load->model('HMS_User_Model');
			$userDetails=$this->HMS_User_Model->get_user_detailsWhereEmailIs($_POST["email"]);
	    if(count($userDetails)>0){
		    if($userDetails[0]["user_email"] == $_POST["email"]){
		    	$data['errorMessage']='Error: Already user with Email : '.$_POST["email"] .' exists!';
				$this->add();
		    }
		}
	    else{
    		$user_id= $this->HMS_User_Model->insert_user_details(
					['user_name'=>$_POST["name"], 'user_type'=>$_POST["type"], 'user_email'=>$_POST["email"], 'user_password'=>$_POST["password"], 'user_address'=>$_POST["address"], 'user_phone'=>$_POST["phone"]]);
    		$this->HMS_User_Model->insert_user_sub_user_mapping(['user_id'=>$_SESSION["user_id"],'sub_user_id'=>$user_id]);
				if($user_id !=0){
					$this->load->model('HMS_House_Model');
					$i=0;
					foreach ($_POST["house_type"] as $item) {
						$this->HMS_User_Model->insert_user_house_mapping(['user_id'=>$user_id,'house_id'=>intval($item[$i])]);
						$i++;
					}
					redirect(base_url().HMS_User);
				}	
				else{
					$data['errorMessage']='Error: Enter in Error in registering new user!!';
					$this->load->view('hms_additional_user_registration',$data);
				}
	    	}
		}

		public function edit_user(){
			$this->load->model('HMS_User_Model');
		    $data['userDetails']=$this->HMS_User_Model->get_user_detailsWhere($_SESSION["user_id"]);
			$this->load->view('hms_edit_user_registration',$data);
		}

		public function update_user(){
			$this->load->model('HMS_User_Model');
		$data['user_name']=$_POST["name"];
		$data['user_type']=$_POST["type"];
		$data['user_email']=$_POST["email"];
		$data['user_password']=$_POST["password"];
		$data['user_address']=$_POST["address"];
		$data[ 'user_phone']=$_POST["phone"];

		$this->HMS_User_Model->update_user_detailsWhere($data,$_SESSION["user_id"]);
		$_SESSION["user_name"]=$_POST["name"];
		$_SESSION["user_id"]=$_SESSION["user_id"];
		$_SESSION["user_type"]=$_POST["type"];
		$this->user_details();
		}


		public function delete_user(){
		$userId=$this->input->get('user_id');
		$this->load->model('HMS_User_Model');
		$this->HMS_User_Model->delete_user($userId);
		redirect(base_url().HMS_User);
	}


}