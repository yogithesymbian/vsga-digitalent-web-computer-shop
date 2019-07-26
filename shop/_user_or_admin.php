<?php
$em = $_SESSION['user'];
$qr = "SELECT * FROM role_user WHERE tb_register_email='$em'";
$hl = mysqli_query($connect, $qr);
$rowx = mysqli_fetch_array($hl);
