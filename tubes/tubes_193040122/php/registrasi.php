<?php

require 'functions.php';

if(isset($_POST["register"])) {

    if(registrasi($_POST) > 0 ){
    echo "
        <script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
        </script>
    ";
    } else {
        echo "
            <script>
                alert('Registrasi Gagal');
            </script>
        ";
    }
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

    <title>Registrasi</title>
</head>
<body style="background-color: pink;">

     <nav>
    <div class="nav-wrapper">
      <a  class="brand-logo center">Registrasi</a>
    </div>
  </nav>

    <form action="" method="post">
    <table>
        <tr>
            <td><label for="username">username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <button class="waves-effect waves-light btn" type="submit" name="register">REGISTER</button>
    <a class="waves-effect waves-light btn" href="login.php" style="text-decoration : none; color : white;">Kembali</a>
</form>
</body>
</html>
