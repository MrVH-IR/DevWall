<?php
include '../admin/include/db.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $website = isset($_POST['website']) ? htmlspecialchars($_POST['website']) : null;
    $bio = isset($_POST['bio']) ? htmlspecialchars($_POST['bio']) : null;
    $profile_pic = isset($_FILES['profile_pic']) ? $_FILES['profile_pic'] : null;
    $is_company = isset($_POST['company']) ? true : false;
    $company_name = isset($_POST['company_name']) ? htmlspecialchars($_POST['company_name']) : null;
    $company_address = isset($_POST['company_address']) ? htmlspecialchars($_POST['company_address']) : null;

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if ($profile_pic) {
        $target_dir = "../uploads/profile_pics/";
        $target_file = $target_dir . basename($profile_pic["name"]);
        error_log($target_file);
        move_uploaded_file($profile_pic["tmp_name"], $target_file);
    }

    $check_username_sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $check_username_sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists. Please choose a different username.";
    } else {
        if ($is_company) {
            $sql = "INSERT INTO users_company (username, password, email, website, bio, profile_picture, company_name, address) VALUES ('$username', '$hashed_password', '$email', '$website', '$bio', '$target_file', '$company_name', '$company_address')";
        } else {
            $sql = "INSERT INTO users (username, password, email, website, bio, profile_picture) VALUES ('$username', '$hashed_password', '$email', '$website', '$bio', '$target_file')";
        }

        if (mysqli_query($conn, $sql)) {
            echo "Welcome $username";
        } else {
            echo "Error : " . mysqli_error($conn);
        }
    }
}

include 'template/register.tpl';

?>