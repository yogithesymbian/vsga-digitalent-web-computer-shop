<?php
?>

<table class="table table-responsive">
    <thead>
        <th>CODE BARANG</th>
        <th>NAMA BARANG</th>
        <th>QUANTITY</th>
        <th>SPEC</th>
        <th>IMAGE</th>
        <th>ACTION</th>


    </thead>
    <tbody>
        <!-- content of database -->
        <?php include_once('_function_index_read.php') ?>
        <!-- end of content database-->
    </tbody>
</table>
<?php ?>