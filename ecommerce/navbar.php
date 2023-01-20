<?php
require_once "database.php";
require_once "header.php";

session_start();
$statement = $pdo->prepare('SELECT * FROM user1 ORDER BY id');
$statement->execute();
$person = $statement->fetch(PDO::FETCH_ASSOC);


?>

<section id="header">
    <div>
    <h1 style="margin-top: 10px"><a href="homepage.php" style="text-decoration:none;color:white">LOGO</a></h1>
    </div>

    <div class="search">
      <form action="shop.php" id="form">
      <input name="search" class="" type="text" placeholder="search">
      <button type="submit">SEARCH</button>
      </form>
    </div>
        
  <div style="display:flex;align-items:center;"> 
      <div class="dropdown" style='padding:10px' id="account"> 
        <button class="btn btn-secondary" name="edit" id="index-text">
          <?php  if (isset($_SESSION['username'])) : ?>
          <i class="fa-solid fa-user" style="margin-right:2px"></i> Hi, <strong style="text-transform:Uppercase"><?php echo $_SESSION['username']; ?></strong>
          <?php endif ?>
        </button>
       
       
        <!-- <ul  class="dropdown-menu">
            <a class="dropdown-item" href="login.php" id="sign-in">Sign In</a>
            <hr>
            <li><a class="dropdown-item" href="#">Account info</a></li>
            <li><a class="dropdown-item"  id="sign-up" href="homepage.php">Sign Up</a></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>         
        </ul> -->
    </div>
    
    <a id="logout" href="logout.php">Logout</a>
    <ul id="navbar">
        <li><a href="shop.php">Shop</a></li>
        <li>
        <a href="about.php"> Help</a></li>
        <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
        <i id="close" class="fa fa-times times"></i>
    </ul>
      <div id="bar">
          <i style="padding: 0 20px 3px 10px;" class="fa fa-shopping-cart"></i>
          <i  class="fa fa-outdent"></i>
      </div>
  </div>
    </section>
<script>
  const bar = document.getElementById("bar");
  const navbar = document.getElementById("navbar")
  const close = document.getElementById("close")

  if(bar){
      bar.addEventListener("click" ,() => {
          navbar.classList.add('active')
      })
  }
  if(close){
      close.addEventListener("click",()=>{
          navbar.classList.remove("active")
      })
  }
</script>
