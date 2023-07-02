<?php 
    include_once "function.php";
 
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    $list_transport = transportMode();
    $list_userTrips = userTrips();
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

    <title>Evergy By Eleven</title>

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

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Pre-header Starts -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8 col-7">
          <ul class="info">
            <li><a href="#"><i class="fa fa-envelope"></i>evergywithus@gmail.com</a></li>
            <li><a href="#"><i class="fa fa-phone"></i>99-232-309</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-sm-4 col-5">
          <ul class="social-media">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-behance"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Pre-header End -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo-v2.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#portfolio">Team</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact</a></li>
              <li class="scroll-to-section"><div class="border-first-button"><a href="akun.php">Account</a></div></li> 
              
              <!-- <li class="scroll-to-section"><div class="border-first-button"><a href="#contact">Free Quote</a></div></li>  -->
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Evergy By Eleven</h6>
                    <h2>Be More Concerned About Energy With Us</h2>
                    <p>Transportasi merupakan salah satu penyerap konsumsi energi cukup besar. Konsumsi tersebut lebih dari 94% berasal dari Bahan Bakar Minyak (BBM).
                       Oleh karena itu, saatnya kita 'membuka mata' terhadap penggunaan energi yang tidak maksimal agar jauh lebih hemat dan lebih sehat.
                    </p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#services">Kalkulasi Perjalanan</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/g1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      <!-- </div> -->
    <!-- </div> -->
  </div>

  <div id="about" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/g2.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <h6>About Us</h6>
                  <h4>Who Are We ? <em>EVERGY</em></h4>
                  <div class="line-dec"></div>
                </div>
                <p>Evergy By Eleven, membawa anda untuk lebih terbuka dan sadar terkait penggunaan energi selama berkendara.
                  Dengan adanya perhitungan yang akurat, kami dapat mengakurasi konsumsi energi yang anda gunakan sehingga anda akan lebih
                  peduli dengan lingkungan sekitar.</p>               
                 <!-- <div class="row">
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="90">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            90%<br>
                            <span>Coding</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="col-lg-4 col-sm-4">
                    <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Photoshop</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-4">
                    <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                      <div class="progress" data-percentage="80">
                        <span class="progress-left">
                          <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                          <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">
                          <div>
                            80%<br>
                            <span>Animation</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Our Services</h6>
            <h4> What <em>Evergy</em> Can Do</h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-02.png" alt=""></span>
                        Transportasi
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-03.png" alt=""></span>
                        Kalkulasi
                      </div>
                    </div>
                    <div>
                      <div class="thumb">                 
                        <span class="icon"><img src="assets/images/service-icon-01.png" alt=""></span>
                        History 
                      </div>
                    </div>
                  </div>
                </div> 
                <div class="col-lg-12">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-8 align-self-center">
                              <div class="left-text">
                                <h4>Metode Transportasi</h4>
                                  <p>Berikut ini merupakan pilihan moda transportasi yang dapat anda gunakan untuk mengkalkulasi pemakaian energi selama berkendara.
