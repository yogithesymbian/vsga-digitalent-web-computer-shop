<!--
    load header for sidebar
 -->
<?php include_once('_header.php'); ?>


<div class="container home-auth">

    <div class="break-point">

    </div>


    <!-- navbar for home logIn -->
    <div class="row">
        <div class="col-md-8">
            <nav class="navbar navbar-inverse" id="navbar-home-digitalent-pad">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <!-- toggle hide sidebar -->
                        <a href="#menu-toggle" class="btn" id="menu-toggle"> <span class="glyphicon glyphicon-align-justify" id="navbar-home-digitalent"></span> </a>
                    </div>
                    <!-- <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Log</a>
                        </li>
                    </ul> -->
                </div>
            </nav>
        </div>
    </div>

    <div class="row" style="background-color: #4D000000">

        <h1 class="text-center header-digitalent" id="text-header-h1" style="margin-bottom: 40px; font-size: 40px"> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGN NOW</strong> </h1>

        <div class="col-md-7 col-md-offset-4">

            <!-- start code here -->
            <!-- pada page ini user melakukan check email -->
            <!-- jika click next maka akan masuk ke ( _login_after_next.php ) -->
            <!-- text don't have an account menuju (_register_check_email.php) -->

            <form action="_login_after_next.php" method="post" class="#">

                <div class="form-group col-md-8">
                    <span class="input-icon" style="margin-left: 15px; color: white"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="email" name="email" id="email" class="form-control" placeholder="yourmail@mail.com" style="background-color: #00000000; border: 2px solid #FFFFFF" required autofocus>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-8">

                        <input type="submit" value="LOGIN" class="btn btn-digitalent">

                    </div>
                </div>
            </form>

            <!--end of start code here -->
        </div>

    </div>
    <div class="break-point">
        <!-- for break point -->
    </div>


    <div class="row">
        <div class="col-md-7 col-xs-offset-5">

            <a href="_register_check_email.php" class="text-center text-link-digitalent"> <strong>Don't have an account?</strong> </a>

        </div>
    </div>

    <div style="margin-bottom: 32px">
        <!-- for break point -->
    </div>
</div>

</div>

<?php include_once('_footer.php'); ?>