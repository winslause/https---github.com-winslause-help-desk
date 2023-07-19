<?php
// include "config.php";
// session_start();
error_reporting(0);
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .navbar .nav-item .dropdown-menu {
            display: none;
        }

        .navbar .nav-item:hover .nav-link {}

        .navbar .nav-item:hover .dropdown-menu {
            display: block;
        }

        .navbar .nav-item .dropdown-menu {
            margin-top: 0;
        }
    }

    .dropbtn {
        background-color: #3498DB;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #2980B9;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }

    /* ============ desktop view .end// ============ */
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-family: Arial; background-color: #333; display:relative; margin-top:0px;">
    <div class="container-fluid">

        <a class="navbar-brand" href="#"></a>
        <button style="border:none;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">


            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav" style="margin:1px;">
                <button style="margin-left:1px; font-size:medium; color:white; background-color:  #04aa6d; white-space:nowrap; border:none" class="nav-item "> <a class="nav-link" href="index.php">HOME </a> </button>
                <button style="margin-left:1px; font-size:medium; color:white; background-color:transparent; border:none" class="nav-item"><a class="nav-link" href="services.php"> SERVICES </a></button>
                <button style="margin-left:1px; font-size:medium; color:white; background-color:transparent; border:none; white-space:nowrap; " class="nav-item"><a class="nav-link" href="about.php"> ABOUT US </a></button>
                <button style="margin-left:1px; font-size:medium; color:white; background-color:transparent; border:none " class="nav-item"><a class="nav-link" href="faqs.php"> FAQS </a></button>
                <?php if ($_SESSION['login']) { ?>
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn" style="white-space:nowrap; background-color:transparent; border:none; text-transform:uppercase; margin-left:1px; font-size:medium; color:white; margin-top:9px;" data-bs-toggle="dropdown">
                            <span class="glyphicon glyphicon-user"></span>
                            <?php
                            $email = $_SESSION['login'];
                            $sql = "SELECT fname FROM tblstudents WHERE email=:email ";
                            $query = $dbh->prepare($sql);
                            $query->bindParam(':email', $email, PDO::PARAM_STR);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {
                                    // echo "<i class='fa-regular fa-user'></i>";

                                }
                                echo htmlentities($result->fname);
                            } ?>

                            <?php
                            $email = $_SESSION['login'];
                            $sql = "SELECT * FROM tblstaff WHERE email=:email ";
                            $query = $dbh->prepare($sql);
                            $query->bindParam(':email', $email, PDO::PARAM_STR);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {

                                    // echo "<i class='fa-regular fa-user'></i>";
                                    echo htmlentities($result->fullname);
                                }
                                // echo htmlentities("PROFILE");
                            }


                            ?>

                            <span class="caret"></span>

                        </button>
                        <div id="myDropdown" class="dropdown-content" style="font-size:large;background-color: #333;">
                            <a href="profile.php" style="color:white;">VIEW PROFILE</a>
                            <a href="post-testimonial.php" style="color:white;">POST A COMMENT</a>
                            <a href="contact-us.php" style="color:white;">CONTACT US</a>
                            <a href="changepassword.php" style="color:white;">CHANGE PASSWORD</a>
                            <a href="logout.php" style="color:white;">LOGOUT</a>
                        </div>
                    </div>
                    <button style="margin-left:1px; font-size:medium; color:white; background-color:transparent; border:none " class="nav-item"><a class="nav-link" href="report.php"> REPORT </a></button>
                    <button style="margin-left:1px; font-size:medium; color:white; background-color:transparent; border:none;  " class="nav-item"><a class="nav-link" href="logout.php"> LOGOUT </a></button>
                <?php } ?>

                <div style="float: right; margin: 10px; ">
                    <?php if (!$_SESSION['login']) { ?>
                        <!-- <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="report.php">RE</a> -->
                        <!-- <a href="studentlogin.php"> LOGIN/REGISTER</a> -->

                        <button align="right" style="float:right; margin-left:1px; text-align:right; margin-right:10px;  font-size:medium; color:white; background-color:transparent; border:none;  " class="nav-item"><a class="nav-link" href="studentlogin.php"> LOGIN/REGISTER </a></button>

                        <!-- <a style="margin-right: 20px; margin-top:10px;margin-bottom:10px;" href="help.php">HELP ME OUT</a> -->
                    <?php } ?>
                </div>

        </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
</nav>
<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // make it as accordion for smaller screens
        if (window.innerWidth > 992) {

            document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem) {

                everyitem.addEventListener('mouseover', function(e) {

                    let el_link = this.querySelector('a[data-bs-toggle]');

                    if (el_link != null) {
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.add('show');
                        nextEl.classList.add('show');
                    }

                });
                everyitem.addEventListener('mouseleave', function(e) {
                    let el_link = this.querySelector('a[data-bs-toggle]');

                    if (el_link != null) {
                        let nextEl = el_link.nextElementSibling;
                        el_link.classList.remove('show');
                        nextEl.classList.remove('show');
                    }


                })
            });

        }
        // end if innerWidth
    });
    // DOMContentLoaded  end
</script>