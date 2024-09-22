<?php
include '../../admin/include/db.php';
include 'Posts.tpl';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $image = $_FILES['image'];
    $user_id = $_POST['user_id']; // اضافه کردن user_id

    // Validate inputs
    if (empty($title) || empty($content) || empty($phone) || empty($email) || empty($image) || empty($user_id)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Handle image upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($image["tmp_name"]);
    if ($check === false) {
        echo "Selected file is not an image.";
        exit;
    }

    // Check file size
    if ($image["size"] > 500000) {
        echo "File size is too large.";
        exit;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Only JPG, JPEG, PNG & GIF files are allowed.";
        exit;
    }

    if (move_uploaded_file($image["tmp_name"], $target_file)) {
        // Save post to database (assuming you have a database connection)
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
        $sql = "INSERT INTO posts (user_id, title, content, phone, email, image, created_at, updated_at) VALUES ('$user_id', '$title', '$content', '$phone', '$email', '$target_file', '$created_at', '$updated_at')";
        if ($conn->query($sql) === TRUE) {
            echo "You have successfully posted your post.";
        } else {
            echo "Error: " . $conn->error;
        }
        $conn->close();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
