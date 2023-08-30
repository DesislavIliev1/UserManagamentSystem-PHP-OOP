<?php
 require_once ("userManagement.php");
 require_once("error_handling.php");
class ViewUser extends ErrorHandling{

    
     public function view_user_by_id(){

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
           

            try{ 

               
                
                
         $errors = [];

                if(!$this->is_id_invalid($id)){
                    $errors["invalid_id"] = "Id is invalid !";
                }

                require_once 'config_session.php';
                //         // //check if error array is empty
                if($errors){
                    $_SESSION["errors_register"] = $errors;
                    header('Location: view_user.php');
                    die();
                }
           
                

        //         // $obj = new UserManagement();
        //         // $obj ->display_user_by_id($id); 

               
               
            $obj = new UserManagement();
            $obj ->display_user_by_id($id);
            header('Location: view_user.php?succes');

                
        
        
               die();



         }catch(PDOException $e){
             echo "Error: " . $e->getMessage();
         }
    }else{
        // header('Location: index.php');
        // die();
    }

    }


     }
