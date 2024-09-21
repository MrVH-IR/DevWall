<?php

include '../admin/include/db.php';

session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $user_query = "SELECT username, profile_picture FROM users WHERE id = $user_id";
    $result = mysqli_query($conn, $user_query);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['username'];
        $profile_picture_path = $row['profile_picture'];
        $profile_picture_name = basename($profile_picture_path);
        $user_profile_img_src = "../uploads/profile_pics/$profile_picture_name";
    }
} else {
    $user_name = "کاربر";
    $user_profile_img_src = "";
    $hide_user_profile = true;
}

include './template/profile.tpl';

if (isset($hide_user_profile) && $hide_user_profile) {
    echo "<style>
            .user-profile {
                display: none;
            }
          </style>";
} else {
    echo "<script>
            document.querySelector('.user-profile img').src = '$user_profile_img_src';
          </script>";
}

?>
