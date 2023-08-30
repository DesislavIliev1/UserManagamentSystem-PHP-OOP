<?php
  require_once("userManagement.php");
  require_once("error_handling.php");
class Delete_User extends ErrorHandling{

    public function del_user_by_id(){
        if( $_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];

            try{ 

                
                
                $errors = [];

                if(!$this->is_id_invalid($id)){
                    $errors["invalid_id"] = "Id is invalid !";
                }

                require_once 'config_session.php';
                //check if error array is empty
                if($errors){
                    $_SESSION["errors_register"] = $errors;
                    header('Location: delete_user.php');
                    die();
                }

                $obj = new UserManagement();
                $obj ->deleteUser($id); 

                header('Location: index.php');
               
                
                
        
        
                die();



        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }else{
        // header('Location: delete_user.php');
        // die();
    }

    }
}
