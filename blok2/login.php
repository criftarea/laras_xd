<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
            <div class="menu">
            <ul id="navigasi">
            <header style="text-align: center;">
            <BR><BR>
    <h1>SMK TELKOM BANJARBARU</h1>
    <form method="post" action="login_proses.php">
    <div class="kotak_login">
        <table>
                <label>Username</label><br>
                <input type="text" name="username" class="form_login" placeholder="Username">
                <br>
                <label>Password</label><br>
                <input type="password" name="password" class="form_login" placeholder="Password">
                <br>
                <input type="submit" class="tombol_login" value="LOGIN">
        </table>
    </form>
    <p>If you don't have an account please click <a href="form_register.php">REGISTER</a></p>
</body>
</html>