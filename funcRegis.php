<?php
require('koneksi.php');

$username = $_POST['username'];
$pass = md5($_POST['pass']);

$query = mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$pass')");

$result = mysqli_affected_rows($conn);

if ($result > 0) {
    header('location:login.php');
    die;
} else {
    header('location:regis.php');
    die;
}
