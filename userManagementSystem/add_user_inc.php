<?php

 require_once('error_handling.php');
//  require_once "database.php";

  class AddUser extends ErrorHandling{
   
public function add_user_inc(){
    if( $_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $role = $_POST['role'];
    
        // $Database = new Database;
        
        
        
        
    
        try{
    
           
            
            
            // array that stores errors
            $errors = [];
           
            //check if the input is empty
            if($this->is_input_empty($username ,$email , $role)){
                $errors["empty_input"] = "Fill in all fields!";
    
            }
    
             //check if the name and pass are atleast 6 chars
            if(strlen($username) < 6 ){
                $errors["too_short"] = "Username  must be atleast 6 characters!";
            }
             
            //check if email is valid
            if($this->is_email_invalid($email)){
                $errors["invalid_email"] = "Invalid email used!";
    
            }
             //check if the username is taken
            if($this->is_username_taken($username)){
                $errors["Taken_username"] = "Username already taken!";
    
            }
    
             //check if the email is registered
            if($this->is_email_registered(  $email)){
                $errors["Email_used"] = "Email already registered!";
    
            }
    
            require_once 'config_session.php';
            //check if error array is empty
            if($errors){
                $_SESSION["errors_register"] = $errors;
                header('Location: add_user.php');
                die();
            }
            
            //creating user and store it in db
            require_once 'userManagement.php';
            
           $object = new UserManagement();   
           $object -> addUser($username, $email, $role);
    
    
    
            header('Location: index.php');
            $con = null;
            $stmt = null;
    
    
            die();
    
          
          
        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }else{
        // header('Location: register.php');
        // die();
    }
}
  
    

  

}