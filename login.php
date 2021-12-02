<?php
require 'koneksi.php';

error_reporting(0);

session_start();

if (isset($_SESSION['uname'])) {
    header("Location: tampildata.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $password = md5($_POST['psw']);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uname'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header("Location: tampildata.php");
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="login.css">

<head>
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit" name="submit">Login</button>
            <a href="register.php">Register</a>
        </div>
    </form>
</body>

</html>