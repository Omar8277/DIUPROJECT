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
    <link rel="icon" href="../img/icon.png">
    <link rel="stylesheet" href="adminCss.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Parent Login
    </title>
</head>
<body>
<?php
if (isset($_POST['mentorSubmit'])) {
    $parentUsername = $_POST['parentUsername'];
    $parentPassword = $_POST['parentPassword'];
//$_SESSION["mentorUsername"] =$mentorUsername;
    $res = mysqli_query($mysql, "select* from prentice_account where username='$parentUsername'and password=md5('$parentPassword')");
    $result = mysqli_fetch_array($res);
    if ($result) {
//echo "You are login Successfully ";
        $_SESSION['user'] = $parentUsername;
        header("location:parentDashboard.php");
    } else {
        echo '<div class="alert bg-danger text-white alert-dismissible text-center" role="alert">
<strong>Please!</strong>The username and password you entered did not match our records. Please try again!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
    }
}
?>
<h1 class="text-center mt-5 text-black-50">Parent Account
</h1>
<div class="container pt-3">
    <div class="row justify-content-sm-center">
        <div class="col-sm-10 col-md-6">
            <div class="card border-info ">
                <div class="card-header bg-info text-white ">Sign in to continue
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h4 class="text-center">Parent
                            </h4>
                            <img src="../img/diuIcon.png " height="100" width="100">
                        </div>
                        <div class="col-md-8">
                            <form action="" METHOD="POST">
                                <input type="text" class="form-control mb-2" placeholder="Username" name="parentUsername">
                                <input type="password" class="form-control mb-2" placeholder="Password" name="parentPassword">
                                <input class="btn btn-lg btn-info btn-block mb-1" type="submit" name="mentorSubmit">
                                <!--                                <a href="#" class="float-right">Need help?</a>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
