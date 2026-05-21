<?php
include ('../controllers/function.php');

session_start();
$btn = test_user($_POST['submit']); 
$name = test_user($_POST['name']);
$email = test_user($_POST['email']);
$phone = test_user($_POST['phone']);
$expreience = test_user($_POST['expreience']);
$description = test_user($_POST['description']);
$project = test_user($_POST['project']);
$profile_image = $_FILES['profile_image'];

if (isset($btn)) {
    // if (empty($name) || empty($email) || empty($phone) || empty($expreience) || empty
    //  ($description) || empty($project) || empty($profile_image)) {
    //    $_SESSION['error'] = "All fields are required.";
    //    header("Location: ../index.php");
    //    exit();
    // } 
  
if (empty($name)) {
    $_SESSION['name_err'] = 'Name is required';
    header("location: ../index.php");
} elseif (!preg_match("/^[a-zA-Z- ]*$/", $name)) {
    $_SESSION['name_err'] = "Only letters and white space allowed";
    header("location: ../index.php");
}
//email validate
if(empty($email)){
    $_SESSION['email_err'] = "Email is required";
    header("location: ../index.php");
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['email_err'] = "Invalid email format";
  header("location: ../index.php");
}


}

?>