Satuan energi yang digunakan adalah BTU (British Thermal Unit).</p>
                                    <table class="table table-hover">
                                          <tr>
                                              <th>Number</th>
                                              <th>Transport</th>
                                              <th>Description</th>
                                              <th>Standar BTU</th>
                                          </tr>

                                      <?php
                                          //buat pencacah
                                          $no=1;


                                          //buat looping untuk menampilkan data sd selesai
                                          foreach($list_transport as $transport){    
                                      ?>
                                      
                                      <!--tampilkan record-->
                                      <tr>
                                          <td><?= $no ?> </td> 
                                          <td><?= $transport['mode_name'] ?> </td> 
                                          <td><?= $transport['description'] ?> </td> 
                                          <td><?= $transport['standard_btu'] ?> </td> 
                                      </tr>

                                      <?php
                                          //next record
                                          $no++;
                                      }
                                      ?>
                                    </table>
                                    
                                </div>
                              </div>
                              <div class="col-lg-4 align-self-center">
                                <div class="right-image">
                                  <img src="assets/images/next option-bro.png" alt="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-6 align-self-center">
                              <div class="left-text">
                                <h4>Rincian Perjalanan</h4>
                                  <p>Silahkan masukkan perkiraan jarak perjalanan yang ingin anda tempuh.</p>
                                  <form action="trips.php" method="post">    
                                    <div class="form-group", style="padding: 10px;">
                                        <select class="form-select" aria-label="Default select example"  name="transport">
                                            <?php             
                                            //ulangi untuk semua elemen transport
                                                foreach ($list_transport as $j){
                                                    echo "<option value=$j[mode_id]>" . $j['mode_name'] . "</option>";
                                                }            
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group", style="padding: 10px;">
                                        <input type="number" class="form-control" name="distance" placeholder="Jarak (KM)" required="required">
                                    </div>
                                    <div class="form-group", style="padding: 10px;">
                                        <button type="submit" name="submit" class="btn btn-primary btn-block">Hitung</button>
                                    </div>
                                  </form>
                                  <!-- <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="assets/images/calculator-pana.png" alt="">
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12 align-self-center">
                              <div class="left-text">
                                <h4>History Pejalanan</h4>
                                  <p>Berikut ini adalah histori kalkulasi yang telah anda cari sebelumnya.</p>
                                    <table class="table table-hover">
                                          <tr>
                                              <th>Number</th>
                                              <th>Date</th>
                                              <th>Transportasi</th>
                                              <th>Distance</th>
                                              <th>Energy</th>
                                          </tr>

                                      <?php
                                          //buat pencacah
                                          $no=1;


                                          //buat looping untuk menampilkan data sd selesai
                                          foreach($list_userTrips as $user){    
                                      ?>
                                      
                                      <!--tampilkan record-->
                                      <tr>
                                          <td><?= $no ?> </td> 
                                          <td><?= $user['date'] ?> </td> 
                                          <td><?= $user['mode_name'] ?> </td> 
                                          <td><?= $user['distance'] ?> </td> 
                                          <td><?= $user['energy_btu'] ?> </td>
                                      </tr>
                                      <?php
                                          //next record
                                          $no++;
                                        }
                                        ?>

                                    </table><br>
                                  <!-- <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p> -->
                                </div>
                              </div>
                             
                            </div>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div>
                          <div class="thumb">
                            <div class="row">
                              <div class="col-lg-6 align-self-center">
                                <div class="left-text">
                                  <h4>Enjoy &amp; Travel</h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                    dover lipsum lorem and the others.</p>
                                  <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                </div>
                              </div>
                              <div class="col-lg-6 align-self-center">
                                <div class="right-image">
                                  <img src="assets/images/services-image.jpg" alt="">
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Our Team</h6>
            <h4>See Our Proudly Team <em>Evergy</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class=" loop owl-carousel">
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/hanip.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Muhammad Hanif Abdillah</h4>
                  <span>2210239</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/thia.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Syaila Fathia Azzahra</h4>
                  <span>2206272</span>
                </div>
              </div>
              </a>  
            </div>
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="assets/images/haris.jpg" alt="">
                </div>
                <div class="down-content">
                  <h4>Haris Maulana</h4>
                  <span>2209058</span>
                </div>
              </div>
              </a>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="message.php" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec.png" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2383038339162!2d107.58818527396164!3d-6.862018667133945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6bbbafdbb23%3A0x57f0a75328ea61c5!2sGedung%20Ilmu%20Komputer%20UPI%20-%20FPMIPA%20C!5e0!3m2!1sid!2sid!4v1686040719799!5m2!1sid!2sid" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#">99-232-309</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#">evergywithus@ email.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#">Bandung, West Java</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" name="submit-msg" id="form-submit" class="main-button ">Send Message Now</button>
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