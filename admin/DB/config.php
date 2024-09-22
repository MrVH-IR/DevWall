<?php
header("Location: ../../public/index.php");
// $servername = "localhost";
// $username = "root";

// $password = "";
// $dbname = "DevWall";

// ایجاد اتصال
// $conn = new mysqli($servername, $username, $password);

// بررسی اتصال
// if ($conn->connect_error) {
//     die("اتصال ناموفق: " . $conn->connect_error);
// }


// ایجاد دیتابیس
// $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

// if ($conn->query($sql) === TRUE) {
//     echo "دیتابیس DevWall با موفقیت ایجاد شد";
// } else {
//     echo "خطا در ایجاد دیتابیس: " . $conn->error;
// }

// انتخاب دیتابیس
// $conn->select_db($dbname);

// $sql = "CREATE TABLE IF NOT EXISTS users_company (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(50) NOT NULL,
//     email VARCHAR(100) NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     profile_picture VARCHAR(255),
//     bio TEXT,
//     website VARCHAR(255),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "جدول users_company با موفقیت ایجاد شد";
// } else {
//     echo "خطا در ایجاد جدول users_company: " . $conn->error;
// }

// ایجاد جدول users
// $sql = "CREATE TABLE IF NOT EXISTS users (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(50) NOT NULL,
//     email VARCHAR(100) NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     profile_picture VARCHAR(255),
//     bio TEXT,
//     website VARCHAR(255),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// if ($conn->query($sql) === TRUE) {
//     echo "جدول users با موفقیت ایجاد شد";
// } else {
//     echo "خطا در ایجاد جدول users: " . $conn->error;
// }

// ایجاد جدول projects
// $sql = "CREATE TABLE IF NOT EXISTS projects (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     user_id INT(11) NOT NULL,
//     title VARCHAR(255) NOT NULL,
//     description TEXT,
//     project_link VARCHAR(255),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     FOREIGN KEY (user_id) REFERENCES users(id)
// )";
// if ($conn->query($sql) === TRUE) {
//     echo "جدول projects با موفقیت ایجاد شد";
// } else {
//     echo "خطا در ایجاد جدول projects: " . $conn->error;
// }

// ایجاد جدول skills
// $sql = "CREATE TABLE IF NOT EXISTS skills (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     user_id INT(11) NOT NULL,
//     skill_name VARCHAR(100) NOT NULL,
//     proficiency INT(1) NOT NULL,
//     FOREIGN KEY (user_id) REFERENCES users(id)
// )";
// if ($conn->query($sql) === TRUE) {
//     echo "جدول skills با موفقیت ایجاد شد";
// } else {
//     echo "خطا در ایجاد جدول skills: " . $conn->error;
// }

// ایجاد جدول social_links
// $sql = "CREATE TABLE IF NOT EXISTS social_links (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     user_id INT(11) NOT NULL,
//     platform VARCHAR(50) NOT NULL,
//     link VARCHAR(255) NOT NULL,
//     FOREIGN KEY (user_id) REFERENCES users(id)
// )";
// if ($conn->query($sql) === TRUE) {
//     echo "جدول social_links با موفقیت ایجاد شد";
// } else {
//     echo "خطا در ایجاد جدول social_links: " . $conn->error;
// }

// ایجاد جدول user_sessions
// $sql = "CREATE TABLE IF NOT EXISTS user_sessions (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     user_id INT(11) NOT NULL,
//     session_token VARCHAR(255) NOT NULL,
//     expires_at TIMESTAMP NOT NULL,
//     FOREIGN KEY (user_id) REFERENCES users(id)
// )";
// if ($conn->query($sql) === TRUE) {
//     echo "جدول user_sessions با موفقیت ایجاد شد";
// } else {
//     echo "خطا در ایجاد جدول user_sessions: " . $conn->error;
// }

// ایجاد جدول posts
// $sql = "CREATE TABLE IF NOT EXISTS posts (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     user_id INT(11) NOT NULL,
//     title VARCHAR(255) NOT NULL,
//     content TEXT NOT NULL,
//     phone VARCHAR(15) NOT NULL,
//     email VARCHAR(100) NOT NULL,
//     image VARCHAR(255),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//     updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     FOREIGN KEY (user_id) REFERENCES users(id)
// )";
// if ($conn->query($sql) === TRUE) {
//     echo "جدول posts با موفقیت ایجاد شد";
// } else {
//     echo "خطا در ایجاد جدول posts: " . $conn->error;
// }

 /* بستن اتصال */

// $conn->close();
?>
