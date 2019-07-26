<?php
require_once "../_config/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>About US - Digitalent</title>
    <?php include_once('../shop/link-rel.php'); ?>
    <?php include_once('link-rel-catalogue.php'); ?>

</head>

<body id="home-auth" class="image-replace-shadow">
    <div id="page-content-wrapper">
        <div class="container-fluid ">

            <div class="digitalent-chat">
                <span class="glyphicon glyphicon-envelope"></span> Live Chat
            </div>

            <!-- header -->
            <?php include_once('../shop/_header_global.php') ?>
            <img src="../_assets/image/ideas.jpg" alt="" class="image-content-behind">

            <div class="container" style="margin-top: -450px">


                <!-- cardview-table -->
                <?php include_once('content-catalogue.php'); ?>
                <?php include_once('_function_read_data.php'); ?>
                <br>



                <!-- end of article start of content -->
            </div>

            <p></p>
            <br>
            <?php include_once('../shop/_home_footer.php'); ?>
        </div>

    </div>
    <!--  -->
    <?php include_once('../shop/_function_modal_log_in.php') ?>
    <!--  -->
    <!-- end of container-fluid -->
    <!-- jquery -->
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap.min.js"></script>

</body>

</html>