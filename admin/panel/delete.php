<?php
include('config.php');
$user_id = $_GET['id']; 

$del = "delete from `user` where id = '$user_id'";

$rest = mysqli_query($connection , $del);

if (!$rest) {
     die("connection failed");
}

header('location: trash.php');

?>