<?php
include 'db_config.php';
session_start();
if (isset($_SESSION['uid'])) {
    $usql = mysqli_query($conn, "SELECT * FROM `USERS` WHERE 'id'='" . $_SESSION['uid'] . "'");
    $user = mysqli_fetch_array($usql);
    $user_row = mysqli_num_rows($usql);

    $check = mysqli_query($conn, "SELECT * FROM `complaints` WHERE `user_id`='" . $_SESSION['uid'] . "' AND `reply`=''");
    $rcount = mysqli_num_rows($check);
}

?>





<!DOCTYPE html>
<html lang="en">

<head>




    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #dfe3ee;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgb(245, 236, 236);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        /* Style the top navigation bar */
        .navbar {
            overflow: hidden;
            background-color: rgb(14, 5, 5);
        }

        /* Style the navigation bar links */
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        /* Right-aligned link */
        .navbar a.right {
            float: right;
        }

        /* Change color on hover */
        .navbar a:hover {
            background-color: rgb(213, 209, 209);
            color: rgb(237, 227, 227);
        }

        /* Column container */
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        /* Create two unequal columns that sits next to each other */
        /* Sidebar/left column */
        .side {
            flex: 30%;
            background-color: #f1f1f1;
            padding: 20px;
        }

        /* Main column */
        .main {
            flex: 70%;
            background-color: white;
            padding: 20px;
        }



        /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 700px) {
            .row {
                flex-direction: column;
            }
        }

        /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
        @media screen and (max-width: 400px) {
            .navbar a {
                float: none;
                width: 100%;
            }
        }

        img {
            width: 600px;
            height: 400px;
            margin: 10px;
            transition: all 0.4s;
        }

        img:hover {
            transform: scale(1.1);
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        img {
            background: url(https://dypatiluniversityonline.com/img/corporate.jpg) no-repeat;
            background-size: cover
        }

        .inner-header-block {
            padding: 20px 0;
            padding-top: 20px;
            padding-right: 0px;
            padding-bottom: 20px;
            padding-left: 0px;
        }

        .tab-content>.active {
            display: inline-flexbox;
        }

        .tab-content>.tab-pane {
            display: none;
        }

        .fade.show {
            opacity: 1;
        }

        * {
            box-sizing: content-box;
        }

        * {
            outline: 0 !important;
            outline-color: bisque;
            outline-style: initial;
            outline-width: 0px;
        }

        .soft-half--top {
            padding-top: 11px !important;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        * {
            box-sizing: border-box;
        }

        * {
            outline: 0 !important;
        }

        p {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
        }
    </style>
</head>

<body>
    <!-- <div class="col-lg-10 col-md-10 col-sm-10"> -->

    <section class="inner-header-block dy-patil" style="background:url( https://dypatiluniversityonline.com/img/corporate.jpg) no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-7 align-items-center">
                    <h1 class="font-700">Grievance &amp; Complaints</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="col-lg-12 col-md-12 col-sm-12">


        <div class="navbar">
            <a href="index.php">HOME</a>
            <?php if (!isset($_SESSION['uid'])) {
            ?>
                <a href="login.php">FILE A COMPLAINT</a>
            <?php } else { ?>
                <a href="complaint.php">FILE A COMPLAINT</a>
            <?php } ?>

            <a href="#">PROCEDURE</a>
            <a href="contact.html">CONTACT US</a>
            <?php if (!isset($_SESSION['uid'])) {
            ?>
                <a href="login.php">MY COMPLAINTS</a>
                <a href="login.php">STATUS</a>


            <?php } else { ?>
                <a href="mycomplaints.php">MY COMPLAINTS</a>


                <!-- <a href="" class="dropdown">STATUS <sub> -->
                <?php if ($rcount != "0") { ?>
                    <a href="#">PENDING</a>
                <?php } else { ?>
                    <a href="#">COMPLETED</a>
                <?php } ?>
                <!-- </sub></a> -->


            <?php } ?>


            <?php
            if (!isset($_SESSION['uid'])) {
            ?>
                <!-- <li class="scroll-to-section"> -->
                <a href="login.php" class="right">SIGN-IN</a>
            <?php } else { ?>
                <a href="logout.php" class="right">SIGN-OUT</a>
            <?php } ?>

            <a href="admin_login.php" class="right">ADMIN</a>

            <!-- <?php if (!isset($_SESSION['uid'])) {
                    ?>
            <a href="login.php" class="right">MY COMPLAINTS</a>
        <?php } else { ?>
            <a href="mycomplaints.php" class="right">MY COMPLAINTS</a>
        <?php } ?> -->

            <!-- <a href="login.php" class="right">SIGN-IN</a> -->
            <div class="dropdown">
                <a href="https://gokulakrishnan.s3.amazonaws.com/about.html">ABOUT US</a>
            </div>
        </div>
    </div>
</body>