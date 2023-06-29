<?php
session_start();
error_reporting(0);
include('config.php');
?>







<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>home</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="style.css"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    body {
        font-family: sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #000;
        color: #fff;
        padding: 20px;
    }

    h1 {
        font-size: 24px;
    }

    p {
        font-size: 16px;
    }

    section {
        margin-bottom: 20px;
    }

    footer {
        background-color: #ccc;
        padding: 20px;
        text-align: center;
    }
</style>
<?php
include "header.php";
?>
</div>

<body style="background-color: white; display: flex;">
    <header>
        <h1>Computer Technical Support</h1>
        <p>We're here to help with your computer problems!</p>
    </header>
    <main>
        <section>
            <h2>Computer Repairs</h2>
            <p>We offer a wide range of computer repairs, including:</p>
            <ul>
                <li>Virus removal</li>
                <li>Hardware repairs</li>
                <li>Software installation</li>
                <li>Data recovery</li>
            </ul>
            <p>We also offer a same-day turnaround on most repairs.</p>
        </section>
        <section>
            <h2>Customer Help</h2>
            <p>We're also here to help you with any computer-related questions you may have.</p>
            <ul>
                <li>How to use your computer</li>
                <li>Troubleshooting problems</li>
                <li>Finding software and drivers</li>
            </ul>
            <p>We offer free customer support over the phone or through our website.</p>
        </section>
        <section>

            <p>We're open 24/7 to help you with your computer problems.</p>
        </section>
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Make the header sticky
            var header = $("#header");
            var scrollPos = 0;
            $(window).scroll(function() {
                scrollPos = $(window).scrollTop();
                if (scrollPos > 0) {
                    header.addClass("sticky");
                } else {
                    header.removeClass("sticky");
                }
            });
        });
    </script>

</body>
<div>
    <?php
    include "footer.php";

    ?>


</html>