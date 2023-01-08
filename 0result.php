<?php include 'assets/inc/conn.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sonuç - Bilgisayarca Düşünme Skor</title>
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>

<body class="patternbg">
<?php include 'assets/inc/navbar.php';?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 my-4">
        <?php
          //Puanlar
          $puan_total = 0;
          $puan_pc = 0;
          $puan_s = 0;
          $puan_ad = 0;
          $puan_a = 0;
          $puan_kd = 0;
          $puan_yd = 0;
          $puan_ot = 0;

          //TR Karakterler Büyük
          function pre_up($str){
            $str = str_replace('i', 'İ', $str);
            $str = str_replace('ı', 'I', $str);
            $str = str_replace('ç', 'Ç', $str);
            return $str;
          }
          
          // Kullanıcı Bilgileri
          $AdSoyad = isset($_POST["adsoyad"]) ? strtoupper(pre_up($_POST["adsoyad"])) : "";
          $OkulNo = isset($_POST["okulno"]) ? $_POST["okulno"] : "";
          $OkulTip = isset($_POST["okultip"]) ? $_POST["okultip"] : "";
          $Sinif = isset($_POST["sinif"]) ? $_POST["sinif"] : "";
          $Cinsiyet = isset($_POST["cinsiyet"]) ? $_POST["cinsiyet"] : "";

          //echo $AdSoyad . $OkulNo . $OkulTip . $Sinif . $Cinsiyet;

          if($_SERVER['REQUEST_METHOD'] == 'POST'){
              
          //Anket
          $anket1 = isset($_POST["anket1"]) ? $_POST["anket1"] : "";
          $anket2 = isset($_POST["anket2"]) ? $_POST["anket2"] : "";
          $anket3 = isset($_POST["anket3"]) ? $_POST["anket3"] : "";
          $anket4 = isset($_POST["anket4"]) ? $_POST["anket4"] : "";
          $anket5 = isset($_POST["anket5"]) ? $_POST["anket5"] : "";
          $anket6 = isset($_POST["anket6"]) ? $_POST["anket6"] : "";
          $anket7 = isset($_POST["anket7"]) ? $_POST["anket7"] : "";
          $anket8 = isset($_POST["anket8"]) ? $_POST["anket8"] : "";
          $anket9 = isset($_POST["anket9"]) ? $_POST["anket9"] : "";
          $anket10 = isset($_POST["anket10"]) ? $_POST["anket10"] : "";
          $anket11 = isset($_POST["anket11"]) ? $_POST["anket11"] : "";
          $anket12 = isset($_POST["anket12"]) ? $_POST["anket12"] : "";
          $anket13 = isset($_POST["anket13"]) ? $_POST["anket13"] : "";
          $anket14 = isset($_POST["anket14"]) ? $_POST["anket14"] : "";
          $anket15 = isset($_POST["anket15"]) ? $_POST["anket15"] : "";
          $anket16 = isset($_POST["anket16"]) ? $_POST["anket16"] : "";
          $anket17 = isset($_POST["anket17"]) ? $_POST["anket17"] : "";
          $anket18 = isset($_POST["anket18"]) ? $_POST["anket18"] : "";
          $anket19 = isset($_POST["anket19"]) ? $_POST["anket19"] : "";
          $anket20 = isset($_POST["anket20"]) ? $_POST["anket20"] : "";
          $anket21 = isset($_POST["anket21"]) ? $_POST["anket21"] : "";
          $anket22 = isset($_POST["anket22"]) ? $_POST["anket22"] : "";  

          //Soru1
          $s1_c1 = isset($_POST["s1_c1"]) ? $_POST["s1_c1"] : "";
          $s1_c2 = isset($_POST["s1_c2"]) ? $_POST["s1_c2"] : "";
          $s1_c3 = isset($_POST["s1_c3"]) ? $_POST["s1_c3"] : "";
          $s1_c4 = isset($_POST["s1_c4"]) ? $_POST["s1_c4"] : "";
          if($s1_c1==3){$puan_ot=$puan_ot+2;};
          if($s1_c2==1){$puan_ot=$puan_ot+2;};
          if($s1_c3==6){$puan_ot=$puan_ot+2;};
          if($s1_c4==7){$puan_ot=$puan_ot+4;};

          //Soru2
          $s2_c1 = isset($_POST["s2_c1"]) ? strtoupper(pre_up($_POST["s2_c1"])) : "";
          if(!strcmp($s2_c1,"ÇİLEK MEVSİMİ GELDİ")){$puan_yd=$puan_yd+10;
          }elseif(!strcmp($s2_c1,"ÇILEK MEVSIMI GELDI")){$puan_yd=$puan_yd+10;
          }elseif(!strcmp($s2_c1,"ÇİLEK MEVSIMI GELDİ")){$puan_yd=$puan_yd+10;}
          /*
          if(trim($s2_c1)=='ÇİLEK MEVSİMİ GELDİ'){$puan_yd=$puan_yd+10;
          }elseif(trim($s2_c1)=='ÇILEK MEVSIMI GELDI'){$puan_yd=$puan_yd+10;
          }elseif(trim($s2_c1)=='ÇİLEK MEVSIMI GELDİ'){$puan_yd=$puan_yd+10;};
          */
          
          //Soru3
          $s3_c1 = isset($_POST["s3_c1"]) ? $_POST["s3_c1"] : "";
          if($s3_c1=='0,1,8,3,9,5,7,6,4,2,0'){$puan_yd=$puan_yd+10;};
          if($s3_c1=='0,2,4,6,7,5,9,3,8,1,0'){$puan_yd=$puan_yd+10;};
          if($s3_c1=='0,1,8,3,9,5,7,6,4,2'){$puan_yd=$puan_yd+8;};
          if($s3_c1=='0,2,4,6,7,5,9,3,8,1'){$puan_yd=$puan_yd+8;};

          //Soru4
          $s4_c1 = isset($_POST["s4_c1"]) ? $_POST["s4_c1"] : "";
          if($s4_c1=='3'){$puan_ad=$puan_ad+10;};
          if($s4_c1=='4'){$puan_ad=$puan_ad+2;};
          
          //Soru5
          $s5_c1 = isset($_POST["s5_c1"]) ? $_POST["s5_c1"] : "";
          if($s5_c1=='1,1,1,1,1,1,2,2,2,2,3,3,3,3,4,4,1,1'){$puan_pc=$puan_pc+10;};

          //Soru6
          $s6_c1 = isset($_POST["s6_c1"]) ? $_POST["s6_c1"] : "";
          if($s6_c1=='2'){$puan_ad=$puan_ad+10;};
          if($s6_c1=='3'){$puan_ad=$puan_ad+10;};
          
          //Soru7
          $s_a1 = isset($_POST["s_a1"]) ? $_POST["s_a1"] : "";
          $s_b1 = isset($_POST["s_b1"]) ? $_POST["s_b1"] : "";
          $s_c1 = isset($_POST["s_c1"]) ? $_POST["s_c1"] : "";
          $s_d1 = isset($_POST["s_d1"]) ? $_POST["s_d1"] : "";
          $s_e1 = isset($_POST["s_e1"]) ? $_POST["s_e1"] : "";
          $s_f1 = isset($_POST["s_f1"]) ? $_POST["s_f1"] : "";
          $s_g1 = isset($_POST["s_g1"]) ? $_POST["s_g1"] : "";
          $s_a2 = isset($_POST["s_a2"]) ? $_POST["s_a2"] : "";
          $s_b2 = isset($_POST["s_b2"]) ? $_POST["s_b2"] : "";
          $s_c2 = isset($_POST["s_c2"]) ? $_POST["s_c2"] : "";
          $s_d2 = isset($_POST["s_d2"]) ? $_POST["s_d2"] : "";
          $s_e2 = isset($_POST["s_e2"]) ? $_POST["s_e2"] : "";
          $s_f2 = isset($_POST["s_f2"]) ? $_POST["s_f2"] : "";
          $s_g2 = isset($_POST["s_g2"]) ? $_POST["s_g2"] : "";
          $s_a3 = isset($_POST["s_a3"]) ? $_POST["s_a3"] : "";
          $s_b3 = isset($_POST["s_b3"]) ? $_POST["s_b3"] : "";
          $s_c3 = isset($_POST["s_c3"]) ? $_POST["s_c3"] : "";
          $s_d3 = isset($_POST["s_d3"]) ? $_POST["s_d3"] : "";
          $s_e3 = isset($_POST["s_e3"]) ? $_POST["s_e3"] : "";
          $s_f3 = isset($_POST["s_f3"]) ? $_POST["s_f3"] : "";
          $s_g3 = isset($_POST["s_g3"]) ? $_POST["s_g3"] : "";
          $s_a4 = isset($_POST["s_a4"]) ? $_POST["s_a4"] : "";
          $s_b4 = isset($_POST["s_b4"]) ? $_POST["s_b4"] : "";
          $s_c4 = isset($_POST["s_c4"]) ? $_POST["s_c4"] : "";
          $s_d4 = isset($_POST["s_d4"]) ? $_POST["s_d4"] : "";
          $s_e4 = isset($_POST["s_e4"]) ? $_POST["s_e4"] : "";
          $s_f4 = isset($_POST["s_f4"]) ? $_POST["s_f4"] : "";
          $s_g4 = isset($_POST["s_g4"]) ? $_POST["s_g4"] : "";
          if($s_a1=='1' && $s_b1=='0' && $s_c1=='1' && $s_d1=='1' && $s_e1=='1' && $s_f1=='1' && $s_g1=='1'){$puan_kd=$puan_kd+3;};
          if($s_a2=='1' && $s_b2=='1' && $s_c2=='1' && $s_d2=='1' && $s_e2=='1' && $s_f2=='1' && $s_g2=='1'){$puan_kd=$puan_kd+3;};
          if($s_a3=='0' && $s_b3=='1' && $s_c3=='1' && $s_d3=='0' && $s_e3=='0' && $s_f3=='0' && $s_g3=='0'){$puan_kd=$puan_kd+2;};
          if($s_a4=='1' && $s_b4=='1' && $s_c4=='1' && $s_d4=='1' && $s_e4=='0' && $s_f4=='0' && $s_g4=='1'){$puan_kd=$puan_kd+2;};

          //Soru8
          $s8_c1 = isset($_POST["s8_c1"]) ? $_POST["s8_c1"] : "";
          if($s8_c1=='3'){$puan_ad=$puan_ad+10;};
          if($s8_c1=='4'){$puan_ad=$puan_ad-2;};
          
          //Soru9
          $s9_c1 = isset($_POST["s9_c1"]) ? $_POST["s9_c1"] : "";
          $s9_c2 = isset($_POST["s9_c2"]) ? $_POST["s9_c2"] : "";
          $s9_c3 = isset($_POST["s9_c3"]) ? $_POST["s9_c3"] : "";
          $s9_c4 = isset($_POST["s9_c4"]) ? $_POST["s9_c4"] : "";
          if($s9_c1=='4'){$puan_pc=$puan_pc+2;};
          if($s9_c2=='4'){$puan_pc=$puan_pc+2;};
          if($s9_c3=='2'){$puan_pc=$puan_pc+3;};
          if($s9_c4=='1'){$puan_pc=$puan_pc+3;};

          //Soru10
          $s10_c1 = isset($_POST["s10_c1"]) ? $_POST["s10_c1"] : "";
          if($s10_c1=='6'){$puan_a=$puan_a+10;};
          
          //Soru11
          $s11_c1 = isset($_POST["s11_c1"]) ? $_POST["s11_c1"] : "";
          if($s11_c1=='5,2,1,4,3'){$puan_s=$puan_s+10;};
          if($s11_c1=='5,2,1,3,4'){$puan_s=$puan_s+2;};

          //Soru12
          $s12_c1 = isset($_POST["s12_c1"]) ? $_POST["s12_c1"] : "";
          if($s12_c1=='6'){$puan_s=$puan_s+10;};

          $tarih = date("Y-m-d H:i:s");
          $puan_total=$puan_pc+$puan_s+$puan_ad+$puan_a+$puan_kd+$puan_yd+$puan_ot;
          //STR_TO_DATE(date("d.m.Y h:i:s A"));
          
          $sql = "INSERT INTO cts_tests (Date_, AdSoyad, OkulNo, OkulTip, Sinif, Cinsiyet, puan_total, puan_pc, puan_s, puan_ad, puan_a, puan_kd, puan_yd, puan_ot, s1_c1, s1_c2, s1_c3, s1_c4, s2_c1, s3_c1, s4_c1, s5_c1, s6_c1, s_a1, s_b1, s_c1, s_d1, s_e1, s_f1, s_g1, s_a2, s_b2, s_c2, s_d2, s_e2, s_f2, s_g2, s_a3, s_b3, s_c3, s_d3, s_e3, s_f3, s_g3, s_a4, s_b4, s_c4, s_d4, s_e4, s_f4, s_g4, s8_c1, s9_c1, s9_c2, s9_c3, s9_c4, s10_c1, s11_c1, s12_c1, anket1, anket2, anket3, anket4, anket5, anket6, anket7, anket8, anket9, anket10, anket11, anket12, anket13, anket14, anket15, anket16, anket17, anket18, anket19, anket20, anket21, anket22)
          VALUES ('$tarih', '$AdSoyad', '$OkulNo', '$OkulTip', '$Sinif', '$Cinsiyet','$puan_total', '$puan_pc', '$puan_s', '$puan_ad', '$puan_a', '$puan_kd', '$puan_yd', '$puan_ot', '$s1_c1', '$s1_c2', '$s1_c3', '$s1_c4', '$s2_c1', '$s3_c1', '$s4_c1', '$s5_c1', '$s6_c1', '$s_a1', '$s_b1', '$s_c1', '$s_d1', '$s_e1', '$s_f1', '$s_g1', '$s_a2', '$s_b2', '$s_c2', '$s_d2', '$s_e2', '$s_f2', '$s_g2', '$s_a3', '$s_b3', '$s_c3', '$s_d3', '$s_e3', '$s_f3', '$s_g3', '$s_a4', '$s_b4', '$s_c4', '$s_d4', '$s_e4', '$s_f4', '$s_g4', '$s8_c1', '$s9_c1', '$s9_c2', '$s9_c3', '$s9_c4', '$s10_c1', '$s11_c1', '$s12_c1', '$anket1', '$anket2', '$anket3', '$anket4', '$anket5', '$anket6', '$anket7', '$anket8', '$anket9', '$anket10', '$anket11', '$anket12', '$anket13', '$anket14', '$anket15', '$anket16', '$anket17', '$anket18', '$anket19', '$anket20', '$anket21', '$anket22')";
          
          /*if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }*/


          
        ?>
        
        <div class="jumbotron">
          <h3 class="display-5">Bilgisayarca Düşünme Skor Sonucu</h1>
          <p class="lead"><?=date("d.m.Y");?> tarihinde 12 soru üzerinden 7 farklı beceri puanı hesaplanmıştır.</p>
          <hr class="my-4">
          <?php if ($conn->query($sql) === TRUE) { ?>
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Tebrikler!</h4>
            <p>Sevgili <span class="text-uppercase"><?=$AdSoyad?></span>, Bilgisayarca Düşünme Skor testini başarıyla tamamladın.</p>
          </div>
          <?php } else { ?>
          <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Kayıt yapılamadı.</h4>
            <p>Sevgili <span class="text-uppercase"><?=$AdSoyad?></span>, Bilgisayarca Düşünme Skor testi hesaplanırken bazı sorunlar oluştu. Ayrıntılar: <?=$conn->error?></p>
          </div>
          <?php } $conn->close(); }else{ ?>
        <div class="jumbotron">
          <h3 class="display-5">Bilgisayarca Düşünme Skor Sonucu</h1>
          <p class="lead"><a href="start.php" class="badge badge-primary">Yeniden Başla</a></p>
          <hr class="my-4">
          <div class="alert alert-danger" role="alert">
            <h4 class="alert-heading">Puan Hesaplanamadı</h4>
            <p>Bilgisayarca Düşünme Skor testi hesaplanırken bazı sorunlar oluştu.</p>
          </div>
          <?php } ?>
          <div class="container-fluid">
            <div class="row">
              <div class="col m-2 p-2 bg-warning rounded-lg text-light text-center"><h4 class=""><?=$puan_total?>/120</h4> TOPLAM</div>
            </div>
            <div class="row">
              <div class="col m-2 p-2 bg-success rounded-lg text-light text-center"><h4 class=""><?=$puan_s?>/20</h4> Soyutlama</div>
              <div class="col m-2 p-2 bg-primary rounded-lg text-light text-center"><h4 class=""><?=$puan_a?>/10</h4> Ayrıştırma</div>
            </div>
            <div class="row">
              <div class="col m-2 p-2 bg-secondary rounded-lg text-light text-center"><h4 class=""><?=$puan_ot?>/10</h4> Örüntü Tanıma</div>
              <div class="col m-2 p-2 bg-danger rounded-lg text-light text-center"><h4 class=""><?=$puan_yd?>/20</h4> Yaratıcı Düşünme</div>
            </div>
            <div class="row">
              <div class="col m-2 p-2 bg-info rounded-lg text-light text-center"><h4 class=""><?=$puan_kd?>/10</h4> Eleştirel Düşünme</div>
              <div class="col m-2 p-2 bg-dark rounded-lg text-light text-center"><h4 class=""><?=$puan_ad?>/30</h4> Algoritmik Düşünme</div>
            </div>
            <div class="row">
              <div class="col m-2 p-2 bg-light rounded-lg text-dark text-center"><h4 class=""><?=$puan_pc?>/20</h4> Problem Çözme</div>
            </div>
          </div>
        </div>


      </div>
    </div>
    
  </div>

<?php include 'assets/inc/footer.php';?>

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>