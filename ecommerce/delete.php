<?php


$pdo = new PDO('mysql:host=localhost;post=3306;dbname=gcart', 'dammybundlez','tramadol');
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

$id = $_POST['id'] ?? null;
if (!$id) {
    header('Location : index.php');
    exit;
}

$statement = $pdo->prepare('DELETE FROM products WHERE id = :id');
$statement->bindvalue(':id' , $id);
$statement->execute();

header('Location:index.php');