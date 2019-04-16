<?php
session_start();
include ("../DB/conn.php");
if(!isset($_SESSION['user'])){
    header("location: parentLogin.php");
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
    <a href="logout.php">
        <i class="fas fa-sign-out-alt mr-3">
        </i>Log out
    </a>
</div>
<div id="main">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;
        </span>
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <form method="post" action="parentDashboard.php">
                    <input type="text" name="search_id" id="search_id" placeholder="Find the ID" class="form-control shadow-lg  " >
                    <input type="submit" name="search" id="search" value="Find it!" class="shadow-lg btn-info btn btn-lg input-group-prepend"" >
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['search'])) {
    $id = $_POST['search_id'];
    //echo $id;
    $result = mysqli_query($mysql, "SELECT * FROM student_account where student_id = '$id' ");
    while ($rowStudentAccount = mysqli_fetch_array($result)) {
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-bordered  shadow-lg">
                    <thead class="btn-info ">
                    <tr> <th></th><td class="bg-light text-dark"></td></tr>
                    <tr><th>First Name</th><td class="bg-light text-dark"><?php echo $rowStudentAccount['firstname']; ?></td></tr>
                    <tr><th>last Name</th><td class="bg-light text-dark"><?php echo $rowStudentAccount['lastname']; ?></td></tr>
                    <tr><th>Mobile</th>   <td class="bg-light text-dark"><?php echo $rowStudentAccount['mobile']; ?></td></tr>
                    <tr><th>Student ID</th> <td class="bg-light text-dark"><?php echo $rowStudentAccount['student_id']; ?></td></tr>
                    <tr><th>Dua</th><td class="bg-light text-dark"><?php echo $rowStudentAccount['TotalPaidDue']; ?></td></tr>
                    </thead>
                </table>
                <table class="table table-striped table-bordered     ">
                    <thead class="text-dark mt-5">
                    <tr class="bg-info text-white"><th>Subject </th><th> Course</th><td>Grade</td></tr>
                    <tr><th>Subject 1</th><th><?php echo $rowStudentAccount['course_1']; ?><td><?php echo $rowStudentAccount['result_1']; ?></td></tr>
                    <th>Subject 2</th><th><?php echo $rowStudentAccount['course_2']; ?> <td><?php echo $rowStudentAccount['result_2']; ?></td></>
                    <tr><th>Subject 3</th><th><?php echo $rowStudentAccount['course_3']; ?><td><?php echo $rowStudentAccount['result_3']; ?></td></tr>
                    <tr><th>Subject 4</th><th><?php echo $rowStudentAccount['course_4']; ?></th><td><?php echo $rowStudentAccount['result_4']; ?></td></tr>
                    </thead>
                </table>
            </div>
            <div class="col-lg-12">
                <table class="table table-striped table-bordered shadow-lg">
                    <thead class="btn-info ">
                    <tr>
                        <th>CGPA</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $rowStudentAccount['CGPA']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12">
                <table class="table table-striped table-bordered shadow-lg">
                    <thead class="btn-info ">
                    <tr>
                        <th>Comments</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $rowStudentAccount['comment']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <footer id="main-footer" class=" text-center text-white  bg-info mt-5 p-3">
        <p class="lead"> Copyright; Jamal Sheikh Ali & Omar Abdirahman</p>
    </footer>
<?php
}
}
?>
<footer id="main-footer" class="fixed-bottom text-center text-white  bg-info mt-5 p-3">
    <p class="lead"> Copyright; Jamal Sheikh Ali & Omar Abdirahman</p>
</footer>
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
