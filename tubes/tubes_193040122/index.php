<?php

    // menghubungkan dengan file php lainya
    require 'php/functions.php';

    //melakukan query
    $makanan = query("SELECT * FROM makanan");

    // Tugas no 2
    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $makanan = query("SELECT * FROM makanan WHERE
                    img LIKE '%$keyword%' OR
                    nama LIKE '%$keyword%' OR
                    asal LIKE '%$keyword%' OR
                    harga_pasaran LIKE '%$keyword%' OR
                    bahan_dasar LIKE '%$keyword%'  ");
    } else {
        $makanan = query("SELECT * FROM makanan");
    }


   
?>

<html>
<head>

     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Tugas Besar</title>
    <style>
        img{ width:145px; padding:25px; }
        td{ text-align : center; }
    </style>

</head>

<body style="background-color: pink;">

     <div class="slider">
        <ul class="slides">
        
          <li>
            <img src="assets/img/slide1.jpg">
            <div class="caption center-align">
              <h3>A little bit of Taste</h3>
              <h5 class="light grey-text text-lighten-3">((Food))</h5>
            </div>
          </li>
          <li>
            <img src="assets/img/slide2.jpg">
            <div class="caption right-align">
              <h3> Who's gonna life without food?</h3>
              <h5 class="light grey-text text-lighten-3">Because Life is easy, don't fotget eating.</h5>
            </div>
          </li>
        </ul>
      </div>
      

 <nav>
    <div class="nav-wrapper teal lighten-2">
      <a class="brand-logo">Searching: </a>
      <ul class="right hide-on-med-and-down">
        <li> <a class="waves-effect waves-light btn-small pink lighten-3" href="php/login.php">
       Login
    </a></li>
      </ul>
    </div>
  </nav>
    
     <nav>
    <div class="nav-wrapper teal lighten-2">
     <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button class="waves-effect waves-light btn-small" type="submit" name="cari">Cari</button>
    </form>
    </div>
  </nav>
   




    <?php if(empty($makanan)) : ?>
    <div>
            <h3 style="color: red;">Data Tidak Ditemukan</h3>
    </div>
    <?php else : ?>
        <div class="container">
            <?php foreach ($makanan as $mkn) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $mkn['id'] ?>">
                        <?= $mkn["nama"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
        <?php endif;?>



    <footer class="page-footer teal lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Makanan</h5>Berbagai macam makanan yang lezat....</p>
              </div>
              <div class="col l4 offset-l2 s12">
                
                
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            by amisha
           
            </div>
          </div>
        </footer>


          <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
        });
      </script>

</body>
</html>



