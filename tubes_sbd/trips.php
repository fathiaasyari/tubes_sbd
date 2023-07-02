<?php
    include_once "function.php";

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    $list_transport = transportMode();
    $list_userTrips = userTrips();

    $conn = mysqli_connect("localhost","root","","emisi");
    $user = $_SESSION['user_id'];
    $transport = $_POST['transport'];
    $distance = $_POST['distance'];
    foreach($list_transport as $j){
        if($j['mode_id'] == $transport){
            $energy_btu = $distance * $j['standard_btu'];
        }
    }
    $date = date("Y-m-d");

    //create sql command
    $sql = "insert into trips (user_id,mode_id,distance,energy_btu,date) values
    ('$user','$transport','$distance','$energy_btu','$date')";

    //get result
    $result = mysqli_query($conn,$sql);

    foreach($list_transport as $k){
        if($k['mode_id'] == $transport){
            $name_transport = $k['mode_name'];
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Evergy By eleven</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v1.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  <!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>

<body>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h5>Hasil Kalkulasi</h5>
            <h4>Analisis <em>Penggunaan Energi</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" " method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/analisis.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <h6>Kendaraan Yang Digunakan</h6>
                          <p><?= $name_transport; ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <h6>Jarak Yang Ditempuh</h6>
                          <p><?= $distance; ?> KM </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <h6>Konsumsi Energy</h6>
                          <p><?= $energy_btu; ?> BTU </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <?php 
                        if($transport == 4){
                            if($distance > 30){
                                echo "<h6>Dengan Menggunakan Sepeda Anda Sudah Sangat Menghemat Penggunaan Energi</h6>
                                <h6>Akan Tetapi Dengan Jarak Hingga 30KM Menggunakan Sepeda Agak Melelahkan Juga Mungkin Bisa Menggunakan Transportasi Umum</h6>";
                            }else if($distance <= 30){
                                echo "<h6>Dengan Menggunakan Sepeda Anda Sudah Sangat Menghemat Penggunaan Energi</h6>";
                            }
                        }else if($transport != 4){
                            if($distance < 1.5){
                                echo "<h6>Dengan Jarak Yang Cukup Dekat Di Sekitar 1 KM</h6>
                                <h6>Hasil Rekomendasi Dari Kami Menggunakan Sepeda ,Angkot, atau Bus Umum </h6>";
                            }else if($distance <= 10){
                                echo "<h6> Untuk Perjalanan Dengan Jarak Hingga 10 KM Mungkin Bisa Menggunakan Transport Umum Saja </h6>
                                <h6>Atau Jika Anda Ingin Sekalian Berolahraga Bisa Menggunakan Sepeda</h6>";
                            }else if($distance <= 50){
                              echo "<h6> Untuk Perjalanan Dengan Jarak 10 - 50 KM Mungkin Bisa Menggunakan Bus</h6>
                                <h6>Penggunaan Motor Juga Bisa Saja Dengan Jarak Seperti Ini</h6>";
                            }else if($distance <= 100){
                              echo "<h6> Untuk Perjalanan Dengan Jarak 50 KM - 100 KM Sudah Termasuk Antar Kota Lebih </h6>
                                <h6>Penggunaan Mobil Bisa atau juga Bus Antar Kota</h6>";
                            }else if($distance > 100){
                              echo "<h6> Untuk Perjalanan Dengan Jarak Lebih Dari 100 KM </h6>
                                <h6>Penggunaan Mobil Bisa Saja atau juga Bus Antar Kota</h6>";
                            }
                        }
                        ?>
                      </fieldset>
                    </div>
                    <div class="col-lg-2">
                      <fieldset>
                      <button type="button" class="btn btn-primary btn-lg"><a href="index.php" style="color: black">GO BACK</a></button>
                      </fieldset>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 DigiMedia Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>