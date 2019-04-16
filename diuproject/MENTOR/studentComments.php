<?php
session_start();
include ("../DB/conn.php");
if (!isset($_SESSION['user'])){
    header("location: mentorLogin.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="../diuIcon.png">
    <link rel="stylesheet" href="adminCss.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Mentor
    </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">
        <img class="logo" src="../img/diuIcon.png " height="40" width="40">
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
                <a class="nav-link mr-3" href="giveComment.php">Home
                    <span class="sr-only">(current)
              </span>
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="">Student
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
if (isset($_POST['adminEditSumit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $student_id = $_POST['student_id'];
    $studentDescription= $_POST['studentDescription'];
    $sqlEdit = "UPDATE student_account SET comment='$studentDescription' WHERE id='$id'  ";
    $queryedit = mysqli_query($mysql,$sqlEdit);
    $rowEdit = mysqli_affected_rows($mysql);
    header('location:mentorDashboard.php');
}
?>
<?php
$sql = "SELECT * FROM student_account WHERE id =$id LIMIT 1 ";
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
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="modal-header bg-info text-white mt-5">
                <h1 class="">Comment
                </h1>
                <button class="close" data-dismiss="modal">&times;
                </button>
            </div>
            <form method="post" action="">
                <div class="modal-body">
                    <div class="form-group">
                        <label>First Name
                        </label>
                        <?php echo $row['firstname'];?>
                    </div>
                    <div class="form-group">
                        <label>Last Name
                        </label>
                        <?php echo $row['lastname'];?>
                    </div>
                    <div class="form-group">
                        <label>Mobile
                        </label>
                        <?php echo $row['mobile'];?>
                    </div>
                    <div class="form-group">
                        <label>Email
                        </label>
                        <?php echo $row['email'];?>
                    </div>
                    <div class="form-group">
                        <label>Student ID
                        </label>
                        <?php echo $row['student_id'];?>
                    </div>
                    <div class="form-group">
                        <label>Description
                        </label>
                        <input type="text"  name="studentDescription" class="form-control" style="height: 100px"  value="<?php echo $row['comment'];?> ">
                    </div>
                    <div class="modal-footer bg-fade">
                        <input type="submit" name="adminEditSumit"  class="btn btn-lg bg-success" >
                    </div>
            </form>
        </div>
        <footer id="main-footer" class="text-center text-white bg-info mt-2 p-3  ">
            <p class="lead"> Copyright; Jamal Sheikh Ali & Omar Abdirahman
            </p>
        </footer>
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
