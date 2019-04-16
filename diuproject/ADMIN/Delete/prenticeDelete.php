<?php
session_start();
$mysql = mysqli_connect("localhost", "root", "", "diuproject");
if (isset($_GET['uid'])){
    $id = $_GET['uid'];
    $sqliParantDelete ="DELETE FROM prentice_account WHERE id ='$id'";
    $queryParantDelete =mysqli_query($mysql,$sqliParantDelete);
    if ($queryParantDelete){
        header('location:../parentsUser.php');
    }
}
?>
