<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('sql12.freesqldatabase.com', 'sql12330999', 'GAKQGzSZDi', 'sql12330999');


// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = "admin";
    $password = "password");
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database
        $query = "SELECT * FROM tbl_user WHERE use_email='$username' AND use_password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) = 0) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination"); 
        }
    }
  }
  
  ?>
