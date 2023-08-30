<?php
require_once ('userManagement.php');
class Edit_User extends UserManagement{

    public function update_user_by_id(){
        if( $_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $username =  $_POST['username'];
            $email = $_POST['email'];
            $role = $_POST['role'];

            try{

                $obj = new UserManagement();
                $obj->updateUser($id, $username , $email , $role);

                header('Location:index.php');
               
                die();



        }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
        }
    }else{
        // header('Location: edit_user.php');
        // die();
    }

    }
}
