<?php
require_once "database.php";
require_once "header.php";
require_once "navbar.php";
// $search = $_GET['search'] ?? '';
// if ($search){
//     $statement = $pdo->prepare('SELECT * FROM products2 WHERE product LIKE :product ORDER BY id');
//     $statement->bindValue(':product' , "%$search%");
// }else{
$statement = $pdo->prepare('SELECT * FROM products2 WHERE category = "clothings" ORDER BY id');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

$statement1 = $pdo->prepare('SELECT * FROM newarrival WHERE category = "clothings" ORDER BY id');
$statement1->execute();
$products1 = $statement1->fetchAll(PDO::FETCH_ASSOC);



?>    
    <section id="pageheader"> 
       <h2>#Stayhome</h2>
       <p>Save more with coupons & up to 70% off</p>
    </section>
    <div class="container" id="storetags">
      <h3 style="text-align:center">clothings</h3>
    </div>
    <div class="container" id="shop" style="margin-top:10px;">
        <div  id="cart" style="width:100%; color: white;">
            <section>
                <div class="cart-pro">
                    <?php foreach($products as $product):?>
                        <a style="text-decoration:none" href="sproduct.php?id=<?= $product['id']?>">  
                <div class="cart-pro-con" >
                    <img src="<?= $product['image']?>" alt="">
                    <div class="des">
                        <span><?= $product['brand']?></span>
                        <h5><?= $product['product']?></h5>
                        <h4><?= $product['price']?></h4>
                    </div>
                <a href=""><i class="fas fa-shopping-cart cart"></i></a> 
                </div></a>
                <?php endforeach ?>
                
                </div>
            </section>
            <section>
                <div class="cart-pro">
                    <?php foreach($products1 as $product):?>
                        <a style="text-decoration:none" href="newarrivalsproduct.php?id=<?= $product['id']?>">
                <div class="cart-pro-con" >
                    <img src="<?= $product['image']?>" alt="">
                    <div class="des">
                        <span><?= $product['brand']?></span>
                        <h5><?= $product['product']?></h5>
                        <h4><?= $product['price']?></h4>
                    </div>
                <a href=""><i class="fas fa-shopping-cart cart"></i></a> 
                </div>
                </a>
                <?php endforeach ?>         
                </div>
            </section>
        </div>
    </div>

     <section class="section-p1" id="pagnations">
        <a href="">1</a>
        <a href="">2</a>
        <a href=""><i class="fa fa-arrow-right" style="font-size:10px"></i></a>
    </section>
<?php include_once "footer.php" ?>
  
</body>
<script src="script.js"></script>
</html>