<?php
require_once('../_config/config.php');
$query = mysqli_query($connect, "DELETE FROM tb_barang WHERE id='$_GET[uuid]'");
header('location:index.php');
