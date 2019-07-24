<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Contact US - Digitalent</title>
    <?php include_once('../shop/link-rel.php'); ?>

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


                <!-- article start of content -->
                <article class="version">

                    <!-- cardview-table -->
                    <?php include_once('content-contact-us.php'); ?>
                    <br>


                    <!-- for container the content -->
                    <div class="container">
                    </div>
                </article>
                <!-- end of article start of content -->
            </div>

            <?php include_once('../shop/_home_footer.php'); ?>
        </div>

    </div>
    <!-- end of container-fluid -->
    <!-- jquery -->
    <script src="../_assets/js/jquery.js"></script>
    <script src="../_assets/js/bootstrap.min.js"></script>

</body>

</html>