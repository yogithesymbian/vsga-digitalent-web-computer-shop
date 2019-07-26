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

        <h1 class="text-center header-digitalent" id="text-header-h1" style=" font-size: 40px"> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGN UP</strong> </h1>

        <div class="col-md-7 col-md-offset-4">

            <!-- start code here -->
            <!-- pada page ini user melakukan check email -->
            <!-- jika click next maka akan masuk ke ( _login_after_next.php ) -->
            <!-- text don't have an account menuju (_register_check_email.php) -->

            <form action="#" method="post" class="#" enctype="multipart/form-data">


                <div class="form-group col-md-8">
                    <span class="input-icon" style="margin-left: 15px; color: white"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" style="background-color: #00000000; border: 2px solid #FFFFFF" required autofocus>
                </div>

                <?php
                $email_from = $_POST['email'];
                ?>

                <div class="form-group col-md-8">
                    <span class="input-icon" style="margin-left: 15px; color: white"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" name="email" id="email" class="form-control" placeholder="yourmail@mail.com" value="<?php echo $email_from ?>" style="background-color: #00000000; border: 2px solid #FFFFFF" required>
                </div>


                <div class="form-group col-md-8">
                    <span class="input-icon" style="margin-left: 15px; color: white"><i class="glyphicon glyphicon-camera"></i></span>
                    <input type="file" class="input-sm" name="fileToUpload" id="fileToUpload" style="background-color: #00000000; border: 2px solid #FFFFFF" multiple>
                </div>


                <div class="form-group col-md-8">
                    <span class="input-icon" style="margin-left: 15px; color: white"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="password" id="password" class="form-control" style="background-color: #00000000; border: 2px solid #FFFFFF" required>
                </div>


                <div class="form-group col-md-8">
                    <span class="input-icon" style="margin-left: 15px; color: white"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" name="password_reenter" id="password_reenter" class="form-control" placeholder="Re-enter password" style="background-color: #00000000; border: 2px solid #FFFFFF" required>
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

            <a href="index.php" class="text-center text-link-digitalent"> <strong>Already have an account?</strong> </a>

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

//===================================== profile image upload=======================
$folder = "../_assets/image/auth/profile-"; // init folder name

$oldmask = umask(0); // for 0022

$create_path = mkdir($folder . $username, 0777); // give folder id

umask($oldmask); // octal calculation

$init_target = $folder . $username; // re init for post-delay

$target_dir_init = $init_target; // target_dir

// $file_name = $rand . $time . $_FILES["fileToUpload"]["name"];
$file_name = "profile.jpg";

$target_dir = $target_dir_init;

// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . "/" . $file_name;
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
// rename(""."/tmp/tmp_file.txt", "/home/user/login/docs/my_file.txt");
//===================================== end of image upload=======================

if (isset($username)) {

    $query = "INSERT INTO tb_register VALUES (uuid(),'$username', '$email','$sha1_pass','$sha1_pass_reenter',NULL,NULL,NULL,NULL,NULL,'$target_dir',NULL,NULL)";
    $sql = mysqli_query($connect, $query);
    // Jika data disimpan value sql = 1
    // Jika data tidak tersimpan value sql = 0
    if ($sql == 1) {
        ?>
        <script language='Javascript'>
            ;
            (window.alert('You have register, sign now'))
        </script>";

        <script language='javascript'>
            location.href = '../shop/home.php'
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