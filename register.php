<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="register.css">
<head>
    <title>Document</title>
</head>
<body>
<form action="funcRegis.php" method="POST">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Silahkan isi untuk Daftar</p>

        <label for="username"><b>username</b></label>
        <input type="text" placeholder="Enter username" id="username" name="username" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter password" id="pass" name="pass" required>

        <div class="clearfix">
            <button type="submit">regis</button>
            <button type="reset">reset</button>
        </div>
    </div>
</form>
</body>
</html>
