<?php
require_once "../_config/config.php";
?>

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
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../admin/index.php">Administrators</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Me <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="#">Hi <strong><?= $_SESSION['user']; ?></strong></a></li>
                            <li><a href="#">Change Profile</a></li>
                            <li>
                                <a href="#">
                                    <span class="glyphicon glyphicon-shopping-cart">

                                        MyCartShop
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="transaction/invoice.php">

                                    <span class="glyphicon glyphicon-envelope">
                                        MyInvoice</span></a>
                            </li>
                            <li>
                                <a href="../authentication/_logout.php">
                                    <span class="glyphicon glyphicon-log-out"> Logout</span>
                                </a>
                            </li>
                            <li><a href="#">
                                    <span class="glyphicon glyphicon-cog"> Setting</span>
                                </a></li>
                        </ul>
                    </li>
                    <li>
                        <?php include_once('_retrive_show_user_data.php') ?>

                        <?php
                        while ($row = mysqli_fetch_array($hasil)) {
                            ?>
                            <img src="<?php echo "$row[profile_img]" ?>" alt="" style="border-radius: 50%; width: 45px; height: 45px">
                        <?php
                        }
                        ?>

                    </li>
                    <li style="color: white">
                        &nbsp;
                        <span class="glyphicon glyphicon-search"></span>
                        &nbsp;
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php ?>