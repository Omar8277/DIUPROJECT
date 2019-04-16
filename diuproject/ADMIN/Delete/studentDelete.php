<?php
session_start();
$mysql = mysqli_connect("localhost", "root", "", "diuproject");
if (isset($_GET['uid'])){
    $id = $_GET['uid'];
    $sqliStudentDelete ="DELETE FROM student_account WHERE id ='$id'";
    $queryStudentDelete =mysqli_query($mysql,$sqliStudentDelete);
    if ($queryStudentDelete){
        header('location:../studentUser.php');
    }
}
?>
