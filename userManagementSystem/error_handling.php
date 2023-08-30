<?php
//  include_once ("add_user_model.php");
include_once ("userManagement.php");

  //class AddUserController extends AddUserModel{
    class ErrorHandling extends UserManagement{

    function is_input_empty(string $username , string $email ,string $role){
    if(empty($username) || empty($email) || empty($role)){
        return true;
    }else{
        return false;
    }

}

//check if email is invalid 

function is_email_invalid(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }

}

//check if username is taken 
public function is_username_taken($username){

  if($this->get_user_username($username)){
    return true;

}else{
    return false;
}


}

//check if email is already registered
public function is_email_registered(string $email){
    if($this->get_user_email($email)){
        return true;
    
    }else{
        return false;
    }

}

public function is_id_invalid($id){
    if(!$this->get_user_id($id)){
        return true;
    }else{
        return false;
    }
}
  
}

