<?php
// require_once 'database.php';
// $error = [];
// $firstname = '';
// $lastname = '';
// $email = '';
// $password = '';
// $re_password = '';

// if ($_SERVER['REQUEST_METHOD'] === 'POST'){
//     $firstname = $_POST['firstname'];
//     $lastname = $_POST['lastname'];
//     $email = $_POST['email'];
//     $password = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
//     $re_password = password_hash($_POST['re_password'], PASSWORD_DEFAULT );

//     if(!$firstname){
//         $errors[] = 'First Name is required';
//     }
//     if(!$lastname){
//         $errors[] = 'Last Name is reqiured';
//     }
//     if(!filter_var($_POST['email'] , FILTER_VALIDATE_EMAIL)){
//       $errors[] = ' valid Email is reqiured';
//     }
//     if(!$password){
//       $errors[] = ' Password is reqiured';
//       } 
//     if(strlen($_POST['pwd']) < 8){
//         $errors[] = 'Password must be more than 8';
//     }
//     if (!preg_match("/[a-z]/i", $_POST["pwd"])){
//       $errors[] = 'password must contain at least one letter';
//     }
//     if (!preg_match("/[0-9]/", $_POST["re_password"])){
//       $errors[] = 'password must contain at least one letter';
//     }
//     if(!$re_password){
//     $errors[] = 'Confirm Password is reqiured';
//     }  
//     if ($_POST['pwd'] !== $_POST['re_password']){
//       $errors[] = 'passwords must match';
//     } 
//     if(empty($errors)){
//           $statement = $pdo->prepare("INSERT INTO user1 (firstname , lastname , email , pwd , re_password)
//           VALUES (:firstname , :lastname, :email, :pwd, :re_password)");
//           $statement->bindValue(':firstname', $firstname);
//           $statement->bindValue(':lastname',$lastname);
//           $statement->bindValue(':email', $email);
//           $statement->bindValue(':pwd', $password);
//           $statement->bindValue(':re_password', $re_password);
//        }
//           try{
//             $statement->execute();
//             echo '<script>alert("New account created.")</script>';
//             echo '<script>window.location.replace("index.php")</script>';
//         }catch(Exception $e){
//             echo '<script>alert("An error occurred")</script>';
//               echo 'Exception -> ';
//             var_dump($e->getMessage());
//             }       
//         }  
           
    