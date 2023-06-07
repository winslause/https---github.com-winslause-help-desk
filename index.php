<?php
session_start();
error_reporting(0);
include('config.php');
?>

<?php if (strlen($_SESSION['login']) == 0) {
?>
    <div class="login_btn"> <a href="studentlogin.php" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
<?php } else {

    // echo "Welcome To carpooling page";
} ?>

<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>home</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="style.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


<body style="background-color: white;">
    <div>
        <?php
        include "header.php";
        ?>
    </div>

    <div>

        <h1>home page data</h1>
        <p>1 hello</p>
        <h2>home page data</h2>
        <p>1 hello</p>
        <h4>home page data</h4>
        <p>1 hello</p>
        <h5>home page data</h5>
        <p>1 hello</p>
        <h5>home page data</h5>
        <p>1 hello</p>
        <h5>home page data</h5>
        <p>1 hello</p>

    </div>




    <div>
        <?php
        include "footer.php";

        ?>

    </div>

</body>

</html>