<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asd</title>
</head>

<body>

    <?php
    $myfile = fopen("tes.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("tes.txt"));
    fclose($myfile);
    ?>

</body>

</html>