<?php
include "koneksi.php";

if (isset($_SESSION['login'])) {
} else {
    header("location:login.php");
}
