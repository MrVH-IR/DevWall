<?php

include '../admin/include/db.php';
include './template/login.tpl';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // چک کردن یوزر در جدول users
    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            echo "Login successful!";
            
            // ایجاد سشن برای کاربر
            session_start();
            $session_token = bin2hex(random_bytes(32));
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['session_token'] = $session_token;
            $_SESSION['expires_at'] = time() + (24 * 60 * 60); // 24 ساعت

            // ذخیره اطلاعات سشن در دیتابیس
            $user_id = $row['id'];
            $expires_at = date('Y-m-d H:i:s', $_SESSION['expires_at']);
            $insert_session_sql = "INSERT INTO user_sessions (user_id, session_token, expires_at) VALUES ('$user_id', '$session_token', '$expires_at')";
            if (!mysqli_query($conn, $insert_session_sql)) {
                error_log("Error: " . mysqli_error($conn));
            }

            header("Location: ./index.php");
        } else {
            echo "Invalid password.";
        }
    } elseif (mysqli_num_rows($result) == 0) {
        // چک کردن یوزر در جدول users_company
        $sql = "SELECT id, username, password FROM users_company WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
                echo "Login successful!";
                
                // ایجاد سشن برای کاربر
                session_start();
                $session_token = bin2hex(random_bytes(32));
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['session_token'] = $session_token;
                $_SESSION['expires_at'] = time() + (24 * 60 * 60); // 24 ساعت

                // ذخیره اطلاعات سشن در دیتابیس
                $user_id = $row['id'];
                $expires_at = date('Y-m-d H:i:s', $_SESSION['expires_at']);
                $insert_session_sql = "INSERT INTO company_sessions (user_id, session_token, expires_at) VALUES ('$user_id', '$session_token', '$expires_at')";
                if (!mysqli_query($conn, $insert_session_sql)) {
                    error_log("Error: " . mysqli_error($conn));
                }

                header("Location: ./index.php");
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "User not found.";
        }
    }
}

?>
