<?php
session_start();
include ("../DB/conn.php");
if (!isset($_SESSION['user'])){
    header("location: adminLogin.php");
}
?>
<?php
class studentUserClass{
    function studentUserFunction(){
        $mysql = mysqli_connect("localhost", "root", "", "diuproject");
        if (isset($_POST['submitNewUserAdmin'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $student_id = $_POST['student_id'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sqliAddNewUser = "INSERT INTO student_account(firstname,lastname,student_id,mobile,email,password) 
VALUES('$firstname','$lastname','$student_id','$mobile','$email',md5('$password'))";
            $query =    mysqli_query($mysql,$sqliAddNewUser);
            header("location:adminDashboard.php");
        }
    }
}
$studentUserObject = new studentUserClass();
$studentUserObject->studentUserFunction();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="dashboardCss.css">
    <link rel="stylesheet" href="adminCss.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Student Users
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
                <a class="nav-link text-white" href="mentorUser.php">Mentor
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="">Student
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="parentsUser.php">Parent
                </a>
            </li>
            <li class="nav-item px-2 float-left">
                <a class="nav-link text-white" href="logout.php">Log out
                </a>
            </li>
        </ul>
</nav>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;
    </a>
    <a href="#">About
    </a>
    <a href="#">Services
    </a>
    <a href="#">Clients
    </a>
    <a href="#">Contact
    </a>
</div>
<div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;
        </span>
    <div>
        <button class="btn btn-lg btn-info mt-5 ml-3" data-toggle="modal" data-target=".modal">Add New Student
        </button>
    </div>
    <div class="container-fluid  mt-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info ">
                        <h4 class="latest-post text-white">
                            <i class="fas fa-user-graduate mr-3 ">
                            </i>Student Users Account
                        </h4>
                    </div>
                    <table class="table table-striped table-bordered table-responsive-sm ">
                        <thead class="thead-dark ">
                        <tr>
                            <th>No
                            </th>
                            <th>First Name
                            </th>
                            <th>Mobile
                            </th>
                            <th>Email
                            </th>
                            <th>Edit
                            </th>
                            <th>Delete
                            </th>
                        </tr>
                        </thead>
                        <?php
                        $mysql = mysqli_connect("localhost", "root", "", "diuproject");
                        $sqliMentorAccount = "SELECT * FROM student_account";
                        $queryMentorAccount = mysqli_query($mysql, $sqliMentorAccount);
                        while ($rowMentorAccount = mysqli_fetch_array($queryMentorAccount)) {
                            ?>
                            <tbody>
                            <tr>
                                <td>
                                    <?php echo $rowMentorAccount['id']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['firstname']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['mobile']; ?>
                                </td>
                                <td>
                                    <?php echo $rowMentorAccount['email']; ?>
                                </td>
                                <td>
                                    <a href="studentEdit.php?uid=<?php echo $rowMentorAccount['id']; ?>"
                                       class="btn btn-info">
                                        </i>Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="Delete/studentDelete.php?uid=<?php echo $rowMentorAccount['id']; ?>"
                                       class="btn  btn-danger">Delete
                                    </a>
                                </td>
                            </tr>
                            </tr>
                            </tbody>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header bg-info text-white">
                            <h1 class="">
                                <i class="fas fa-user-graduate mr-3 ">
                                </i>Add Now User
                            </h1>
                            <button class="close" data-dismiss="modal">&times;
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label >First Name
                                    </label>
                                    <input type="name" name="firstname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Last Name
                                    </label>
                                    <input type="name" name="lastname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="name">Student ID
                                    </label>
                                    <input type="name" name="student_id" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Mobile
                                    </label>
                                    <input type="number" name="mobile" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Email
                                    </label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label >Password
                                    </label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" name="submitNewUserAdmin" value="submit"
                                           class="btn btn-lg bg-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>
<div class
<div class="card bg-info text-center fixed-bottom ">
    <div class="card-footer text-white">
        <p class="lead"> All Rights Reserved @ Jamal Sheikh Ali & Omar Abdirhman
        </p>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/jquery-3.3.1.slim.min.js">
</script>
<script src="../js/popper.min.js">
</script>
<script src="../js/bootstrap.bundle.min.js">
</script>
</body>
</html>
