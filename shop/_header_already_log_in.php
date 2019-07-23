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
                <a class="navbar-brand text-digitalent" href="#">Digitalent</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Me <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li><a href="#">Hi <strong><?= $_SESSION['user']; ?></strong></a></li>
                            <li><a href="#">Change Profile</a></li>
                            <li>
                                <a href="../authentication/_logout.php">
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
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php ?>