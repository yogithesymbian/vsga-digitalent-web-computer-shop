<?php
$email = $_SESSION['user'];
$query = "SELECT * FROM tb_register WHERE email='$email'";
$hasil = mysqli_query($connect, $query);
