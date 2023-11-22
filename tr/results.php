<?php include 'assets/inc/conn.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sonuçlar - Bilgisayarca Düşünme Skor</title>
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>
<?php
if (isset($_GET['p'])) {
  $pageno = $_GET['p'];
} else {
  $pageno = 1;
}

$no_of_records_per_page = 13;
$offset = ($pageno-1) * $no_of_records_per_page; 

$total_pages_sql = "SELECT COUNT(*) FROM cts_tests";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM cts_tests ORDER BY ID DESC LIMIT $offset, $no_of_records_per_page";
$result = $conn->query($sql);
?>
<body class="patternbg">
<?php include 'assets/inc/navbar.php';?>
  <div class="container">
  <?php 
    if ($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()) {
          $rowD[] = $row;
        }
  ?>
    <div class="row">
    <div class="col-lg-4 my-4">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4"><?=$total_rows?></h1>
            <p class="lead">Toplam Kayıt Sayısı</p>
            <p>28 kayıt formalite gerekçesiyle silinmiştir.</p>
          </div>
        </div>
        <div class="list-group" id="list-tab" role="tablist">
        <?php $aCount=0; foreach($rowD as $r){?>
            <a class="list-group-item list-group-item-action <?=$aCount=="0" ? "active" : "";$aCount++;?>" id="list-<?=$r["ID"]?>-list" data-toggle="list" href="#list-<?=$r["ID"]?>" role="tab" aria-controls="<?=$row["ID"]?>">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1 text-uppercase"><?=$r["AdSoyad"]?></h6>
                    <small><span class="badge badge-success p-1" style="font-size:12px;"><?=$r["puan_total"]?></span></small>
                </div>
                <small><?php 
                  if($r["OkulTip"]=="1"){echo "Fen Lisesi";}elseif($r["OkulTip"]=="2"){echo "Anadolu Lisesi";}elseif($r["OkulTip"]=="3"){echo "Sosyal Bilimler Lisesi";}elseif($r["OkulTip"]=="4"){echo "Mesleki ve Teknik Anadolu Lisesi";}elseif($r["OkulTip"]=="5"){echo "Çok Programlı Anadolu Lisesi";}elseif($r["OkulTip"]=="6"){echo "Anadolu İmam Hatip Lisesi";}elseif($r["OkulTip"]=="7"){echo "Temel Lise";}else{echo "Açık Öğretim Lisesi";}
                ?> - <?=$r["Sinif"]?>. Sınıf<br><?=$r["Cinsiyet"]=="1" ? "Kadın" : "Erkek" ?> - <?=$r["OkulNo"]?> - <?=date_format(date_create($r["Date_"]),"d.m.Y H:i")?></small>
            </a>
        <?php } ?>
        </div>
        <!-- pagination -->
        <nav aria-label="Page navigation" class="my-4">
          <ul class="pagination flex-wrap">
          <li class="page-item"><a class="page-link" href="?p=1">İlk</a></li>
            <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?p=".($pageno - 1); } ?>">Önceki Sayfa</a></li>
            <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>"><a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?p=".($pageno + 1); } ?>">Sonraki Sayfa</a></li>
            <li class="page-item"><a class="page-link" href="?p=<?php echo $total_pages; ?>">Son</a></li>
          </ul>
        </nav>
        <!-- pagination -->
    </div>
    <div class="col-lg-8 my-4">
        <div class="tab-content" id="nav-tabContent">
        <?php $aCount=0; foreach($rowD as $r){?>
          <div class="tab-pane fade show  <?=$aCount=="0" ? "active" : "";$aCount++;?>" id="list-<?=$r["ID"]?>" role="tabpanel" aria-labelledby="list-<?=$r["ID"]?>-list">
            <div class="card">
              <h5 class="card-header text-uppercase"><?=$r["AdSoyad"]?></h5>
              <div class="card-body">
                <!-- <h5 class="card-title"></h5><p class="card-text"></p> -->
                <!-- table is here -->
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Bölüm</th>
                        <th scope="col">Gelen Yanıt</th>
                        <!-- BİLEŞEN EKLENEBİLİR -->
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Ölçek</th>
                        <td><?=$r["anket1"]?>, <?=$r["anket2"]?>, <?=$r["anket3"]?>, <?=$r["anket4"]?>, <?=$r["anket5"]?>, <?=$r["anket6"]?>, <?=$r["anket7"]?>, <?=$r["anket8"]?>, <?=$r["anket9"]?>, <?=$r["anket10"]?>, <?=$r["anket11"]?>, <?=$r["anket12"]?>, <?=$r["anket13"]?>, <?=$r["anket14"]?>, <?=$r["anket15"]?>, <?=$r["anket16"]?>, <?=$r["anket17"]?>, <?=$r["anket18"]?>, <?=$r["anket19"]?>, <?=$r["anket20"]?>, <?=$r["anket21"]?>, <?=$r["anket22"]?></td>
                      </tr>
                      <tr class="table-success">
                        <th scope="row">Bilgisayarca Düşünme Skor Puanı</th>
                        <td><?=$r["puan_total"]?>/120</td>
                      </tr>
                      <tr>
                        <th scope="row" rowspan="4" class="align-middle">1. Tuhaf Köpek</th>
                        <td class="<?=$r["s1_c1"]==3 ? "table-success" : "table-danger"?>">1. Satır: <?=$r["s1_c1"]?></td>
                      </tr>
                      <tr>
                        <td class="<?=$r["s1_c2"]==1 ? "table-success" : "table-danger"?>">2. Satır: <?=$r["s1_c2"]?></td>
                      </tr>
                      <tr>
                        <td class="<?=$r["s1_c3"]==6 ? "table-success" : "table-danger"?>">3. Satır: <?=$r["s1_c3"]?></td>
                      </tr>
                      <tr>
                        <td class="<?=$r["s1_c4"]==7 ? "table-success" : "table-danger"?>">4. Satır: <?=$r["s1_c4"]?></td>
                      </tr>
                      <tr class="table-info">
                        <th scope="row">Örüntü Tanıma</th>
                        <td><?=$r["puan_ot"]?>/10</td>
                      </tr>
                      <tr>
                        <th scope="row">2. Kriptolu Metin</th>
                        <td class="<?php if(!strcmp($r["s2_c1"],"ÇİLEK MEVSİMİ GELDİ")){echo "table-success";
          }elseif(!strcmp($r["s2_c1"],"ÇILEK MEVSIMI GELDI")){echo "table-success";
          }elseif(!strcmp($r["s2_c1"],"ÇİLEK MEVSIMI GELDİ")){echo "table-success";}elseif(!strcmp($r["s2_c1"],"ÇILEK MEVSİMİ GELDİ")){echo "table-success";}else{echo "table-danger";}?>"><?=$r["s2_c1"]?></td>
                      </tr>
                      <tr>
                        <th scope="row">3. Tur Rehberi</th>
                        <td class="<?php if($r["s3_c1"]=="0,1,8,3,9,5,7,6,4,2,0" || $r["s3_c1"]=="0,2,4,6,7,5,9,3,8,1,0"){echo "table-success";}else{echo "table-danger";}?>"><?=$r["s3_c1"]?></td>
                      </tr>
                      <tr class="table-info">
                        <th scope="row">Yaratıcı Düşünme</th>
                        <td><?=$r["puan_yd"]?>/20</td>
                      </tr>
                      <tr>
                        <th scope="row">4. Sıcaklık Sensörü</th>
                        <td class="<?=$r["s4_c1"]==3 ? "table-success" : "table-danger"?>"><?=$r["s4_c1"]?></td>
                      </tr>
                      <tr>
                        <th scope="row">6. Şeker Labirenti</th>
                        <td class="<?=$r["s6_c1"]==3 ? "table-success" : "table-danger"?>"><?=$r["s6_c1"]?></td>
                      </tr>
                      <tr>
                        <th scope="row">8. Şifreli Mektup</th>
                        <td class="<?=$r["s8_c1"]==3 ? "table-success" : "table-danger"?>"><?=$r["s8_c1"]?></td>
                      </tr>
                      <tr class="table-info">
                        <th scope="row">Algoritmik Düşünme</th>
                        <td><?=$r["puan_ad"]?>/30</td>
                      </tr>
                      <tr>
                        <th scope="row">5. Mühendis Takımı</th>
                        <td class="<?=$r["s5_c1"]=="1,1,1,1,1,1,2,2,2,2,3,3,3,3,4,4,1,1" ? "table-success" : "table-danger"?>"><?=$r["s5_c1"]?></td>
                      </tr>
                      <tr>
                        <th scope="row" rowspan="4" class="align-middle">9. Balık Araştırması</th>
                        <td class="<?=$r["s9_c1"]==4 ? "table-success" : "table-danger"?>">1. Soru: <?=$r["s9_c1"]?></td>
                      </tr>
                      <tr>
                        <td class="<?=$r["s9_c2"]==4 ? "table-success" : "table-danger"?>">2. Soru: <?=$r["s9_c2"]?></td>
                      </tr>
                      <tr>
                        <td class="<?=$r["s9_c3"]==2 ? "table-success" : "table-danger"?>">3. Soru: <?=$r["s9_c3"]?></td>
                      </tr>
                      <tr>
                        <td class="<?=$r["s9_c4"]==1 ? "table-success" : "table-danger"?>">4. Soru: <?=$r["s9_c4"]?></td>
                      </tr>
                      <tr class="table-info">
                        <th scope="row">Problem Çözme</th>
                        <td><?=$r["puan_pc"]?>/20</td>
                      </tr>
                      <tr>
                        <th scope="row" rowspan="4" class="align-middle">7. Gizli Sayı</th>
                        <td class="<?=$r["s_a1"]=='1' && $r["s_b1"]=='0' && $r["s_c1"]=='1' && $r["s_d1"]=='1' && $r["s_e1"]=='1' && $r["s_f1"]=='1' && $r["s_g1"]=='1' ? "table-success" : "table-danger"?>">1. Satır: <?=$r["s_a1"]?>, <?=$r["s_b1"]?>, <?=$r["s_c1"]?>, <?=$r["s_d1"]?>, <?=$r["s_e1"]?>, <?=$r["s_f1"]?>, <?=$r["s_g1"]?></td>
                      </tr>
                      <tr>
                        <td class="<?=$r["s_a2"]=='1' && $r["s_b2"]=='1' && $r["s_c2"]=='1' && $r["s_d2"]=='1' && $r["s_e2"]=='1' && $r["s_f2"]=='1' && $r["s_g2"]=='1' ? "table-success" : "table-danger"?>">2. Satır: <?=$r["s_a2"]?>, <?=$r["s_b2"]?>, <?=$r["s_c2"]?>, <?=$r["s_d2"]?>, <?=$r["s_e2"]?>, <?=$r["s_f2"]?>, <?=$r["s_g2"]?></td>
                      </tr>
                      <tr>
                        <td class="<?=$r["s_a3"]=='0' && $r["s_b3"]=='1' && $r["s_c3"]=='1' && $r["s_d3"]=='0' && $r["s_e3"]=='0' && $r["s_f3"]=='0' && $r["s_g3"]=='0' ? "table-success" : "table-danger"?>">3. Satır: <?=$r["s_a3"]?>, <?=$r["s_b3"]?>, <?=$r["s_c3"]?>, <?=$r["s_d3"]?>, <?=$r["s_e3"]?>, <?=$r["s_f3"]?>, <?=$r["s_g3"]?></td>
                      </tr>
                      <tr>
                        <td class="<?=$r["s_a4"]=='1' && $r["s_b4"]=='1' && $r["s_c4"]=='1' && $r["s_d4"]=='1' && $r["s_e4"]=='0' && $r["s_f4"]=='0' && $r["s_g4"]=='1' ? "table-success" : "table-danger"?>">4. Satır: <?=$r["s_a4"]?>, <?=$r["s_b4"]?>, <?=$r["s_c4"]?>, <?=$r["s_d4"]?>, <?=$r["s_e4"]?>, <?=$r["s_f4"]?>, <?=$r["s_g4"]?></td>
                      </tr>
                      <tr class="table-info">
                        <th scope="row">Eleştirel Düşünme</th>
                        <td><?=$r["puan_kd"]?>/10</td>
                      </tr>
                      <tr>
                        <th scope="row">10. Beş Çubuk</th>
                        <td class="<?=$r["s10_c1"]==6 ? "table-success" : "table-danger"?>"><?=$r["s10_c1"]?></td>
                      </tr>
                      <tr class="table-info">
                        <th scope="row">Ayrıştırma</th>
                        <td><?=$r["puan_a"]?>/10</td>
                      </tr>
                      <tr>
                        <th scope="row">11. Oto Kuaför</th>
                        <td class="<?=$r["s11_c1"]=='5,2,1,4,3' ? "table-success" : "table-danger"?>"><?=$r["s11_c1"]?></td>
                      </tr>
                      <tr>
                        <th scope="row">12. Kitap Kulübü</th>
                        <td class="<?=$r["s12_c1"]==6 ? "table-success" : "table-danger"?>"><?=$r["s12_c1"]?></td>
                      </tr>
                      <tr class="table-info">
                        <th scope="row">Soyutlama</th>
                        <td><?=$r["puan_s"]?>/20</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- table is here -->
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
    </div>
    </div>
    <?php } else { ?>
    <div class="row">
        <div class="col">Henüz veri girişi olmamış.</div>
    </div>
    <?php } $conn->close(); ?>
  </div>

<?php include 'assets/inc/footer.php';?>

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>