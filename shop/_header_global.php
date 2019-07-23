<?php ?>
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

                <!-- Modal of spec -->
                <?php include_once('modal_user_log_in.php'); ?>
                <!-- end of modal of spec -->

                <!-- Modal of spec -->
                <?php include_once('modal-register-user-admin.php'); ?>
                <!-- end of modal of spec -->

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-log-in">SIGN</button>
                        |

                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-register">REGISTER</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<?php ?>