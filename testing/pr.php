<?php

require_once "_config/config.php";

$query = "SELECT UUID()";

$query1 = mysqli_query($connect, $query);

$query2 = mysqli_fetch_row($query1);

echo $query2;
