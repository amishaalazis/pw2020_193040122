<?php
session_start();
require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman login admin 
if(isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}


// cek cookie 
if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    //ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' " );
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256' , $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}


// Login
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokan USERNAME dan PASSWORD
    if(mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256' , $row['id'] , false);

            // jika remember me dicentang
            if(isset($_POST['remember'])) {
                setcookie('username' , $row['username'] , time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256' , $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>


    <title>Login</title>
</head>
<body style="background-color: pink;">

    <nav>
    <div class="nav-wrapper">
      <a  class="brand-logo center">Login</a>

    </div>
  </nav>
  <div class="container">
    <form action="" method="post">
    <?php if (isset($error)) : ?>
        <p style="color : red; font-style : italic;">Username Atau Password salah</p>
    <?php endif; ?>
    <table>
        <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>

    <p style="font-style: italic; color: red;">username : siapa</p>
    <p style="font-style: italic; color: red;">password : aja</p>
    <div class="remember">

        <input type="checkbox" name="remember">
        <label for="remember">Remember me</label>
        
    </div>
    <button class="waves-effect waves-light btn" type="submit" name="submit">Login</button>
    <a class="waves-effect waves-light btn" href="../index.php" style="text-decoration : none; color : white;">Kembali</a>

    <div class="registrasi">
        <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a> </p>
    </div>
    </div>
</form>

</body>
</html>
