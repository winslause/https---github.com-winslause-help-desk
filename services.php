<?php
session_start();
include "config.php";
include "header.php";
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
        #services {}

        #services .services-top {
            padding: 70px 0 50px;
        }

        #services .services-list {
            padding-top: 50px;
        }

        .services-list .service-block {
            margin-bottom: 25px;
        }

        .services-list .service-block .ico {
            font-size: 38px;
            float: left;
        }

        .services-list .service-block .text-block {
            margin-left: 58px;
        }

        .services-list .service-block .text-block .name {
            font-size: 20px;
            font-weight: 900;
            margin-bottom: 5px;
        }

        .services-list .service-block .text-block .info {
            font-size: 16px;
            font-weight: 300;
            margin-bottom: 10px;
        }

        .services-list .service-block .text-block .text {
            font-size: 12px;
            line-height: normal;
            font-weight: 300;
        }

        .highlight {
            color: #2ac5ed;
            font-weight: bold;
        }
    </style>
</head>

<body style="background-color: white;">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <div class="container bootstrap snippets bootdey">
        <section id="services" class="current">
            <div class="services-top">
                <div class="container bootstrap snippets bootdey">
                    <div class="row text-center">
                        <div class="col-sm-12 col-md-12 col-md-12">
                            <h2>What We Offer</h2>
                            <h2 style="font-size: 60px;line-height: 60px;margin-bottom: 20px;font-weight: 900;"></h2>
                            <p>We are <span class="highlight">experienced</span> and <span class="highlight">dedicated</span> to provide ontime services.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-1 col-sm-12 col-md-12 col-md-10">
                            <div class="services-list">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-md-4">
                                        <div class="service-block" style="visibility: visible;">
                                            <div class="ico fa fa-magic highlight"></div>
                                            <div class="text-block">
                                                <div class="name">Network Management</div>
                                                <div class="info">Installation and Repairs</div>
                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-md-4">
                                        <div class="service-block" style="visibility: visible;">
                                            <div class="ico fa fa-code highlight"></div>
                                            <div class="text-block">
                                                <div class="name">Computer Repairs</div>

                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-md-4">
                                        <div class="service-block" style="visibility: visible;">
                                            <div class="ico fa fa-pencil highlight"></div>
                                            <div class="text-block">
                                                <div class="name">Software Installations</div>

                                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div align="center">

        <form method="post" style="padding: 30px; width: 30%; background-color:lightcyan" name="signup">
            <h2>Request Service</h2>


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






            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img style="margin-top: 0px;" class="rounded-circle mt-5" width="100px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"> <?php echo htmlentities($result->fullname); ?> <?php echo htmlentities($results->fname); ?> </span><span class="text-black-50"></span><span><?php echo htmlentities($results->email); ?> <?php echo htmlentities($result->email); ?> </span> <span class="font-weight-bold"></span> Department: <?php echo htmlentities($results->department); ?> <?php echo htmlentities($result->department); ?> </span></div>

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date Reported</label>
                <input type="date" name="datereported" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required />
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Time Reported</label>
                <input type="time" name="timereported" class="form-control" id="appt" aria-describedby="emailHelp" value="00:00" required />
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <!-- <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input name="fullname" id="emailid" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Full Name " required />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Phone Number</label>
                <input type="number" name="phonenumber" class="form-control" id="myInput" placeholder="Phone number" required />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Department</label>
                <input type="text" name="department" class="form-control" id="myInput" placeholder="department" required />
            </div> -->
            <div class="form-group">
                <label for="exampleInputPassword1">Nature of your Problem</label>
                <textarea style="margin: 5px; height:130px" type="text" name="department" class="form-control" id="myInput" placeholder="describe your problem" required /></textarea>
            </div>

            <?php if ($_SESSION['login']) { ?>
                <button type="submit" id="submit" class="btn btn-primary" name="submit" value="signUp">SUBMIT</button>
            <?php } else { ?>
                <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login to request any service</a>
                

            <?php } ?>
        </form>
        <script src="" async defer></script>
        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>


</body>
<?php
include 'footer.php';
?>

</html>