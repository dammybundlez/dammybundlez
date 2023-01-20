<?php

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=gcart", 'dammybundlez' , 'tramadol');
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET ['id'] ?? null;
if (!$id) {
    header('Location : index.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindvalue(':id', $id);
$statement->execute();
$product =$statement->fetch(PDO::FETCH_ASSOC);

$errors = [];

$title = $product['title'];
$descrip = $product['descrip'];
$price = $product['price'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $descrip = $_POST['descrip'];
    $price = $_POST['price'];
  

    if(!$title){
        $errors[] = 'Product Name is required';
    }
    if(!$price){
        $errors[] = 'Product Price is reqiured';
    }
    if (!is_dir('images')){
        mkdir('images');
    }
    if(empty($errors)){
        $image = $_FILES['img'] ?? null;
        $imgpath = '';

        }
        if($product['image']){
            unlink($product['image']);
            
        if ($image && $image['tmp_name']){
            $imgpath = 'images/'.randomStr(8).'/'.$image['name'];
            mkdir(dirname($imgpath));
            move_uploaded_file($image['tmp_name'], $imgpath);
        }

    $statement = $pdo->prepare("UPDATE products SET title = :title, descrip= :descrip , price = :price, img = :img WHERE id = :id") ;
    $statement->bindValue(':title',$title);
    $statement->bindValue(':descrip',$descrip);
    $statement->bindValue(':price',$price);
    $statement->bindValue(':img', "$imgpath");
    $statement->bindValue(':id',$id);
    $statement->execute();
    header('Location: index.php');
    }
}

    function randomStr($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) -1);
            $str .= $characters[$index];
        }
        return $str;
    }
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app.css">
    <title>Create</title>
</head>
<body>
    <a href="index.php" class="btn btn-secondary">Go back to products</a>
    <?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as  $error):?>
            <div><?php echo $error ?></div>
        <?php endforeach;?>
    </div>
    <?php endif; ?>
    <h2>Update Product <b> <?php echo $product["title"]?> </b></h2>

    <form action="" method="post" enctype="multipart/form-data">
        <?php if($product['img']):?>
            <img style="width: 70px;" src="<? php echo $product['img']?>">
        <?php endif;?>
    <div class="form-group">
    <label>Product Image</label>
    <br>
    <input type="file" name="img">
    </div>
  <div class="form-group">
    <label>Product Name</label>
    <input type="text" class="form-control" value="<?php echo $title?>" name="title">
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" name="descrip" value="<?php echo $descrip?>"></textarea>
  </div>
  <div class="form-group">
    <label>Product Price</label>
    <input type="number" class="form-control" value="<?php echo $price?>" name="price">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>