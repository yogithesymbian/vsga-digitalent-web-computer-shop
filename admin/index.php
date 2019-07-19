<!--
    load header for sidebar
 -->
<?php include_once('_admin_header.php'); ?>

<sticky-custome>
    <a href="#menu-toggle" class="btn" id="menu-toggle"> <span class="glyphicon glyphicon-align-justify" id="navbar-home-digitalent"></span> </a>
</sticky-custome>

<div class="container">
    <!-- Modal of add barang -->
    <?php include_once('modal-add-barang.php'); ?>
    <!-- Modal of add barang -->

    <!-- Modal of image -->
    <?php include_once('modal-image-view-barang.php'); ?>
    <!-- end of modal of image -->
    <br>
    <br>
    <?php include_once('read-barang.php'); ?>

    <article class="version">

        <!-- cardview-table -->
        <?php include_once('card-view-barang.php'); ?>
        <br>

        <!-- Table  -> content -->
        <?php include_once('card-view-barang-content.php'); ?>
        <!-- end of Table -->

        <!-- for container the content -->
        <div class="container">
        </div>
    </article>


</div>
<div class="break-point">
    <!-- for break point -->
</div>
</div>

</div>

<!-- php function -->
<?php include_once('_function_index.php'); ?>
<!-- end of function -->

<?php include_once('_admin_footer.php'); ?>