<?php
$servername = "localhost";
$username = "dammybundlez";
$password = "tramadol";

try {
$pdo= new PDO("mysql:host=$servername;dbname=gcart", $username, $password);
  
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
} catch(PDOException $e){
echo "Connection failed: " . $e->getMessage();
}
?>