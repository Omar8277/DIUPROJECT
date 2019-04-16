<?php
session_start();
include ("../DB/conn.php");
if (!isset($_SESSION['user'])){
    header("location: adminLogin.php");
}
?>
<?php
if(isset($_POST['submitNotices'])) {
  //  $noticeTitle = $_POST['noticeTitle'];
    $noticesDescription = $_POST['noticesDescription'];
    $addnotes="INSERT INTO notices(description) VALUES('$noticesDescription')";
    $query =mysqli_query($mysql,$addnotes);
    header('location:notesPhp.php');

}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="dashboardCss.css">
    <link rel="stylesheet" href="adminCss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Notices
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
                <a class="nav-link text-white" href="studentUser.php">Student
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
        <button class="btn btn-lg btn-info mt-5 ml-3" data-toggle="modal" data-target=".modal">Add Notices
        </button>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info ">
                        <h4 class="latest-post text-white">
                            <i class=" fas fa-exclamation-circle mr-2">
                            </i>Notices
                        </h4>
                    </div>
                    <table class="table table-striped table-bordered table-responsive-sm ">
                        <thead class="thead-light ">
                        <tr>
                            <th>No
                            </th>
                            <th>Description
                            </th><th>Deleted
                            </th>
                        </tr>
                        </thead>
                        <?php
                        $sqliNotices = "SELECT * FROM notices";
                        $queryNotices = mysqli_query($mysql,$sqliNotices);
                        while ($rowNotices = mysqli_fetch_array($queryNotices)){
                            ?>
                            <tbody>
                            <tr>
                                <td>
                                    <?php echo $rowNotices['id'];?>
                                </td>
                                <td>
                                    <?php echo $rowNotices['description'];?>
                                </td>
                                <td>
                                    <a href="Delete/notesDeleted.php?uid=<?php echo $rowNotices['id']; ?>"
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
<div class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h1 class="">
                    <i class=" fas fa-exclamation-circle mr-1">
                    </i>Notice
                </h1>
                <button class="close" data-dismiss="modal">&times;
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="notesPhp.php">
                    <div class="form-group">
                        <label>Description
                        </label>
                        <textarea name="noticesDescription" class="form-control" rows="4" cols="50" >
              </textarea>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submitNotices" value="Add" class="text-white btn btn-block btn-lg bg-success" >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
