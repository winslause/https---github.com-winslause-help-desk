<?php
session_start();
include "config.php";
include "header.php";
?>



<?php if ($_SESSION['login']) { ?>

    <?php
    $email = $_SESSION['login'];
    $sql = "SELECT * FROM tblstudents WHERE email=:email ";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        foreach ($results as $results) {
            // echo "<i class='fa-regular fa-user'></i>";
            // echo htmlentities($result->fname);
        }
    } ?>

    <?php
    $email = $_SESSION['login'];
    $sql = "SELECT * FROM tblstaff WHERE email=:email ";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        foreach ($result as $result) {

            // echo "<i class='fa-regular fa-user'></i>";
            // echo htmlentities($result->fullname);
        }
    } ?>



<?php } else { ?>

    <script>
        alert("You are not logged in");
    </script>

<?php } ?>




<!-- Lets update our profiles -->


<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fullname'];
    $regn = $_POST['regnumber'];
    $emailn = $_POST['emailaddress'];
    $dep = $_POST['department'];
    $course = $_POST['course'];
    $gender = $_POST['gender'];
    $idno = $_POST['idnumber'];
    $fon = $_POST['phone'];
    $job = $_POST['jobtitle'];
   
    $sql = "UPDATE tblstudents set fname=:fname,anumber=:regn,email=:emailn,department=:dep,course=:course,gender=:gender,idnumber=:idno,phone=:fon WHERE email=:emailn ";
    $sql ="UPDATE tblstaff set fullname=:fname,numberid=:idno,email=:emailn,department=:dep,jobtitle=:job,phone=:fon,gender=:gender where email=:emailn ";

    $query = $dbh->prepare($sql);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':regn', $regn, PDO::PARAM_STR);
    $query->bindParam(':emailn', $emailn, PDO::PARAM_STR);
    $query->bindParam(':dep', $dep, PDO::PARAM_STR);
    $query->bindParam(':course', $course, PDO::PARAM_STR);
    $query->bindParam(':gender', $gender, PDO::PARAM_STR);
    $query->bindParam(':idno', $idno, PDO::PARAM_STR);
    $query->bindParam(':fon', $fon, PDO::PARAM_STR);
    $query->bindParam(':job', $job, PDO::PARAM_STR);
    $query->execute();
    $msg = "Profile Updated Successfully";
    // $lastInsertId = $dbh->lastInsertId();
    // if ($lastInsertId) {
    //     echo "<script>alert('Registration successfull. Now you can login');</script>";
    //     header('location:studentlogin.php');
    // } else {
    //     echo "<script>alert('Something went wrong. Please try again');</script>";
    // }
}


?>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <style>
        body {
            background: rgb(99, 39, 120)
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }
    </style>
</head>

<body style="background-color: darkgray;">
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="container rounded bg-white mt-5 mb-5" style="background-color: darkgrey;">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"> <?php echo htmlentities($result->fullname); ?> <?php echo htmlentities($results->fname); ?> </span><span class="text-black-50"></span><span><?php echo htmlentities($results->email); ?> <?php echo htmlentities($result->email); ?> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <form method="post">
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Full Name</label><input name="fullname" type="text" class="form-control" placeholder="<?php echo htmlentities($result->fullname); ?> <?php echo htmlentities($results->fname); ?>" value=""></div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Registration Number(If Student)</label><input name="regnumber" type="text" class="form-control" placeholder="<?php echo htmlentities($results->anumber); ?>" value=""></div>
                            <div class="col-md-12"><label class="labels">Email</label><input name="emailaddress" type="email" class="form-control" placeholder="<?php echo htmlentities($results->email); ?> <?php echo htmlentities($result->email); ?> " value=""></div>
                            <div class="col-md-12"><label class="labels">Department</label><input name="department" type="text" class="form-control" placeholder="department" value=""></div>


                            <div class="col-md-12"><label class="labels">Course</label><input name="course" type="text" class="form-control" placeholder="course" value=""></div>


                            <div class="col-md-12"><label class="labels">Gender</label>
                            <select name="gender" type="text" class="form-control" placeholder="enter address line 2" value="">

                                    <option value="volvo">Male</option>
                                    <option value="saab">Female</option>
                                    <option value="saab">Other</option>
                                </select></div>



                            <div class="col-md-12"><label class="labels">ID Number</label><input name="idnumber" type="text" class="form-control" placeholder="id number" value=""></div>
                            <div class="col-md-12"><label class="labels">Phone</label><input name="phone" type="number" class="form-control" placeholder="phone" value=""></div>
                            <div class="col-md-12"><label class="labels">Job Title (Staff)</label><input name="jobtitle" type="text" class="form-control" placeholder="jobtitle" value=""></div>
                        </div>
                        <!-- <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                        <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                    </div> -->
                        <div class="mt-5 text-center"><input name="submit" class="btn btn-primary profile-button" type="submit" value="UPDATE PROFILE"></input></div>
                </div>
            </div>
            </form>
            <!-- <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                    <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                    <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
                </div>
            </div>
        </div> -->
        </div>
    </div>
    </div>
    </div>

    <script src="" async defer></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
<?php
include 'footer.php';
?>

</html>