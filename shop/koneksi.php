<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "shop");

//Form login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");
    $result = mysqli_num_rows($query);

    if ($result > 0) {
        $_SESSION['login'] = 'true';
        header("location:index.php");
    } else {
        header("location:login.php");
    }
}
