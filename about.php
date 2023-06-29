<?php
session_start();
error_reporting(0);
include('config.php');
include('header.php');
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
    <style>
        body {
            background-image: url('back.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>

<body>
    <main>
        <p style="font-size: large;">
            We are a team of experienced computer technicians who specialize in repairs and technical support. We offer a wide range of services, including:

            * Hardware repairs
            * Software installation and troubleshooting
            * Data recovery
            * Network setup and maintenance
            * Virus removal

            We are committed to providing our customers with the highest quality of service, at a price that is affordable. We offer same-day service, and we are always available to answer your questions.

        </p>
        <section>
            <h2>Our Team</h2>
            <div class="team">
                <img style="border-radius: 50%" src="pic.png" width="200px" height="200px" alt="Team member 1">
                <h3 style="color:brown">Wenslause Shioso</h3>
                <p style="font-size: large;">
                    <b style="color: blue;">Wenslause</b> is our lead technician. He has over 10 years of experience in the IT industry, and he is an expert in all aspects of computer repair.
                </p>
            </div>
            <div class="team">
                <img style="border-radius: 50%" src="pic.png" width="200px" height="200px" alt="Team member 2">
                <h3 style="color:brown">Junior Omondi</h3>
                <p style="font-size: large;"><b style="color: blue;">Omosh</b> is our software specialist. He has a degree in computer science, and is an expert in installing and troubleshooting software.</p>
            </div>
        </section>
        <section>
            <h2>Our Services</h2>
            <ul>
                <li>Hardware repairs</li>
                <li>Software installation and troubleshooting</li>
                <li>Data recovery</li>
                <li>Network setup and maintenance</li>
                <li>Virus removal</li>
            </ul>
        </section>
        <section>
            <h2>Our Guarantee</h2>
            <p>We are so confident in our ability to provide you with quality service that we offer a 100% satisfaction guarantee. If you are not satisfied with our work, we will refund your money.</p>
        </section>
    </main>
    <script src="" async defer></script>
</body>
<?php
include "footer.php";

?>

</html>