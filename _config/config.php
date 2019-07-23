<?php

// set default timezone
date_default_timezone_set('Asia/Jakarta');
session_start();

// connection
$HOST = 'localhost';
$USER = 'root';
$PASSWORD = '';
$DATABASE = 'dbspcshop';

$connect = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);

// $connect->close();

// not use , at this time just cause reviewer
// function base_url($url = null)
// {
//     $base_url = "http://y.id/digitalent";
//     if ($url != null) {
//         return $base_url . "/" . $url;
//     } else {
//         return $base_url;
//     }
// }
