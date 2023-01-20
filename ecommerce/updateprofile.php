<?php

require_once "database.php";
include_once "header.php";
session_start();

$id = $_GET['id'] ?? null;

if (!$id){
  header("Location:login.php");
}

$statement = $pdo->prepare('SELECT * FROM user1 WHERE id = :id');
$statement->bindvalue(':id', $id);
$statement->execute();
$user = $statement->fetch(PDO::FETCH_ASSOC);

$errors = "";
$firstname = $user['firstname'];
$lastname = $user['lastname'];
$email = $user['email'];
$username = $user['username'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $username = $_POST['username'];

  if(!$firstname){
      $errors = 'First Name is required';
  }
  if(!$lastname){
      $errors = 'Last Name is reqiured';
  }
  if(!$username){
    $errors = 'User Name is reqiured';
  }
  if(!filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)){
    $errors = ' Valid Email is reqiured';
  }
  if(empty($errors)){
      $statement = $pdo->prepare("SELECT COUNT(email) AS num FROM user1 WHERE email = :email AND username = :username");
      $statement->bindValue(':email', $email);
      $statement->bindValue(':username', $username);
      $statement->execute();
      $row = $statement->fetch(PDO::FETCH_ASSOC);

       if($row['num'] > 0){
        $errors = "Username or Email Already used.";
        header("Location:updateprofile.php");
      }else{
        $statement = $pdo->prepare("UPDATE  user1 SET firstname = :firstname , lastname = :lastname , email = :email , username = :username");
        $statement->bindValue(':firstname', $firstname);
        $statement->bindValue(':lastname',$lastname);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $error = "Account Updated";
      header("location:index.php");
   
      }  
  }
}
?>
    <form class="modal-content" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <a href="index.php" class="btn btn-secondary"> <i class="fa-solid fa-arrow-left"></i> Go back to Home page</a>

      <?php
        if(isset($errors)){
          echo '<label class="text-danger"> '. $errors .'</label>';
        }
        ?>
    <div class="container">
      <h3 style="color:black; text-align:center"><b>Update your profile <?= $user['username'] ?></b></h3>
      <hr>
      <div class="row">
        <div class="col">
          <label for="firstname">Firstname</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <br>
        <div class="col">
        <label for="firstname">lastname</label>
            <input type="text" class="form-control"  name="lastname">     
        </div>
      </div>
      <br>
      <label for="firstname">Email</label>
      <input type="text" class="form-control"  name="email">
     <br>
     <label for="firstname">Username</label>
      <input type="text" class="form-control"  name="username">
     <button name="edit">Update</button>
      
    </div>
  </form>

</body>
</html>