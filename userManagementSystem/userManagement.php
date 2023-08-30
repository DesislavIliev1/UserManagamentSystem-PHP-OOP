<?php
 require_once ('user_controller.php');
class UserManagement extends User_Controller {
   

    public function showUsers() {
        $this-> getUsers();
     }
    

    public function addUser($username, $email, $role) {
        $this->createUser($username, $email, $role);
     }

    public function getUser($id) {
        return $this->readUser($id);
    }

    public function updateUser($id, $username, $email, $role) {
        $this->editUser($id, $username, $email, $role);
     }

    public function deleteUser($id) {
         $this->removeUser($id);
     }

     public function get_user_username($username){
        $this->get_username($username);
     }

     public function get_user_email($email){
        $this->get_email($email);
     }

     public function get_user_id($id){
        $this->get_id($id);
     }

     public function display_user_by_id($id){
        $this->readUser($id);
        
        
     }
}