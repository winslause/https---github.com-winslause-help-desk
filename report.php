<?php
session_start();
error_reporting(0);
include('config.php');
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {

?>

    <!doctype html>
    <html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="theme-color" content="#3e454c">

        <title> report </title>

        <!-- Font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Sandstone Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Bootstrap Datatables -->
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <!-- Bootstrap social button library -->
        <link rel="stylesheet" href="css/bootstrap-social.css">
        <!-- Bootstrap select -->
        <link rel="stylesheet" href="css/bootstrap-select.css">
        <!-- Bootstrap file input -->
        <link rel="stylesheet" href="css/fileinput.min.css">
        <!-- Awesome Bootstrap checkbox -->
        <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
        <!-- Admin Stye -->
        <link rel="stylesheet" href="css/style.css">
        <style>
            .errorWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #dd3d36;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            .succWrap {
                padding: 10px;
                margin: 0 0 20px 0;
                background: #fff;
                border-left: 4px solid #5cb85c;
                -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            }

            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>

    </head>

    <body style="background-color: #fff; font-size:15px;">
        <?php include('header1.php'); ?>


        <div class="ts-main-content">

            <div class="content-wrapper">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">

                            <h2 class="page-title">Solved Requests</h2>

                            <!-- Zero Configuration Table -->
                            <div class="panel panel-default">
                                <div class="panel-heading">Service Info</div>
                                <div class="panel-body">

                                    <table width="100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th style="border: 1px solid black;">Full Name</th>
                                                <th style="border: 1px solid black;">Email</th>
                                                <th style="border: 1px solid black;">Department</th>
                                                <th style="border: 1px solid black;">Date Reported</th>
                                                <th style="border: 1px solid black;">Time Reported</th>
                                                <th style="border: 1px solid black;">Problem</th>
                                                <th style="border: 1px solid black;">Date Checked</th>
                                                <th style="border: 1px solid black;">Time Checked</th>

                                                <th style="border: 1px solid black;">Comments</th>
                                                <th style="border: 1px solid black;">Status</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>#</th>
                                                <th style="border: 1px solid black;">Full Name</th>
                                                <th style="border: 1px solid black;">Email</th>
                                                <th style="border: 1px solid black;">Department</th>
                                                <th style="border: 1px solid black;">Date Reported</th>
                                                <th style="border: 1px solid black;">Time Reported</th>
                                                <th style="border: 1px solid black;">Problem</th>
                                                <th style="border: 1px solid black;">Date Checked</th>
                                                <th style="border: 1px solid black;">Time Checked</th>

                                                <th style="border: 1px solid black;">Comments</th>
                                                <th style="border: 1px solid black;">Status</th>


                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php

                                            //  $status = 0;
                                            // $email = $_SESSION['login'];

                                            $sql = 'SELECT * FROM tblstudents s
											JOIN tblservice t ON s.email = t.email';
                                            $query = $dbh->prepare($sql);
                                            // $query->bindParam(':email', $email, PDO::PARAM_STR);
                                            // $query->bindParam(':gmail', $gmail, PDO::PARAM_STR);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            $cnt = 1;
                                            if ($query->rowCount() > 0) {

                                                foreach ($results as $result) {
                                                    $email = $_SESSION['login'];
                                                    if (($result->status) == 1) {
                                                        if (($result->email) == $email) {



                                            ?>
                                                            <tr>
                                                                <td><?php echo htmlentities($cnt); ?></td>
                                                                <td style="border: 1px solid black;"><?php echo htmlentities($result->fname); ?></td>
                                                                <td style="border: 1px solid black;"><?php echo htmlentities($result->email); ?></td>

                                                                <td style="border: 1px solid black;"><?php echo htmlentities($result->department); ?></td>
                                                                <td style="border: 1px solid black;"><?php echo htmlentities($result->datereported); ?></td>
                                                                <td style="border: 1px solid black;"><?php echo htmlentities($result->timereported); ?></td>
                                                                <td style="border: 1px solid black;"><?php echo htmlentities($result->problem); ?></td>
                                                                <td style="border: 1px solid black;"><?php echo htmlentities($result->datechecked); ?></td>
                                                                <td style="border: 1px solid black;"><?php echo htmlentities($result->timechecked); ?></td>
                                                                <td style="border: 1px solid black;"><?php echo htmlentities($result->comments); ?></td>


                                                                <td style="border: 1px solid black;"><?php
                                                                                                        if ($result->status == 0) {
                                                                                                            echo htmlentities('Not Solved yet');
                                                                                                        } else if ($result->status == 1) {
                                                                                                            echo htmlentities('Solved');
                                                                                                        } else {
                                                                                                            echo htmlentities('Cancelled');
                                                                                                        }
                                                                                                        ?></td>

                                                                <td><br>



                                                                    <br>
                                                                    <br>

                                                                    <br>

                                                                </td>

                                                            </tr>
                                            <?php $cnt = $cnt + 1;
                                                        }
                                                    }
                                                }
                                            } ?>

                                        </tbody>
                                    </table>



                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                    <h2 class="page-title">Pending Requests</h2>

                                    <!-- Zero Configuration Table -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">Service Info</div>
                                        <div class="panel-body">

                                            <table width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Full Name</th>
                                                        <th style="border: 1px solid black;">Email</th>
                                                        <th style="border: 1px solid black;">Department</th>
                                                        <th style="border: 1px solid black;">Date Reported</th>
                                                        <th style="border: 1px solid black;">Time Reported</th>
                                                        <th style="border: 1px solid black;">Problem</th>
                                                        <th style="border: 1px solid black;">Date Checked</th>
                                                        <th style="border: 1px solid black;">Time Checked</th>

                                                        <th style="border: 1px solid black;">Comments</th>
                                                        <th style="border: 1px solid black;">Status</th>

                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th style="border: 1px solid black;">Full Name</th>
                                                        <th style="border: 1px solid black;">Email</th>
                                                        <th style="border: 1px solid black;">Department</th>
                                                        <th style="border: 1px solid black;">Date Reported</th>
                                                        <th style="border: 1px solid black;">Time Reported</th>
                                                        <th style="border: 1px solid black;">Problem</th>
                                                        <th style="border: 1px solid black;">Date Checked</th>
                                                        <th style="border: 1px solid black;">Time Checked</th>

                                                        <th style="border: 1px solid black;">Comments</th>
                                                        <th style="border: 1px solid black;">Status</th>


                                                    </tr>
                                                </tfoot>
                                                <tbody>

                                                    <?php

                                                    //  $status = 0;
                                                    // $email = $_SESSION['login'];

                                                    $sql = 'SELECT * FROM tblstudents s
											JOIN tblservice t ON s.email = t.email';
                                                    $query = $dbh->prepare($sql);
                                                    // $query->bindParam(':email', $email, PDO::PARAM_STR);
                                                    // $query->bindParam(':gmail', $gmail, PDO::PARAM_STR);
                                                    $query->execute();
                                                    $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                    $cnt = 1;
                                                    if ($query->rowCount() > 0) {

                                                        foreach ($results as $result) {
                                                            $email = $_SESSION['login'];
                                                            if (($result->status) == 0) {
                                                                if (($result->email) == $email) {



                                                    ?>
                                                                    <tr>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($cnt); ?></td>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->fname); ?></td>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->email); ?></td>

                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->department); ?></td>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->datereported); ?></td>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->datereported); ?></td>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->timereported); ?></td>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->problem); ?></td>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->datechecked); ?></td>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->timechecked); ?></td>
                                                                        <td style="border: 1px solid black;"><?php echo htmlentities($result->comments); ?></td>


                                                                        <td style="border: 1px solid black;"><?php
                                                                                                                if ($result->status == 0) {
                                                                                                                    echo htmlentities('Pending request');
                                                                                                                } else if ($result->status == 1) {
                                                                                                                    echo htmlentities('Solved');
                                                                                                                } else {
                                                                                                                    echo htmlentities('Cancelled');
                                                                                                                }
                                                                                                                ?></td>

                                                                        <td><br>



                                                                            <br>
                                                                            <br>

                                                                            <br>

                                                                        </td>

                                                                    </tr>
                                                    <?php $cnt = $cnt + 1;
                                                                }
                                                            }
                                                        }
                                                    } ?>

                                                </tbody>
                                            </table>



                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>

        <!-- Loading Scripts -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap-select.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/fileinput.js"></script>
        <script src="js/chartData.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>
<?php } ?>
<?php include('footer.php'); ?>