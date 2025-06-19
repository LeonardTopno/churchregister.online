<?php
include('admin/includes/dbConnect.php');

@session_start(); 
session_start();
ob_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($conn, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}


// LOGIN USER
// if (isset($_POST['login_user'])) {
//   $username = mysqli_real_escape_string($conn, $_POST['username']);
//   $password = mysqli_real_escape_string($conn, $_POST['password']);

//   if (count($errors) == 0) {
//   	$password =MD5($password);
//   	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//   	$results = mysqli_query($conn, $query);
//   	if (mysqli_num_rows($results) == 1) 
//   	{
//   	  session_start();
//   	  $_SESSION['username'] = $username;
//   	  header('location:admin/index.php');
//   	}
//   	else 
//   	{
//   		array_push($errors, "Wrong username/password combination");
//   	}
//   }
// }

// if (isset($_POST['login_user'])) {
//   $username = mysqli_real_escape_string($conn, $_POST['username']);
//   $password = mysqli_real_escape_string($conn, $_POST['password']);

//   if (empty($username)) { echo "Username is required.<br>"; }
//   if (empty($password)) { echo "Password is required.<br>"; }

//   if (!empty($username) && !empty($password)) {
//     $password = md5($password);
//     $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
//     $results = mysqli_query($conn, $query);

//     if (mysqli_num_rows($results) == 1) {
//       session_start();
//       $_SESSION['username'] = $username;
//       header('location:admin/index.php');
//       exit();
//     } else {
//       echo "❌ Incorrect username or password.<br>";
//     }
//   }
// }


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  echo "Username entered: $username<br>";
  echo "Password entered (raw): $password<br>";

  $password = md5($password);
  echo "Password after MD5: $password<br>";

  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  echo "Query: $query<br>";

  $results = mysqli_query($conn, $query);
  echo "Rows returned: " . mysqli_num_rows($results) . "<br>";

  if (mysqli_num_rows($results) == 1) {
    session_start();
    $_SESSION['username'] = $username;
    header('location:admin/index.php');
    exit();
  } else {
    echo "<b>❌ Incorrect username or password</b>";
  }
}


?>