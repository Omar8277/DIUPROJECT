<?php
session_start();
include ("../DB/conn.php");
if (!isset($_SESSION['user'])){
    header("location: parentLogin.php");
}
?>
