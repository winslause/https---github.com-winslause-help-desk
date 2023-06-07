<?php
session_start();
error_reporting(0);

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
      padding: 0;
      margin: 0;
      height: 30px;
      width: 100%;
      background-color: #25262e;

    }

    footer {
      background-color: #121315;
      color: #a7a7a7;
      font-size: 16px;
    }

    footer * {
      font-family: "Poppins", sans-serif;
      box-sizing: border-box;
      border: none;
      outline: none;
    }

    .row {
      padding: 1em 1em;
    }

    .row.primary {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 2fr;
      align-items: stretch;
    }

    .column {
      width: 100%;
      display: flex;
      flex-direction: column;
      padding: 0 2em;
      min-height: 15em;
    }

    h3 {
      width: 100%;
      text-align: left;
      color: white;
      font-size: 1.4em;
      white-space: nowrap;
    }

    ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      padding: 0;
      margin: 0;
    }

    li:not(:first-child) {
      margin-top: 0.8em;
    }

    ul li a {
      color: #a7a7a7;
      text-decoration: none;
    }

    ul li a:hover {
      color: #2a8ded;
    }

    .about p {
      text-align: justify;
      line-height: 2;
      margin: 0;
    }

    input,
    button {
      font-size: 1em;
      padding: 1em;
      width: 100%;
      border-radius: 5px;
      margin-bottom: 5px;
    }

    button {
      background-color: #c7940a;
      color: #ffffff;
    }

    div.social {
      display: flex;
      justify-content: space-around;
      font-size: 2.4em;
      flex-direction: row;
      margin-top: 0.5em;
    }

    .social i {
      color: #bac6d9;
    }

    .copyright {
      padding: 0.3em 1em;
      background-color: #25262e;
    }

    .footer-menu {
      float: left;
      margin-top: 2px;
    }

    .footer-menu a {
      color: #cfd2d6;
      padding: 6px;

      text-decoration: none;
    }

    .footer-menu a:hover {
      color: #27bcda;
    }

    .copyright p {
      font-size: 0.9em;
      text-align: right;
    }

    @media screen and (max-width: 850px) {
      .row.primary {
        grid-template-columns: 1fr;
      }

    }
  </style>
</head>

<body style=" background-color: #25262e;">
  <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <footer style=" background-color: #25262e;">
    <div class="row primary" style=" background-color: #25262e;">
      <div class="column about" style=" background-color: #25262e;">

        <h3>Creative Developers</h3>

        <p>
          We are a team of creative developers who are eager to learn and implement new technologies. For your business to grow, we are here to help you with our services.
        </p>


      </div>

      <div class="column links" style=" background-color: #25262e;">
        <h3>Quick Links</h3>

        <ul>

          <li>
            <a href="stafflogin.php">STAFF</a>
          </li>
          <li>
            <a href="studentlogin.php">STUDENT</a>
          </li>
          <li>
            <a href="#">ADMIN</a>
          </li>
          <li>
            <a href="#support">Support</a>
          </li>
        </ul>

      </div>



      <!-- <div class="column links">
  <h3>Some Links</h3>
   <ul>
    <li>
     <a href="#faq">F.A.Q</a>
    </li>
    <li>
     <a href="#cookies-policy">Cookies Policy</a>
    </li>
    <li>
    <a href="#terms-of-services">Terms Of Service</a>
    </li>
    <li>
    <a href="#support">Support</a>
    </li>
  </ul>
</div> -->

      <div class="column subscribe">
        <h3>Newsletter</h3>
        <div>
          <input name="newsemail" type="email" placeholder="Your email id here" />
          <button>Subscribe</button>
        </div>

      </div>

    </div>

    <div class="row copyright">

      <div class=" footer-menu">

        
        <a href="https://twitter.com/Wenslause5"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
        <a href="https://www.linkedin.com/in/wenslause-busale/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        <a href="mailto:Wenbusale383@gmail.com"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>

      </div>
      <p>Copyright &copy; 2023</p>
    </div>
  </footer>

  <script src="" async defer></script>
</body>

</html>