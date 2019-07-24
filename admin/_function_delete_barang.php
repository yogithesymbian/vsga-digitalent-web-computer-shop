<?php
require_once('../_config/config.php')
?>
<?php
$id = $_GET['uuid'];

$query_show = "SELECT * FROM tb_barang WHERE id='$id'";
$hasil = mysqli_query($connect, $query_show);
$record = mysqli_num_rows($hasil);

if ($record < 1) {

    $query = "DELETE FROM tb_barang WHERE id='$id'";
    mysqli_query($connect, $query);

    ?>
    <script language='Javascript'>
        ;
        (window.alert('Data sudah Terhapus'))
    </script>";

    <script language='javascript'>
        location.href = 'index.php'
    </script>";
<?php
} else {
    ?>
    ?>
    "<script language='Javascript'>
        ;
        (window.alert('cant delete'))
    </script>";

    "<script language='javascript'>
        location.href = '#'
    </script>";
<?php
}
?>