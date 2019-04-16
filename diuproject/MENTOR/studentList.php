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
    <link rel="icon" href="../img/diuIcon.png">
    <link rel="stylesheet" href="adminCss.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Student List
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
                <a class="nav-link mr-3" href="mentorDashboard.php">Home
                    <span class="sr-only">(current)
              </span>
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="studentList.php">Student
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="parantList.php">Parent
                </a>
            </li>
            <li class="nav-item px-2 float-left">
                <a class="nav-link text-white" href="logout.php">Log out
                </a>
            </li>
        </ul>
</nav>
<div class="container-fluid mt-1">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-striped table-bordered table-responsive-sm ">
                <thead class="bg-info text-white">
                <tr>
                    <th>No
                    </th>
                    <th>First Name
                    </th>
                    <th>Last Name
                    </th>
                    <th>student id
                    </th>
                    <th>Mobile
                    </th>
                    <th>Email
                    </th>
                    <th>CGPA
                    </th>
                </tr>
                </thead>
                <?php
                $sqliAdminAccount = "SELECT * FROM student_account";
                $queryAdminAccount = mysqli_query($mysql,$sqliAdminAccount);
                while ($rowAdminAccount = mysqli_fetch_array($queryAdminAccount)){
                    ?>
                    <tbody>
                    <tr>
                        <td>
                            <?php echo $rowAdminAccount['id'];?>
                        </td>
                        <td>
                            <?php echo $rowAdminAccount['firstname'];?>
                        </td>
                        <td>
                            <?php echo $rowAdminAccount['lastname'];?>
                        </td>
                        <td>
                            <?php echo $rowAdminAccount['student_id'];?>
                        </td>
                        <td>
                            <?php echo $rowAdminAccount['mobile'];?>
                        </td>
                        <td>
                            <?php echo $rowAdminAccount['email'];?>
                        </td>
                        <td>
                            <?php echo $rowAdminAccount['CGPA'];?>
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
        <?php
        if (isset($_GET['uid'])){
            $id = $_GET['uid'];
        }
        ?>
        <?php
        $sql = "SELECT * FROM student_account WHERE id =$id LIMIT 1 ";
        $query = mysqli_query($mysql,$sql);
        $row = mysqli_fetch_array($query);
        ?>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h1 class="">Notice
                    </h1>
                    <button class="close" data-dismiss="modal">&times;
                    </button>
                </div>
                <form method="post" action="notesPhp.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Student ID
                            </label>
                            <label type="a" name="noticeTitle" class="form-control" value="<?php echo $row['firstname'];?>">
                        </div>
                        <div class="form-group">
                            <label>Description
                            </label>
                            <textarea name="noticesDescription" class="form-control" rows="4" cols="50" >
                  </textarea>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="submitNotices" value="submit" class="btn btn-lg bg-success" >
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer id="main-footer" class="text-center text-white bg-info mt-2 p-3 fixed-bottom">
    <p class="lead"> Copyright; Jamal Sheikh Ali & Omar Abdirhman
    </p>
</footer>
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
