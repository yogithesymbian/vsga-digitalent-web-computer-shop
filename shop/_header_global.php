<?php
if (isset($_SESSION['user'])) {
    echo "<script> window.location='home.php'; </script>";
}
?>
<header style="margin-top: -60px">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                </button>
                <button type="button" class="navbar-brand" style="background: transparent; background-color: transparent; border: 0px solid transparent;"> <span class="glyphicon glyphicon-search" style="color: #5ad67d; "></span> </button>
                <a class="navbar-brand text-digitalent" href="../index.html">Digitalent</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li>

                        <a href="../index.html"> <span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li><a href="../page/about-us.php"> <span class="glyphicon glyphicon-question-sign"></span> About us</a></li>
                    <li><a href="../page/catalogue.php"><span class="glyphicon glyphicon-globe"></span> Catalogue</a></li>
                    <li><a href="../page/contact-us.php"><span class="glyphicon glyphicon-earphone"></span> Contact us</a></li>
                </ul>

                <!-- Modal of spec -->
                <?php include_once('modal_user_log_in.php'); ?>
                <!-- end of modal of spec -->

                <!-- Modal of spec -->
                <?php include_once('modal-register-user-admin.php'); ?>
                <!-- end of modal of spec -->

                <ul class="nav navbar-nav navbar-right" style="margin-right: -50px">
                    <li style="margin-top: 6px;">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-log-in"> <span style="color: #5ad67d;">SIGN</span> </button>
                        &nbsp;
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-register"><span style="color: #d4d65a;">REGISTER</span></button>
                        &nbsp;&nbsp;
                    </li>
                    <!-- <li style="margin-top: 5px">
                        &nbsp;
                        <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-search" style="color: #5ad67d;"></span> </button>
                        &nbsp;
                    </li> -->

                </ul>
            </div>
        </div>
    </nav>
</header>
<?php ?>