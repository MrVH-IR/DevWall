<?php
include '../admin/include/db.php';
session_start();
$user_id = $_SESSION['user_id'];
session_unset();
session_destroy();
$result = "DELETE FROM user_sessions WHERE user_id = $user_id";
mysqli_query($conn, $result);
header("Location: ./index.php");
exit();
?>
