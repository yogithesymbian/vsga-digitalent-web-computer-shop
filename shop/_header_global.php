<?php ?>
<header style="margin-top: -60px">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-digitalent" href="../index.html">Digitalent</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li>

                        <a href="../index.html"> <span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <li><a href="../page/about-us.php"> <span class="glyphicon glyphicon-question-sign"></span> About us</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-globe"></span> Catalogue</a></li>
                    <li><a href="../page/contact-us.php"><span class="glyphicon glyphicon-earphone"></span> Contact us</a></li>
                </ul>

                <!-- Modal of spec -->
                <?php include_once('modal_user_log_in.php'); ?>
                <!-- end of modal of spec -->

                <!-- Modal of spec -->
                <?php include_once('modal-register-user-admin.php'); ?>
                <!-- end of modal of spec -->

                <ul class="nav navbar-nav navbar-right">
                    <li style="margin-top: 6px">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-log-in">SIGN</button>
                        &nbsp;
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-register">REGISTER</button>
                    </li>
                    <li style="margin-top: 5px">
                        &nbsp;
                        <button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span> </button>
                        &nbsp;
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php ?>