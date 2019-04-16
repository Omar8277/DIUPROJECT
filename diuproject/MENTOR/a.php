<?php
session_start();
include ("../DB/conn.php");


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


    <title>Admin Dashboard</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#">
        <img class="logo" src="../img/diuIcon.png " height="40" width="40">
    </a>
    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 m-auto">
            <li class="nav-item active">
                <a class="nav-link mr-3" href="adminDashboard.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="notesPhp.php">Notices</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link text-white" href="adminUser.php">Admin</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link text-white" href="mentorUser.php">Mentor</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="studentUser.php">Student</a>
            </li>

            <li class="nav-item px-2">
                <a class="nav-link text-white" href="parentsUser.php">Parent</a>
            </li>

            <li class="nav-item px-2 float-left">
                <a class="nav-link text-white" href="logout.php">Log out

                </a>
            </li>
        </ul>


</nav>




<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#"><i class="fas fa-home mr-3"></i>Home</a>
    <a href="#"><i class="fas fa-users-cog mr-3"></i>Admin</a>
    <a href="#"><i class="fas fa-chalkboard-teacher mr-3"></i>Mentor</a>
    <a href="#"><i class="fas fa-user-graduate mr-3"></i>Student</a>
    <a href="#"><i class="fas fa-blind mr-3"></i>Parent</a>
    <a href="#"><i class="fas fa-sign-out-alt mr-3"></i>Log out</a>
</div>



<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <!---->
    <!--    <div class="container-fluid">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-4 ">-->
    <!--                <h3 class="float-left  mt-2 text-dark ">-->
    <!--                    <i>--><?php
    //                    echo $_SESSION['adminUsername'];
    //                    ?>
    <!--                    </i>-->
    <!--                </h3>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--    </div>-->

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6">
                <div class="card ">
                    <div class="card-header bg-success">
                        <h4 class="text-white"><i class="fas fa-user-graduate mr-3"></i>Student Account</h4>
                    </div>
                    <table class="table table-striped table-bordered table-responsive-sm ">
                        <thead class="thead-dark ">
                        <tr>
                            <th>No</th>
                            <th>First Name</th>
                            <th>student id</th>
                            <th>Email</th>



                        </tr>
                        </thead>

                        <?php

                        $sqliAdminAccount = "SELECT * FROM student_account";
                        $queryAdminAccount = mysqli_query($mysql,$sqliAdminAccount);
                        while ($rowAdminAccount = mysqli_fetch_array($queryAdminAccount)){





                            ?>
                            <tbody>

                            <tr>
                                <td> <?php echo $rowAdminAccount['id'];?></td>
                                <td><?php echo $rowAdminAccount['firstname'];?></td>
                                <td><?php echo $rowAdminAccount['student_id'];?></td>
                                <td><?php echo $rowAdminAccount['email'];?></td>

                            </tr>
                            </tr>




                            </tbody>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card ">
                    <div class="card-header bg-danger">
                        <h4 class="text-white"><i class="fas fa-blind mr-3"></i>Parent Account</h4>
                    </div>
                    <table class="table table-striped table-bordered table-responsive-sm ">
                        <thead class="thead-dark ">
                        <tr>
                            <th>No</th>
                            <th>First Name</th>
                            <th>Mobile</th>
                            <th>Email</th>



                        </tr>
                        </thead>

                        <?php

                        $sqliAdminAccount = "SELECT * FROM prentice_account";
                        $queryAdminAccount = mysqli_query($mysql,$sqliAdminAccount);
                        while ($rowAdminAccount = mysqli_fetch_array($queryAdminAccount)){





                            ?>
                            <tbody>

                            <tr>
                                <td> <?php echo $rowAdminAccount['id'];?></td>
                                <td><?php echo $rowAdminAccount['firstname'];?></td>
                                <td><?php echo $rowAdminAccount['mobile'];?></td>
                                <td><?php echo $rowAdminAccount['email'];?></td>

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


<div class="card bg-info text-center ">

    <div class="card-footer text-white">
        <p class="lead"> All Rights Reserved @ Jamal Sheikh Ali & Omar Abdirhman</p>
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








<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>