<!--
    load header for sidebar
 -->
<?php include_once('_admin_header.php'); ?>


<sticky-custome>

    <a href="#menu-toggle" class="btn" id="menu-toggle"> <span class="glyphicon glyphicon-align-justify" id="navbar-home-digitalent"></span> </a>

</sticky-custome>
<div class="container">

    <!-- Modal of add barang -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content modal-style-digitalent">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: white">INPUT BARANG - LAPTOP </h4>
                </div>

                <div class="modal-body">

                    <form action="#" method="post" enctype="multipart/form-data">

                        <div class=" input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
                            <input id="codeBrg" type="text" class="form-control form-modal-digitalent" name="x" placeholder="IMAGE">
                            <input type="file" name="files[]" multiple />
                            <input type="submit" value="Create Gallery" id="selectedButton" class="pull-right" />
                        </div>

                        <hr>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
                            <input id="codeBrg" type="text" class="form-control form-modal-digitalent" name="codeBrg" placeholder="KODE BARANG" required autofocus>
                        </div>

                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-tasks"></i></span>
                            <input id="nameBrg" type="text" class="form-control form-modal-digitalent" name="nameBrg" placeholder="NAMA BARANG" required>
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-upload"></i></span>
                            <input id="file" type="file" class="form-control form-modal-digitalent" name="datafiledir" placeholder="file" webkitdirectory multiple>
                        </div>
                        <br>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-upload"></i></span>
                            <input id="file" type="file" class="form-control form-modal-digitalent" name="datafile1" placeholder="file" multiple>
                        </div>
                        <br>


                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-upload"></i></span>
                            <input id="quantity" type="number" class="form-control form-modal-digitalent" name="quantity" placeholder="Quantity 1 PCS" multiple>
                        </div>
                        <br>


                        <input type="submit" value="+ ADD" class="btn btn-digitalent">


                    </form>

                </div>

                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
            </div>

        </div>
    </div>
    <!-- end of modal view-->

    <!-- Modal of image -->
    <!-- Modal of add barang -->
    <div id="image1" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content modal-style-digitalent">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: white">IMAGE PREVIEW- LAPTOP </h4>
                </div>

                <div class="modal-body">

                    <img src="../_assets/image/computer-1.jpg" alt="" width="300" height="300">

                </div>

                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div> -->
            </div>

        </div>
    </div>
    <!-- end of modal view-->
    <!-- end of modal of image -->

    <br>
    <br>


    <article class="version">
        <section class="page-header">
            <h1 class="page-title">Table Barang</h1>
            <div class="button-group">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">+ ADD</button>
                <div class="group-segment"></div>
                <button type="button" class="btn btn-icon"></button>
                <button type="button" class="btn btn-icon"></button>
            </div>
        </section>
        <br>

        <!-- Table -->
        <table class="table table-responsive">
            <thead>
                <th>CODE BARANG</th>
                <th>NAMA BARANG</th>
                <th>SPEC</th>
                <th>QUANTITY</th>
                <th>IMAGE</th>
                <th>ACTION</th>


            </thead>
            <tbody>
                <tr>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>
                        <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
                        <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
                        <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-icon"> <span class="glyphicon glyphicon-edit"></span> </button>
                        <button type="button" class="btn btn-icon"> <span class="glyphicon glyphicon-trash"></span> </button>
                    </td>

                </tr>
                <tr>
                    <td>later'</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>
                        <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
                        <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
                        <button type="button" class="btn btn-icon" data-toggle="modal" data-target="#image1"></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-icon"> <span class="glyphicon glyphicon-edit"></span> </button>
                        <button type="button" class="btn btn-icon"> <span class="glyphicon glyphicon-trash"></span> </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="container">


        </div>
    </article>


</div>
<div class="break-point">
    <!-- for break point -->
</div>
</div>

</div>

<!-- PHP SCRIPT HANDLE ADD NEW RECORD -->
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$code_brg = $_POST['codeBrg'];
$nama_brg = $_POST['nameBrg'];
$quantity = $_POST['quantity'];
$image1 = $_POST['datafile1'];
$pathimage = $_POST['datafiledir'];


if (isset($code_brg)) {

    $query = "INSERT INTO tb_barang VALUES (uuid(),'$code_brg', '$nama_brg','$quantity','$pathimage','$image1',NULL,NULL)";
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
            location.href = '#'
        </script>";
    <?php
    } else {
        ?>
        "<script language='Javascript'>
            ;
            (window.alert('Fail added record barang'))
        </script>";

        "<script language='javascript'>
            location.href = '#'
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
                <strong> Fail Login</strong> Password isn't match
            </div>
        </div>
    </div>

    <!-- PHP SCRIPT HANDLE IMAGE UPLOAD -->
<?php
}

extract($_POST);
$error = array();
$extension = array("jpeg", "jpg", "png", "gif");

$folder = "../log/image-"; // init folder name

$oldmask = umask(0); // for 0022

$create_path = mkdir($folder . $code_brg, 0777); // give folder id

umask($oldmask); // octal calculation

$init_target = $folder . $code_brg; // re init for post-delay

$target_dir = $init_target; // target_dir

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

<?php include_once('_admin_footer.php'); ?>