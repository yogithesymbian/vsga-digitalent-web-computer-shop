<?php
extract($_POST);
$error = array();
$extension = array("jpeg", "jpg", "png", "gif");

$index = "ABCDE";

$oldmask = umask(0);

$target_dir = mkdir("../log/image-test-$index", 0777);

umask($oldmask);

$already = "../log/image-test-$index";

// $create_path = $target_dir;
$create_path = $already;

$create_path1 = "../log/jadi";

foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {

    $file_name = $_FILES["files"]["name"][$key]; //just for destination

    $file_tmp = $_FILES["files"]["tmp_name"][$key]; //temporary file in log

    $ext = pathinfo($file_name, PATHINFO_EXTENSION); //extensions

    if (in_array($ext, $extension)) {
        if (!file_exists($create_path . $txtGalleryName . "/" . $file_name)) {
            move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], $create_path . $txtGalleryName . "/" . $file_name);
        } else {
            $filename = basename($file_name, $ext);
            $newFileName = "1" . time() . "." . $ext;
            move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], $create_path1 . $txtGalleryName . "/" . $newFileName);
        }
    } else {
        array_push($error, "$file_name, ");
    }
}

// < ? php
// extract ($_POST);
// $error = array();
// $extension = array("jpeg", "jpg", "png", "gif");

// $index = "ABCDE";

// $oldmask = umask(0);

// $target_dir = mkdir("../log/image-test-$index", 0777);

// umask($oldmask);

// $already = "../log/image-test-$index";

// // $create_path = $target_dir;
// $create_path = $already;

// foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {

//     $file_name = $_FILES["files"]["name"][$key];
//     $file_tmp = $_FILES["files"]["tmp_name"][$key];
//     $ext = pathinfo($file_name, PATHINFO_EXTENSION);

//     if (in_array($ext, $extension)) {
//         if (!file_exists($create_path . $txtGalleryName . "/" . $file_name)) {
//             move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], $create_path . $txtGalleryName . "/" . $file_name);
//         } else {
//             $filename = basename($file_name, $ext);
//             $newFileName = $filename . time() . "." . $ext;
//             move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], $create_path . $txtGalleryName . "/" . $newFileName);
//         }
//     } else {
//         array_push($error, "$file_name, ");
//     }
// }
