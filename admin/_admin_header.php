<?php
require_once "../_config/config.php";

if (!isset($_SESSION['user'])) {
    echo "<script> window.location='../authentication/index.php'; </script>";
}
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

    <?php include_once('link-rel-admin.php'); ?>

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
                    <a href="#">
                        <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Dashboard
                    </a>
                </li>
                <li>
                    <strong style="color: ivory">abcd</strong>
                </li>
                <li>
                    <a href="../shop/index.php">
                        <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Product
                    </a>
                </li>
                <li>
                    <a href="../shop/index.php">
                        <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Pemesanan
                    </a>
                </li>
                <li>
                    <a href="../shop/index.php">
                        <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Client
                    </a>
                </li>
                <li>
                    <a href="../shop/index.php">
                        <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Contact
                    </a>
                </li>
                <li>
                    <a href="../shop/index.php">
                        <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Admin
                    </a>
                </li>
                <li>
                    <a href="../shop/index.php">
                        <span class="glyphicon glyphicon-dashboard" id="rotate-the-icon"></span>
                        Web view
                    </a>
                </li>
                <li>
                    <a href="../authentication/_logout.php">
                        <span class="glyphicon glyphicon-log-out" id="rotate-the-icon"></span>
                        Logout
                    </a>
                </li>

            </ul>


        </div>
        <script src="../_assets/js/jquery.js"></script>
        <script src="../_assets/js/bootstrap.min.js"></script>
        <div id="page-content-wrapper">
            <div class="container-fluid ">