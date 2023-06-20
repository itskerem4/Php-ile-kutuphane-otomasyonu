<?php
include "searchsql.php";
error_reporting(0);
?>
<html lang="tr-TR">
<head>
<meta charset="UTF-8" lang="tr-TR">
<title>Kütüphane Otomasyonu</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Tooplate">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/tooplate-style.css">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate">

          </span>
     </div>
</div>
<div class="container">
     <div class="row">
     <a href="admin" class=""><i class="fa fa-user btn btn-danger mt"> Yönetim Paneli</i></a>     
          <section id="home" class="parallax-section">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="home-wrapper">
                         <h3 class="wow fadeInUp" data-wow-delay="0.4s">Kütüphane otomasyonu</h3>
                         <h1 class="wow fadeInUp" data-wow-delay="0.6s">Hoş Geldiniz !</h1>
                        
                         <a href="#about" class="wow fadeInUp smoothScroll arrow-btn" data-wow-delay="1s"><i class="fa fa-angle-double-down"></i></a>
                    </div>
               </div>

          </section>
     </div>
</div>
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">
                    <form method="post" class="">
                    <div class="col-md-6 col-sm-6">
                    <input type="search" name="aramaadi" placeholder="Kitap Adını Gir" class="form-control">
                    </div>
                    <div class="col-md-6 col-sm-6">
                    <input type="submit" name="gonder" class="btn btn-primary" value="Ara">
                    </div>
               </form>
               <div class="col-md-4 col-sm-8 mt">
                    <?php
                    if ($gorsel->num_rows>0){
                         while ($gorselbul=$gorsel->fetch_assoc()) {
                              echo '<img src="'.$gorselbul["kitap_resim"].'" wdith="300" height="200" data-wow-delay="0.2s" alt="about image"/>';
                         }
                    }
                    else{
                          echo '<img src="images/home-bg.jpg" wdith="300" height="200" data-wow-delay="0.2s" alt="about image"/>';
                    }
                    ?>
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                         <?php
                    if ($adbulma->num_rows>0){
                         while ($yazdiradi=$adbulma->fetch_assoc()) {
                              echo "<h4>".$yazdiradi["kitap_adi"]."</h4>";
                         }
                    }
                    else{
                         echo "<h4>Kütüphane Otomasyonu</h4>";
                    }
                    ?>
                         <?php
                    if ($yazarbulma->num_rows>0) {
                         while ($yazdiryazar=$yazarbulma->fetch_assoc()) {
                              echo "<p>".$yazdiryazar["kitap_yazari"]."</p>";
                         }
                    }
                    else{
                         echo"<p>Kütüphane Otomasyonu</p>";
                    }
               ?>
                    </div>
               </div>
               <div class="col-md-8 col-sm-12 mt">
                    <div class="about-thumb">
                         <div class="wow fadeInUp section-title" data-wow-delay="0.6s">
                               <?php
                    if ($adbulma->num_rows>0){
                         while ($yazdiradi=$adbulma->fetch_assoc()) {
                              echo "<h3>".$yazdiradi["kitap_adi"]."</h3>";
                         }
                    }
                     else{
                              echo"<h3>Kütüphane Otomasyonu</h3>";
                         }
                    ?>
                              <?php
                    if ($yazarbulma->num_rows>0) {
                         while ($yazdiryazar=$yazarbulma->fetch_assoc()) {
                              echo "<h2>".$yazdiryazar["kitap_yazari"]."</h2>";
                         }
                    }
                     else{
                              echo"<h2>Kütüphane Otomasyonu</h2>";
                         }
               ?>
                         </div>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <?php
                    if ($aciklamabulma->num_rows>0) {
                         while ($yazdiraciklama=$aciklamabulma->fetch_assoc()) {
                              echo "<p>". $yazdiraciklama["kitap_aciklama"]."</p>";
                         }
                    }
                    else{
                              echo"<p>Kütüphane otomasyonuna hoş geldiniz yan tarafta üst kısımda bulunan arama çubuğundan kitabın ismini yazarak sorgulayabilirsiniz.</p>";
                         }
                    ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>


<!-- WORK SECTION -->
<section id="work" class="parallax-section">
     <div class="container">
          
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                   <tr>
                        <th>Kitap İd</th>
                        <th>Kitap Adı</th>
                        <th>Yazarı</th>
                        <th>Durum</th>
                   </tr>
              </thead>
              <tbody>
                <?php
                include "../searchsql.php";
                if ($sorgusistemsql) {
                    while ($sistemsorgu = $sorgusistemsql->fetch_assoc()) {
                        echo  
                        "<tr>".
                        "<td>".$sistemsorgu["kitap_id"]."</td>".   
                        "<td>".$sistemsorgu["kitap_adi"]."</td>".
                        "<td>".$sistemsorgu["kitap_yazari"]."</td>"
                        ."<td>".$sistemsorgu["kitap_durumu"]."</td>"
                        ."</tr>"; 
                    }
                }
                ?>
           </tbody>
           </table>
     </div>
     </div>
     </div>
</section>
<!-- CONTACT SECTION -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                         <h2>İstek Ve Öneri</h2>
                         <p>İstek ve önerilerinizi bize gönderebilirsiniz.</p>
                    </div>
               </div>
               <div class="col-md-12 col-sm-12">
                     <!-- CONTACT FORM HERE -->
                    <div class="wow fadeInUp" data-wow-delay="0.6s">
                        <form action="insertsql.php" method="post" id="contact-form">
                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" name="isim" placeholder="İsminiz">
                              </div>
                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" name="eposta" placeholder="E-Postanız">
                              </div>
                               <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control " name="konu" placeholder="Konu">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="5" name="icerik" placeholder="Mesajınız"></textarea>
                              </div>
                              <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                                   <button id="submit" type="submit" class="form-control" value="send-mail" name="istekgonder">Gönder</button>
                              </div>
                        </form>
                    </div>
               </div>

          </div>
     </div>
</section>
<!-- FOOTER SECTION -->
<footer id="footer" class="parallax-section">
    <div class="container">
        <div class="row">
               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.2s">
                    <h4>Kütüphane Otomasyonu</h4>
                    <p></p>
               </div>
               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.4s">
                    <div class="support-cus">
                         <h4>Adres</h4>
                         <p></p>
                    </div>
                    <div class="support-cus">
                         <h4>İletişim</h4>
                         <p><a href="#">kutuphane@info.com</a></p>
                         <p>Tel: +90 414 404 44 44 </p>
                    </div>
               </div>
               <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.6s">
                    <h4>Kayıt İsteği</h4>
                    <form class="newsletter" action="insertsql.php" method="post">
                         <input name="uyeliktext" type="email" class="form-control" id="email" placeholder="E-Mail Adresiniz">
                         <button name="uyeistegi" class="form-control" value="Kayıt İsteği">Kayıt İsteği</button>
                    </form>
               </div>

               <div class="col-md-12 col-sm-12 clearfix">
                    <div class="dash-line"></div>
               </div>

               <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="0.8s">
                    <p class="copyright-text">Copyright © Kütüphane Otomasyonu     
                  
               </div>

               <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="1s">
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-instagram"></a></li>
                         <li><a href="#" class="fa fa-behance"></a></li>
                         <li><a href="#" class="fa fa-github"></a></li>
                    </ul>
               </div>

          </div>
     </div>
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="admin/js/demo/datatables-demo.js"></script>
</body>
</html>