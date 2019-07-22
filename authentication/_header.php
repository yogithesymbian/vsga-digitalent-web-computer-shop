<?php
require_once "../_config/config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Larahomesick">
    <meta name="author" content="Yogi Arif Widodo">
    <title>Home - Toko Komputer</title>
    <!-- Custom CSS -->

    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../_assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="../_assets/css/my-custome.css" rel="stylesheet">
    <link href="../_assets/css/color-style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">

</head>

<body id="home-auth" class="image-replace-shadow">

    <!-- /#sidebar-wrapper -->

    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        <span class="my-sidebar-digitalent"><strong>Digitalent</strong></span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard') ?>"> <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        About Us
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard') ?>"> <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard') ?>"> <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Terms of Service
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard') ?>"> <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Privacy Policy
                    </a>
                </li>
            </ul>

        </div>
        <script src="../_assets/js/jquery.js"></script>
        <script src="../_assets/js/bootstrap.min.js"></script>
        <div id="page-content-wrapper">
            <div class="container-fluid ">