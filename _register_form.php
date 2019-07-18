<!--
    load header for sidebar
 -->
<?php include_once('_header.php'); ?>


<div class="container home-auth">

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

        <h1 class="text-center header-digitalent" id="text-header-h1" style=" font-size: 40px"> <strong>SIGN UP</strong> </h1>

        <div class="col-md-7 col-md-offset-4">

            <!-- start code here -->
            <!-- pada page ini user melakukan check email -->
            <!-- jika click next maka akan masuk ke ( _login_after_next.php ) -->
            <!-- text don't have an account menuju (_register_check_email.php) -->

            <form action="#" method="post" class="#">


                <div class="form-group col-md-8">
                    <label for="username" class="#" id="text-primary-light-small">Username</label>
                    <input type="text" name="username" id="username" class="form-control" style="background-color: #00000000; border: 2px solid #FFFFFF" required autofocus>
                </div>

                <?php
                $email_from = $_POST['email'];
                ?>

                <div class="form-group col-md-8">
                    <label for="email" class="#" id="text-primary-light-small">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $email_from ?>" tyle="background-color: #00000000; border: 2px solid #FFFFFF" required>
                </div>


                <div class="form-group col-md-8">
                    <label for="password" class="#" id="text-primary-light-small">Password</label>
                    <input type="password" name="password" id="password" class="form-control" style="background-color: #00000000; border: 2px solid #FFFFFF" required>
                </div>


                <div class="form-group col-md-8">
                    <label for="password_reenter" class="#" id="text-primary-light-small">Reenter password for verification</label>
                    <input type="password" name="password_reenter" id="password_reenter" class="form-control" style="background-color: #00000000; border: 2px solid #FFFFFF" required>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-5 col-sm-8">

                        <input type="submit" value="REGISTER" class="btn btn-digitalent">

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

            <a href="http://y.id/digitalent/index.php" class="text-center text-link-digitalent"> <strong>Already have an account?</strong> </a>

        </div>
    </div>
    <div class="break-point">
        <!-- for break point -->
    </div>



</div>

</div>

<!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_reenter = $_POST['password_reenter'];

//encrypt
$sha1_pass = SHA1($password);
$sha1_pass_reenter = SHA1($password_reenter);

if (isset($username)) {
    // $_uuid = "SELECT UUID()";
    // $uuid = mysqli_query($connect, $_uuid);

    // print($uuid);

    $query = "INSERT INTO tb_register VALUES (uuid(),'$username', '$email','$sha1_pass','$sha1_pass_reenter',NULL,NULL,NULL,NULL,NULL,NULL)";
    $sql = mysqli_query($connect, $query);
    // Jika data disimpan value sql = 1
    // Jika data tidak tersimpan value sql = 0
    if ($sql == 1) {
        ?>
        <script language='Javascript'>
            ;
            (window.alert('You have register'))
        </script>";

        <script language='javascript'>
            location.href = 'welcome.php'
        </script>";
    <?php
    } else {
        ?>
        "<script language='Javascript'>
            ;
            (window.alert('Fail register'))
        </script>";

        "<script language='javascript'>
            location.href = '_register_form.php'
        </script>";
    <?php
    }
} else {
    ?>
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="alert alert-danger alert-dismissable" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">
                    &times;
                </a>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <strong> Fail Login</strong> Password isn't match
            </div>
        </div>
    </div>
<?php
}

?>
<!-- PHP SCRIPT HANDLE ADD NEW RECORD -->

<?php include_once('_footer.php'); ?>