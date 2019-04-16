<?php
session_start();
include ("../DB/conn.php");
if (!isset($_SESSION['user'])){
    header("location: adminLogin.php");
}
?>
<?php
if (isset($_GET['uid'])){
    $id = $_GET['uid'];
}
?>
<?php
//$id = $_GET['uid'];
//echo $id;
?>
<?php
if (isset($_POST['mentorEditSumit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $sqlEdit = "UPDATE prentice_account SET firstname='$firstname', lastname='$lastname', mobile='$mobile', email ='$email' WHERE id='$id'  ";
    $queryedit = mysqli_query($mysql,$sqlEdit);
    $rowEdit = mysqli_affected_rows($mysql);
    if ($rowEdit >0){
    }
    header('location:parentsUser.php');
}
?>
<?php
$sql = "SELECT * FROM prentice_account WHERE id =$id LIMIT 1 ";
$query = mysqli_query($mysql,$sql);
$row = mysqli_fetch_array($query);
?>
<!---->
<!--<form method="post" action="">-->
<!--    <table>-->
<!---->
<!--        <tr>-->
<!--            <td><lable>First Name</lable></td>-->
<!--            <td><input type="text" name="firstname" value="-->
<?php //echo $row['firstname'];?>
<!-- "></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td><lable>Last Name</lable></td>-->
<!--            <td><input type="text" name="lastname" value="-->
<?php //echo $row['lastname'];?>
<!-- "></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td><lable>Mobile</lable></td>-->
<!--            <td><input type="text" name="mobile" value="-->
<?php //echo $row['mobile'];?>
<!-- "></td>-->
<!--        </tr>-->
<!---->
<!---->
<!--        <tr>-->
<!--            <td><lable>Email</lable></td>-->
<!--            <td><input type="email" name="email" value="-->
<?php //echo $row['email'];?>
<!-- "></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>  <input type="submit" name="adminEditSumit"></td>-->
<!--        </tr>-->
<!--    </table>-->
<!---->
<!--</form>-->
<!---->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="adminCss.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Mentor User Edit
    </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">
        <img class="logo" src="../img/icon.png" height="40" width="40">
    </a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
        </span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 m-auto">
            <li class="nav-item active">
                <a class="nav-link mr-3" href="adminDashboard.php">Home
                    <span class="sr-only">(current)
              </span>
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="notesPhp.php">Notices
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="adminUser.php">Admin
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="">Mentor
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="studentUser.php">Student
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="">Parent
                </a>
            </li>
            <li class="nav-item px-2 float-left">
                <a class="nav-link text-white" href="logout.php">Log out
                </a>
            </li>
        </ul>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="modal-header bg-info text-white">
                <h1 class="">Mentor User Edit information
                </h1>
                <button class="close" data-dismiss="modal">&times;
                </button>
            </div>
            <form method="post" action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name
                        </label>
                        <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname'];?> ">
                    </div>
                    <div class="form-group">
                        <label>Last Name
                        </label>
                        <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname'];?> ">
                    </div>
                    <div class="form-group">
                        <label>Mobile
                        </label>
                        <input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile'];?> ">
                    </div>
                    <div class="form-group">
                        <label>Email
                        </label>
                        <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?> ">
                    </div>
                    <div class="modal-footer bg-fade">
                        <input type="submit" name="mentorEditSumit"  class="btn btn-lg bg-success" >
                    </div>
            </form>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js">
</script>
<script src="../js/popper.min.js">
</script>
<script src="../js/bootstrap.bundle.min.js">
</script>
</body>
</html>
