    <?php
    $code = $_GET['code'];

    $query_show = "SELECT * FROM tb_barang WHERE code='$code'";
    $hasil = mysqli_query($connect, $query_show);
    $record = mysqli_num_rows($hasil);

    if ($record < 1) {

        $query = "DELETE FROM tb_barang WHERE code='$code'";
        mysqli_query($connect, $query);

        ?>
        <script language='Javascript'>
            ;
            (window.alert('Data sudah Terhapus'))
        </script>";

        <script language='javascript'>
            location.href = 'http://y.id/digitalent/admin/'
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
            location.href = 'http://y.id/digitalent/admin/'
        </script>";
    <?php
    }
    ?>