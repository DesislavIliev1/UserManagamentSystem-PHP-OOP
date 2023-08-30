<?php
include_once 'database.php';
include_once 'user_controller.php';
include_once 'user.php';
include_once 'userManagement.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
   
</head>
<body>
<?php include('header.php'); ?>

<form action="" method="post">
<table class="table m-4">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>Admin</td>
      
      <?php
   
?>
    </td>
    <?php
    $obj = new UserManagement();
    $obj->showUsers();

    
    
    
      ?>
   </tr>
    <tr>
    
      
    </tr>
    <tr>
     
    </tr>
  </tbody>
</table>
</form>


     <?php
    //   $object = new Database;
    //   $object -> connect();

    ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>