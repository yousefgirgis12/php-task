<?php

session_start();

$username = "";
$email ="";

$errors = array();
$db = mysql_connect('localhosy','root','','practice') or die("could not connect to database");

$username = mysql_real_escape_string($db, $_POST['userame']);
$email= mysql_real_escape_string($db, $_POST['email']);
$password_1 = mysql_real_escape_string($db, $_POST['password_1']);
$password_2 = mysql_real_escape_string($db, $_POST['password_2']);

if (empty($username))   {array_push($errors,"username  is required")};
if (empty($email))      {array_push($errors,"Email  is required")};
if (empty($password_1)) {array_push($errors,"password  is required")};
if($password_1 != $passeord_2){array_push($errors"password do not match")}};

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = $  'email' LIMIT 1";


$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);


if($user){
	if($user['username'] === $username){array_push($errors, "username already exists");}
	if($user['email'] === $email){array_push($errors, "this email already has a registered username");}	
}
if(count($errors) == 0){
	$password =md5($password_1);
	$quary ="INSERT INTO user(username, email, password) VALUES ('$username',$email','password')";
	mysqli_query($db,$quary);
	$_SWSSION['username']= $username;
	$_SWSSION['success']= "You are noe logged in";
	header('location: indexed.php')}
}

if(isset($_POST['login_user'])){

$username = mysql_real_escape_string($db, $_POST['Name']);
$password= mysql_real_escape_string($db, $_POST['password']);
if(empty($username)){
	array_push($errors, "username is required");
}
if(empty($password)){
	array_push($errors, "password is required");
}
if(count($errors) == 0){
$password = md5($password);
$query = "SELECT * FROM user WHERE username = '$username' AND password='$password'";
$results=mysqli_query($db, $query);
if(mysqli_num_results($results)){
$_SESSION['username']=$username;
$_SESSION['success']="logged in successfully";
header('location: index.php');
}
else{
	array_push($errors, "wrong username or password combination. please try again" );
}
?>