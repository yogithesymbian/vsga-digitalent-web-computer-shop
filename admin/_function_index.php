<!-- initialize for index func -->
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$code_brg = $_POST['codeBrg'];
$nama_brg = $_POST['nameBrg'];
$quantity = $_POST['quantity'];
$image1 = $_POST['datafile1'];
$pathimage = $_POST['datafiledir'];


extract($_POST);
$error = array();
$extension = array("jpeg", "jpg", "png", "gif");

$folder = "../log/image-"; // init folder name

$oldmask = umask(0); // for 0022

$create_path = mkdir($folder . $code_brg, 0777); // give folder id

umask($oldmask); // octal calculation

$init_target = $folder . $code_brg; // re init for post-delay

$target_dir = $init_target; // target_dir

?>
<!-- end of initialize for index func -->


<!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
<?php
if (isset($code_brg)) {

    $query = "INSERT INTO tb_barang VALUES (uuid(),'$code_brg', '$nama_brg','$quantity','$target_dir',NULL,NULL,NULL)";
    $sql = mysqli_query($connect, $query);
    // Jika data disimpan value sql = 1
    // Jika data tidak tersimpan value sql = 0
    if ($sql == 1) {
        ?>
        <script language='Javascript'>
            ;
            (window.alert('You have add 1 record barang'))
        </script>";

        <script language='javascript'>
            location.href = ''
        </script>";
    <?php
    } else {
        ?>
        "<script language='Javascript'>
            ;
            (window.alert('Fail added record barang'))
        </script>";

        "<script language='javascript'>
            location.href = '#faild-added-record'
        </script>";
    <?php
    }
} else {
    ?>
    <!-- need log in for admin page , later's will use -->
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="alert alert-danger alert-dismissable" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">
                    &times;
                </a>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <strong> Login required</strong> you need login to add barang
            </div>
        </div>
    </div>

    <!-- PHP SCRIPT HANDLE IMAGE UPLOAD -->
<?php
}


foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {

    $file_name = $_FILES["files"]["name"][$key];
    $file_tmp = $_FILES["files"]["tmp_name"][$key];
    $ext = pathinfo($file_name, PATHINFO_EXTENSION);

    if (in_array($ext, $extension)) {
        if (!file_exists($target_dir . $txtGalleryName . "/" . $file_name)) {
            move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], $target_dir . $txtGalleryName . "/" . $file_name);
        } else {
            $filename = basename($file_name, $ext);
            $newFileName = $filename . time() . "." . $ext;
            move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], $target_dir . $txtGalleryName . "/" . $newFileName);
        }
    } else {
        array_push($error, "$file_name, ");
    }
}
?>

<!-- END OF PHP SCRIPT HANDLE IMAGE UPLOAD -->
<?php

?>
<!-- PHP SCRIPT HANDLE ADD NEW RECORD -->