<?php
/** @var $pdo\PDO */
 require_once 'database.php';
 include_once "header.php";


  session_start();
 try{
if (isset($_POST['login'])){

  $username = ($_POST['username']);

  if(empty($_POST['username']) || empty($_POST['pwd'])){
    $error = "Please Complete the required field";
  }
  else{
    $statement = $pdo->prepare("SELECT * FROM user1 WHERE pwd = :pwd AND username = '$username' ");
    $statement->execute(
          array(
            // 'username' => $_POST['username'],
            'pwd' => $_POST['pwd']
          )
          );
    $count = $statement->rowCount();
    // $fetch = $statement->fetch();
    if($count > 0){
       $_SESSION['username'] = $username;
       header('location:homepage.php');
    }else{
      $error = "invalid login details";
      // header('location:homepage.php'); 
  }
 }
}
}catch(PDOException $e){
  echo " Connection failed" . $e->getMessage();
}
?>  

  <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <?php
    if(isset($error)){
      echo '<label class="text-danger"> '. $error .'</label>';

    }
    ?>
    <div class="imgcontainer">
      <h4 class="avatar">Log In</h4>
    </div>
    <div class="container">
      <label for="username"><b>UserName</b></label>
      <input type="text" placeholder="Username" name="username" >
      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" >      
      <button name="login" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember">Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
    <a href="homepage.php"><button type="button" class="cancelbtn">Cancel</button></a>
     <p>Dont Have an Account <a href="index.php">Sign Up.</a></p>
      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
  </form>


