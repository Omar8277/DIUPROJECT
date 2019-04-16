<?php
session_start();
include ("../DB/conn.php");
if (!isset($_SESSION['user'])){
    header("location: studentLogin.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="../diuIcon.png">
    <link rel="stylesheet" href="dashboardCss.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Student Dashboard
    </title>
</head>
<body>
<?php
//display();
//
//function display(){
//    $mysql = mysqli_connect("localhost", "root", "", "diuproject");
//    $sql ="select * from student_account";
//    $query =mysqli_query($mysql,$sql);
//    $num =mysqli_num_rows($query);
//    for ($i=0;$i<$num; $i++){
//        $result=mysqli_fetch_array($query);
//        $img=$result['image'];
//        echo '<img class="img" src="data:image;base64,'.$img.'">';
//
//    }
//
//}
//?>
<nav class="navbar navbar-expand-lg navbar-dark bg-info ">
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
                <a class="nav-link mr-3" href="">Home
                    <span class="sr-only">(current)
              </span>
                </a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link text-white" href="">Result
                </a>
            </li>
            <li class="nav-item px-2 float-left">
                <a class="nav-link text-white" href="logout.php">Log out
                </a>
            </li>
        </ul>
</nav>
<!--<div class="container-fluid bg-info p-2">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-4 text-white">-->
<!--            <h1> Student Id:-->
<!--                -->
<?php
//                echo $_SESSION['student_idUsername'];
//
//                ?>
<!--            </h1>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container-fluid">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-5 mt-1">-->
<!--            <div class="card card-primary bg-success mb-1 text-white text-center mb-5">-->
<!--                <div class="card-block">-->
<!--                    <h3>Student ID</h3>-->
<!--                    <h1 class="display-4"><i class="fas fa-pencil-alt ">-->
<!--                            -->
<?php
//                                            echo $_SESSION['student_idUsername'];
//                                                            ?>
<!--                        </i>-->
<!--                    </h1>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>--
<!--<div class="container-fluid pt-5 pb-5">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-12">-->
<!--            <div class="card ">-->
<!--                <div class="card-header bg-success">-->
<!--                    <h4 class=" text-white   ">Student Information</h4>-->
<!--                </div>-->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;
    </a>
    <a href="#">Home
    </a>
    <a href="#">
        <i class="fab fa-get-pocket mr-3">
        </i>Result
    </a>
    <a href="logout.php">
        <i class="fas fa-sign-out-alt mr-3">
        </i>Log out
    </a>
</div>
<div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;
        </span>
    <?php
    $stdID = $_SESSION["student_id"];
    $sqliStudentAccount = "SELECT * FROM student_account where student_id = '$stdID' ";
    $queryStudentAccount = mysqli_query($mysql, $sqliStudentAccount);
    while ($rowStudentAccount = mysqli_fetch_array($queryStudentAccount)) {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ">
                <div class="card card-primary p-5 mt-1 text-white text-center" style="background: #51C47C   ">
                    <h3 class="mt-2">TotalPaid
                    </h3>
                    <h1>
                        <i class="fas fa-dollar-sign">
                        </i>
                    </h1>
                    <h3 class="display-5">
                        <?php echo $rowStudentAccount['TotalPaid']; ?>
                    </h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-primary p-5 mt-1 text-white text-center" style="background:#201F1A">
                    <div class="card-block">
                        <h3 class="mt-2" >Total Due
                        </h3>
                        <h1>
                            <i class="fas fa-dollar-sign">
                            </i>
                        </h1>
                        <h3 class="display-5">
                            <?php echo $rowStudentAccount['TotalPaidDue']; ?>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-primary p-5 mt-1 text-white text-center" style="background: #CE4B7F">
                    <h3 class="mt-2">Othes
                    </h3>
                    <h1>
                        <i class="fas fa-dollar-sign">
                        </i>
                    </h1>
                    <h3 class="">
                        <?php echo $rowStudentAccount['TotalPaid']; ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12 mt-4">-->
    <!--                <h2 class="btn-info text-center mt-1 p- ">Student Information</h2>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <div class="container mt-5 shadow-lg " style="background: #FBF6EE">
        <div class="row">
            <div class="col-lg-6 ">
                <div>
                    <h4>
                        <label class="mt-5">First Name:
                        </label>
                        <?php echo $rowStudentAccount['firstname']; ?>
                    </h4>
                </div>
                <div>
                    <h4>
                        <label class="">Last Name
                        </label>
                        <?php echo $rowStudentAccount['lastname']; ?>
                    </h4>
                </div>
                <div>
                    <h4>
                        <label >Mother Name
                        </label>
                        <?php echo $rowStudentAccount['Mothername']; ?>
                    </h4>
                </div>
                <div>
                    <h4>
                        <label >Age
                        </label>
                        <?php echo $rowStudentAccount['age']; ?>
                    </h4>
                </div>
                <div>
                    <h4>
                        <label>Student ID
                        </label>
                        <?php echo $rowStudentAccount['student_id']; ?>
                    </h4>
                </div>
                <div>
                    <h4>
                        <label>Mobile
                        </label>
                        <?php echo $rowStudentAccount['mobile']; ?>
                    </h4>
                </div>
                <div>
                    <h4>
                        <label c>Email
                        </label>
                        <?php echo $rowStudentAccount['email']; ?>
                    </h4>
                </div>
                <div>
                    <h4>
                        <label class="pb-5" >CGPA
                        </label>
                        <?php echo $rowStudentAccount['CGPA']; ?>
                    </h4>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
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
<footer id="main-footer" class="text-center text-white  bg-info mt-5 p-3">
    <p class="lead"> Copyright; Jamal Sheikh Ali & Omar Abdirahman
    </p>
</footer>
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
