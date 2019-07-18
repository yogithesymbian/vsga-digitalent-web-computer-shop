<!--
    load header for sidebar
 -->
<?php include_once('_admin_header.php'); ?>


<sticky-custome>
    <a href="#menu-toggle" class="btn" id="menu-toggle"> <span class="glyphicon glyphicon-align-justify" id="navbar-home-digitalent"></span> </a>
</sticky-custome>
<div class="container">

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content modal-style-digitalent">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="color: white">INPUT BARANG - LAPTOP </h4>
                </div>

                <div class="modal-body">

                    <form action="#" method="post">

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

    <br>
    <br>

    <ul class="nav nav-tabs nav-justified">
        ...
    </ul>
    <ul class="nav nav-pills nav-justified">
        ...
    </ul>

    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="#">Profile</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
    </ul>

    <br>
    <br>


    <div class="panel panel-default">
        <!-- Default panel contents -->
        <!-- Trigger the modal with a button -->
        <div class="panel-heading">Table Barang <button type="button" class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal" style="margin-bottom: 20px"> <span class="glyphicon glyphicon-plus"></span> </button>
        </div>
        <div class="panel-body">
            <p>body Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum neque amet temporibus aliquam! Maxime, nostrum minus ut magnam facilis enim accusamus dicta hic adipisci sequi, eligendi unde rem porro officiis.</p>
        </div>



        <!-- Table -->
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>ID</th>
                <th>ID</th>
                <th>ID</th>
                <th>ID</th>

            </thead>
            <tbody>
                <tr>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                </tr>
                <tr>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Table Barang</div>
        <div class="panel-body">
            <p>body Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum neque amet temporibus aliquam! Maxime, nostrum minus ut magnam facilis enim accusamus dicta hic adipisci sequi, eligendi unde rem porro officiis.</p>
        </div>



        <!-- Table -->
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>ID</th>
                <th>ID</th>
                <th>ID</th>
                <th>ID</th>

            </thead>
            <tbody>
                <tr>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                </tr>
                <tr>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Table Barang</div>
        <div class="panel-body">
            <p>body Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum neque amet temporibus aliquam! Maxime, nostrum minus ut magnam facilis enim accusamus dicta hic adipisci sequi, eligendi unde rem porro officiis.</p>
        </div>



        <!-- Table -->
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>ID</th>
                <th>ID</th>
                <th>ID</th>
                <th>ID</th>

            </thead>
            <tbody>
                <tr>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                </tr>
                <tr>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                    <td>mmm</td>
                </tr>
            </tbody>
        </table>
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

<?php include_once('_admin_footer.php'); ?>