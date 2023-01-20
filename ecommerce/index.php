<?php

require_once 'database.php';
include_once "header.php";
$errors = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    $re_password = password_hash($_POST['re_password'], PASSWORD_DEFAULT );

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
    if(!$password){
      $errors = ' Password is reqiured';
      } 
    if(strlen($_POST['pwd']) < 8){
        $errors = 'Password must be more than 8';
    }
    if (!preg_match("/[a-z]/i", $_POST["pwd"])){
      $errors = 'password must contain at least one alphabet';
    }
    if (!preg_match("/[0-9]/", $_POST["pwd"])){
      $errors = 'password must contain at least one letter';
    }
    if(!$re_password){
    $errors = 'Confirm Password is reqiured';
    }  
    if ($_POST['pwd'] !== $_POST['re_password']){
      $errors = 'passwords must match';
    } 
    if(empty($errors)){
        $statement = $pdo->prepare("SELECT COUNT(email) AS num FROM user1 WHERE email = :email AND username = :username");
        $statement->bindValue(':email', $email);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);

         if($row['num'] > 0){
          $errors = "Username or Email Already used.";
          header("Location:.php");
        }else{
          $statement = $pdo->prepare("INSERT INTO user1 (firstname , lastname , email , username, pwd , re_password)
          VALUES (:firstname , :lastname, :email, :username, :pwd, :re_password)");
          $statement->bindValue(':firstname', $firstname);
          $statement->bindValue(':lastname',$lastname);
          $statement->bindValue(':email', $email);
          $statement->bindValue(':username', $username);
          $statement->bindValue(':pwd', $password);
          $statement->bindValue(':re_password', $re_password);
          $statement->execute();
          $error = "Account created";
          header("location:login.php");
        }  
    }
  }
?>
  <form class="modal-content" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <?php
    if(isset($errors)){
      echo '<label class="text-danger"> '. $errors .'</label>';
    }
    ?>
    <div class="container">
      <h3 style="color:black; text-align:center">Sign Up</h3>
      <p style="color:black;text-align:center">Please fill in this form to create an account.</p>
      <hr>
      <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="First name" name="firstname">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last name" name="lastname">     
        </div>
       </div>
      <input type="text" class="form-control" placeholder="Enter Email" name="email">
     
      <input type="text" class="form-control" placeholder="Username" name="username">

       <input type="password" class="form-control" placeholder="Enter Password" name="pwd">
      
      <input type="password" class="form-control" placeholder="Confirm Password" name="re_password">
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p style="color:black">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn1">Cancel</button>
        <button type="submit" class="btn1">Sign Up</button>
      </div>
      <p style="color:black">Already have an account? <a href="login.php">Login</a></p>
    </div>
  </form>

