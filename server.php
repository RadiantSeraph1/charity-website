<?php
session_start();


$Name = "";
$DoB    = "";
$Email    = "";
$Password    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'radiantsolutions', '', 'users');


if (isset($_POST['reg_user'])) {
  
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $DoB = mysqli_real_escape_integer($db, $_POST['DoB']);
  $Email = mysqli_real_escape_string($db, $_POST['Email']);
  $Password = mysqli_real_escape_string($db, $_POST['password_1']);
 


  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
 


  $user_check_query = "SELECT * FROM users WHERE Name='$Name' OR Email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $users = mysqli_fetch_assoc($result);
  

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
