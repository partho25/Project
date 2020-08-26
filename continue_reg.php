<?php

include_once "connection.php";
$username = $_POST['uname'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if (empty($username)) {array_push($errors,"Username is required");}
if (empty($email)) {array_push($errors,"Email is required");}
if (empty($msg)) {array_push($errors,"Password is required");}





$query = "INSERT INTO  user (username, email ,password) VALUES ('$username','$email','$msg')";/*setup query*/
mysqli_query($con , $query );
$_SESSION['uname'] = $username;
header("Location:login.php");

/*check existing username

$user_check_query = "SELECT * From user Where uname = '$username' or email= '$email' LIMIT 1";
$result = mysqli_query($db,$user_check_query);
$user = mysqli_fetch_assoc($result);

if($user['uname']== $username){
  array_push($errors, "username is Already exist");
}

if($user['email']== $email){
  array_push($errors, "email is Already exist");
}*/




?>
