<?php
  require_once ("database.php");
  require_once('user.php');
  class User_Controller extends Database{

    public function getUsers(){
        $sql = "SELECT * FROM user_management ";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            echo '<tr> <td>'. $row['id']. ' <td>'. $row['username']. '</td>' .'<td>'. $row['email']. '</td>'. '<td>'. $row['role']. '</td> </tr>';
        }

    }

    public function createUser($username, $email, $role) {
        $sql = "INSERT INTO user_management (username, email, role) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $email, $role]);
    }

    //Read user by ID
    public function readUser($id) {
        $sql = "SELECT * FROM user_management WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        while($row = $stmt->fetch()){
        
        echo '<p> ' .$row['id'], $row['username'],$row['email'],$row['role']. '</p>';
    }

        
    }

    // Update user information
    public function editUser($id, $username, $email, $role) {
        $sql = "UPDATE user_management SET username = ?, email = ?, role = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $email, $role, $id ]);
    }

    // Delete user by ID
    public function removeUser($id) {
        $sql = "DELETE FROM user_management WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }


    public function get_username(string $username){
        $query = "SELECT username FROM user_management WHERE username = :username;";
        $stmt = $this->connect()->prepare($query);
        $stmt -> bindParam(":username", $username);
        $stmt ->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    
    
    }
    
    
    //get email from the db
     public function get_email(string $email){
        $query = "SELECT email FROM user_management WHERE email = :email;";
        $stmt = $this->connect()->prepare($query);
        $stmt -> bindParam(":email", $email);
        $stmt ->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    
    
    }

    public function get_id($id){
        $query = "SELECT id FROM user_management WHERE id = :id;";
        $stmt = $this->connect()->prepare($query);
        $stmt -> bindParam(":id", $id);
        $stmt ->execute();
    
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    
    
    }

    public function show_user_by_id($id){
        $sql = "SELECT * FROM user_management WHERE id = :id";
        $stmt = $this->connect()->prepare($sql);
        $stmt -> bindParam(":id", $id);
        // $stmt->execute([$id]);
       while($row = $stmt->fetch()){
            echo 'id : <p>'. $row['id']. '</p> <br>  username: <p>' . $row['username']. '</p> <br>  email: <p>'. $row['email']. '</p> <br>  role: <p>'. $row['role']. '</p>';
            
        }
    }

}

  