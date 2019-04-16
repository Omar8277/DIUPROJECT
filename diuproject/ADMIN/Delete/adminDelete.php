<?php
session_start();
$mysql = mysqli_connect("localhost", "root", "", "diuproject");
if (isset($_GET['uid'])){
    $id = $_GET['uid'];
    $sqliAdminDelete ="DELETE FROM admin_account WHERE id ='$id'";
    $queryAdminDelete =mysqli_query($mysql,$sqliAdminDelete);
    if ($queryAdminDelete){
        header('location:../adminUser.php');
    }
}
?>




