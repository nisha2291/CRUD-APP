<?php
include ('../function.php');

session_start();
$btn = test_user($_POST['submit']); 
$name = test_user($_POST['name']);
$email = test_user($_POST['email']);
$description = test_user($_POST['description']);
$expreience = test_user($_POST['expreience']);
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
    exit();
} elseif (!preg_match("/^[a-zA-Z- ]*$/", $name)) {
    $_SESSION['name_err'] = "Only letters and white space allowed";
    header("location: ../index.php");
    exit();
}
//email validate
if(empty($email)){
    $_SESSION['email_err'] = "Email is required";
    header("location: ../index.php");
    exit();
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['email_err'] = "Invalid email format";
  header("location: ../index.php");
    exit();
}
if (empty($description)) {
    $_SESSION['description_err'] = "Description is required";
    header("location: ../index.php");
    exit();
}

if (empty($expreience)) {
    $_SESSION['expreience_err'] = "Experience is required";
    header("location: ../index.php");
    exit();
}
if (isset($_FILES['profile_image'])) {

if (empty($profile_image['name'])) {
    $_SESSION['img_err'] = "Profile image is required";
    header("location: ../index.php");
    exit();
}
$image_name = $profile_image['name'];
// user_6a0f2bfc06fd4.jpeg

$file_extension = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
print_r($file_extension);
$allowed_extensions = ['jpg', 'jpeg', 'png', 'webp'];
if (!in_array($file_extension, $allowed_extensions)) {
    $_SESSION['img_err'] = "Invalid file type. Only JPG, JPEG, PNG, and WEBP are allowed.";
    header("location: ../index.php");
}


$image_location = $profile_image['tmp_name'];
$new_image_name = uniqid("user_") . '.' . $file_extension;
// $image_destination = '../upload/' . $new_image_name;
$image_url= "http://localhost/crud%20App/uploads/" . $new_image_name;
//  move_uploaded_file();
}
include ('../config/db.php');
$stmt = $conn->prepare("INSERT INTO users (name, email, description, expreience, project, image_name,image_url) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $name, $email, $description, $expreience, $project, $new_image_name, $image_url);
$insert = $stmt->execute();

if ($insert) {
    move_uploaded_file($image_location, '../uploads/' . $new_image_name);
    $_SESSION['success'] = "User added successfully.";
    header("Location: ../index.php");
    exit();
} else {
    $_SESSION['error'] = "Failed to add user.";
    header("Location: ../index.php");
    exit();

}
}
?>