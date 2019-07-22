<?php
require_once "_config/config.php";
/**
 * jika ada session user had been login
 */
if (isset($_SESSION['user'])) {
    echo "<script> window.location='" . base_url('cart.php') . "'; </script>";
} else {
    # code...
    echo "<script> window.location='" . base_url('auth/login.php') . "'; </script>";
}
