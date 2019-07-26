<?php
require_once('../_config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SHOP - Digitalent</title>
    <?php include_once('link-rel.php'); ?>

</head>

<body id="home-auth" class="image-replace-shadow">
    <div id="page-content-wrapper">
        <div class="container-fluid ">

            <div class="digitalent-chat">
                <span class="glyphicon glyphicon-envelope"></span> Live Chat
            </div>


            <!-- retrive data user for check log in as administrator or user  -->
            <!--
                1 . administrator
                2 . user
             -->
            <?php include_once('_user_or_admin.php') ?>

            <?php
            if ($rowx[role_id] == 1) {
                ?>
                <!-- a user need contact to admin for administrator permission -->
                <?php include_once('_header_already_log_in.php') ?>
            <?php
            } else if ($rowx[role_id] == 2) {
                ?>
                <?php include_once('_header_already_log_in_user.php') ?>
            <?php
            } else {
                // default if a person/user register as default
                include_once('_header_already_log_in_user.php');
            }
            ?>
            <!-- end retrive data user  -->
            <?php include_once('_slider.php') ?>

            <div class="container">

                <?php include_once('modal-image-home-shop.php'); ?>
                <!-- article start of content -->
                <article class="version">

                    <!-- cardview-table -->
                    <?php include_once('card-view-shop-barang.php'); ?>
                    <br>

                    <!-- Table  -> content -->
                    <?php include_once('card-view-shop-barang-content-user.php'); ?>
                    <!-- end of Table -->

                    <!-- for container the content -->
                    <div class="container">
                    </div>
                </article>
                <!-- end of article start of content -->
            </div>

            <?php include_once('_home_footer.php'); ?>
        </div>

    </div>
    <!-- end of container-fluid -->
    <!-- jquery -->
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap.min.js"></script>

</body>

</html>