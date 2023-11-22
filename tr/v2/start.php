<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Seviyeni Belirle - Bilgisayarca Düşünme Skor</title>
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
      <div class="col-lg-4 my-4">

        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-baslangic-list" data-toggle="list"
            href="#list-baslangic" role="tab" aria-controls="baslangic">
            <h5 class="mb-1">Başlangıç</h5>
            <small>Kullanıcı Bilgileri</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru1-list" data-toggle="list" href="#list-soru1"
            role="tab" aria-controls="soru1">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Tuhaf Köpek</h5>
              <small>1</small>
            </div>
            <small>Örüntü Tanıma</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru2-list" data-toggle="list" href="#list-soru2"
            role="tab" aria-controls="soru2">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Kriptolu Metin</h5>
              <small>2</small>
            </div>
            <small>Yaratıcı Düşünme</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru3-list" data-toggle="list" href="#list-soru3"
            role="tab" aria-controls="soru3">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Tur Rehberi</h5>
              <small>3</small>
            </div>
            <small>Yaratıcı Düşünme</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru4-list" data-toggle="list" href="#list-soru4"
            role="tab" aria-controls="soru4">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sıcaklık Sensörü</h5>
              <small>4</small>
            </div>
            <small>Algoritmik Düşünme</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru5-list" data-toggle="list" href="#list-soru5"
            role="tab" aria-controls="soru5">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Mühendis Takımı</h5>
              <small>5</small>
            </div>
            <small>Problem Çözme</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru6-list" data-toggle="list" href="#list-soru6"
            role="tab" aria-controls="soru6">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Şeker Labirenti</h5>
              <small>6</small>
            </div>
            <small>Algoritmik Düşünme</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru7-list" data-toggle="list" href="#list-soru7"
            role="tab" aria-controls="soru7">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Gizli Sayı</h5>
              <small>7</small>
            </div>
            <small>Kritik Düşünme</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru8-list" data-toggle="list" href="#list-soru8"
            role="tab" aria-controls="soru8">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Şifreli Mektup</h5>
              <small>8</small>
            </div>
            <small>Algoritmik Düşünme</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru9-list" data-toggle="list" href="#list-soru9"
            role="tab" aria-controls="soru9">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Balık Araştırması</h5>
              <small>9</small>
            </div>
            <small>Problem Çözme</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru10-list" data-toggle="list" href="#list-soru10"
            role="tab" aria-controls="soru10">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Beş Çubuk</h5>
              <small>10</small>
            </div>
            <small>Ayrıştırma</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru11-list" data-toggle="list" href="#list-soru11"
            role="tab" aria-controls="soru11">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Oto Kuaför</h5>
              <small>11</small>
            </div>
            <small>Soyutlama</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru12-list" data-toggle="list" href="#list-soru12"
            role="tab" aria-controls="soru12">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Kitap Kulübü</h5>
              <small>12</small>
            </div>
            <small>Soyutlama</small>
          </a>
        </div>

      </div>
      
      <div class="col-lg-8 my-4">
        <form id="cttest" action="result.php" method="POST">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-baslangic" role="tabpanel"
            aria-labelledby="list-baslangic-list">

            <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">Hoş geldin!</h4>
              <p>Sorulara başlamadan önce kendine ait bilgileri tamamlamalısın. Sol menüde bulunduğun aşamayı
                görebileceksin. Sorular arasında geçiş yapabilir ve istediğin sorudan başlayabilirsin.</p>
              <hr>
              <p class="mb-0">Bilgisayarca Düşünme seviyeni görebilmen için tüm alanları eksiksiz doldurman gereklidir.
              </p>
            </div>

            <div class="card panel-primary">
              <div class="card-header">
                Kullanıcı Bilgileri
              </div>
              <div class="card-body">

                <div class="form-group">
                  <label for="inputCity">Ad Soyad</label>
                  <input type="text" class="form-control text-uppercase" id="adsoyad" name="adsoyad" maxlength="30" data-uyari="Kullanıcı Bilgileri: Ad Soyad" required>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="okulno">Okul No</label>
                    <input type="text" class="form-control" id="okulno" name="okulno" maxlength="8" data-uyari="Kullanıcı Bilgileri: Okul No" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="cinsiyet">Cinsiyet</label>
                    <select id="cinsiyet" name="cinsiyet" class="form-control" data-uyari="Kullanıcı Bilgileri: Cinsiyet" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">Kadın</option>
                      <option value="2">Erkek</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="sinif">Sınıf</label>
                    <select id="sinif" name="sinif" class="form-control" data-uyari="Kullanıcı Bilgileri: Sınıf" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="9">9. Sınıf</option>
                      <option value="10">10. Sınıf</option>
                      <option value="11">11. Sınıf</option>
                      <option value="12">12. Sınıf</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-primary" data-toggle="list" href="#list-soru1" data-action="nav"
                  data-controls="soru1">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru1" role="tabpanel" aria-labelledby="list-soru1-list">

            <div class="card">
              <div class="card-header">Örüntü Tanıma (Genelleştirme)</div>
              <div class="card-body">
                <h5 class="card-title">Tuhaf Köpek</h5>
                <p class="card-text">Her bir satırda, sütuna (dikey desene) uymayan köpeği belirle.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru1.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="satir1">1. Satır</label>
                    <select id="satir1" name="s1_c1" class="form-control" data-uyari="Tuhaf Köpek: 1. Satır" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="satir2">2. Satır</label>
                    <select id="satir2" name="s1_c2" class="form-control" data-uyari="Tuhaf Köpek: 2. Satır" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="satir3">3. Satır</label>
                    <select id="satir3" name="s1_c3" class="form-control" data-uyari="Tuhaf Köpek: 3. Satır" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="satir4">4. Satır</label>
                    <select id="satir4" name="s1_c4" class="form-control" data-uyari="Tuhaf Köpek: 4. Satır" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-baslangic" data-action="nav"
                  data-controls="baslangic">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru2" data-action="nav"
                  data-controls="soru2">Sonraki Adıma Geç</a>
              </div>
            </div>


          </div>
          <div class="tab-pane fade" id="list-soru2" role="tabpanel" aria-labelledby="list-soru2-list">

            <div class="card">
              <div class="card-header">Yaratıcı Düşünme (Değerlendirme, Genelleştirme)</div>
              <div class="card-body">
                <h5 class="card-title">Kriptolu Metin</h5>
                <p class="card-text">Alfabenin her bir harfi farklı sayılarla numaralandırılmıştır. Mesaj içerisinde bazı harflerin eşleştirmeleri verilmiştir. Buna göre anahtarı tamamla ve
                  mesajı çöz. </p>
                <p class="card-text text-center"><img src="assets/img/soru/soru2.png" class="img-fluid"></p>

                <div class="card">
                  <div class="card-body">
                    <div class="card-title">Anahtar</div>
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <div class="anahtarKutu" id="key1" ondrop="drop(event)" ondragover="allowDrop(event)">1</div>
                          <div class="anahtarKutu" id="key2" ondrop="drop(event)" ondragover="allowDrop(event)">2</div>
                          <div class="anahtarKutu" id="key3" ondrop="drop(event)" ondragover="allowDrop(event)">3</div>
                          <div class="anahtarKutu" id="key4" ondrop="drop(event)" ondragover="allowDrop(event)">4</div>
                          <div class="anahtarKutu" id="key5" ondrop="drop(event)" ondragover="allowDrop(event)">5</div>
                          <div class="anahtarKutu" id="key6" ondrop="drop(event)" ondragover="allowDrop(event)">6</div>
                          <div class="anahtarKutu" id="key7" ondrop="drop(event)" ondragover="allowDrop(event)">7</div>
                          <div class="anahtarKutu" id="key8" ondrop="drop(event)" ondragover="allowDrop(event)">8</div>
                          <div class="anahtarKutu" id="key9" ondrop="drop(event)" ondragover="allowDrop(event)">9</div>
                          <div class="anahtarKutu" id="key10" ondrop="drop(event)" ondragover="allowDrop(event)">10</div>
                          <div class="anahtarKutu" id="key11" ondrop="drop(event)" ondragover="allowDrop(event)">11</div>
                          <div class="anahtarKutu" id="key12" ondrop="drop(event)" ondragover="allowDrop(event)">12</div>
                          <div class="anahtarKutu" id="key13" ondrop="drop(event)" ondragover="allowDrop(event)">13</div>
                          <div class="anahtarKutu" id="key14" ondrop="drop(event)" ondragover="allowDrop(event)">14</div>
                          <div class="anahtarKutu" id="key15" ondrop="drop(event)" ondragover="allowDrop(event)">15</div>
                          <div class="anahtarKutu" id="key16" ondrop="drop(event)" ondragover="allowDrop(event)">16</div>
                          <div class="anahtarKutu" id="key17" ondrop="drop(event)" ondragover="allowDrop(event)">17</div>
                          <div class="anahtarKutu" id="key18" ondrop="drop(event)" ondragover="allowDrop(event)">18</div>
                          <div class="anahtarKutu" id="key19" ondrop="drop(event)" ondragover="allowDrop(event)">19</div>
                          <div class="anahtarKutu" id="key20" ondrop="drop(event)" ondragover="allowDrop(event)">20</div>
                          <div class="anahtarKutu" id="key21" ondrop="drop(event)" ondragover="allowDrop(event)">21</div>
                          <div class="anahtarKutu" id="key22" ondrop="drop(event)" ondragover="allowDrop(event)">22</div>
                          <div class="anahtarKutu" id="key23" ondrop="drop(event)" ondragover="allowDrop(event)">23</div>
                          <div class="anahtarKutu" id="key24" ondrop="drop(event)" ondragover="allowDrop(event)">24</div>
                          <div class="anahtarKutu" id="key25" ondrop="drop(event)" ondragover="allowDrop(event)">25</div>
                          <div class="anahtarKutu" id="key26" ondrop="drop(event)" ondragover="allowDrop(event)">26</div>
                          <div class="anahtarKutu" id="key27" ondrop="drop(event)" ondragover="allowDrop(event)">27</div>
                          <div class="anahtarKutu" id="key28" ondrop="drop(event)" ondragover="allowDrop(event)">28</div>
                          <div class="anahtarKutu" id="key29" ondrop="drop(event)" ondragover="allowDrop(event)">29</div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="alfabeKutu" id="abc1" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba1" draggable="true" ondragstart="drag(event)">A</span></div>
                          <div class="alfabeKutu" id="abc2" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba2" draggable="true" ondragstart="drag(event)">B</span></div>
                          <div class="alfabeKutu" id="abc3" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba3" draggable="true" ondragstart="drag(event)">C</span></div>
                          <div class="alfabeKutu" id="abc4" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba4" draggable="true" ondragstart="drag(event)">Ç</span></div>
                          <div class="alfabeKutu" id="abc5" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba5" draggable="true" ondragstart="drag(event)">D</span></div>
                          <div class="alfabeKutu" id="abc6" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba6" draggable="true" ondragstart="drag(event)">E</span></div>
                          <div class="alfabeKutu" id="abc7" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba7" draggable="true" ondragstart="drag(event)">F</span></div>
                          <div class="alfabeKutu" id="abc8" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba8" draggable="true" ondragstart="drag(event)">G</span></div>
                          <div class="alfabeKutu" id="abc9" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba9" draggable="true" ondragstart="drag(event)">Ğ</span></div>
                          <div class="alfabeKutu" id="abc10" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba10" draggable="true" ondragstart="drag(event)">H</span></div>
                          <div class="alfabeKutu" id="abc11" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba11" draggable="true" ondragstart="drag(event)">I</span></div>
                          <div class="alfabeKutu" id="abc12" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba12" draggable="true" ondragstart="drag(event)">İ</span></div>
                          <div class="alfabeKutu" id="abc13" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba13" draggable="true" ondragstart="drag(event)">J</span></div>
                          <div class="alfabeKutu" id="abc14" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba14" draggable="true" ondragstart="drag(event)">K</span></div>
                          <div class="alfabeKutu" id="abc15" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba15" draggable="true" ondragstart="drag(event)">L</span></div>
                          <div class="alfabeKutu" id="abc16" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba16" draggable="true" ondragstart="drag(event)">M</span></div>
                          <div class="alfabeKutu" id="abc17" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba17" draggable="true" ondragstart="drag(event)">N</span></div>
                          <div class="alfabeKutu" id="abc18" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba18" draggable="true" ondragstart="drag(event)">O</span></div>
                          <div class="alfabeKutu" id="abc19" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba19" draggable="true" ondragstart="drag(event)">Ö</span></div>
                          <div class="alfabeKutu" id="abc20" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba20" draggable="true" ondragstart="drag(event)">P</span></div>
                          <div class="alfabeKutu" id="abc21" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba21" draggable="true" ondragstart="drag(event)">R</span></div>
                          <div class="alfabeKutu" id="abc22" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba22" draggable="true" ondragstart="drag(event)">S</span></div>
                          <div class="alfabeKutu" id="abc23" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba23" draggable="true" ondragstart="drag(event)">Ş</span></div>
                          <div class="alfabeKutu" id="abc24" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba24" draggable="true" ondragstart="drag(event)">T</span></div>
                          <div class="alfabeKutu" id="abc25" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba25" draggable="true" ondragstart="drag(event)">U</span></div>
                          <div class="alfabeKutu" id="abc26" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba26" draggable="true" ondragstart="drag(event)">Ü</span></div>
                          <div class="alfabeKutu" id="abc27" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba27" draggable="true" ondragstart="drag(event)">V</span></div>
                          <div class="alfabeKutu" id="abc28" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba28" draggable="true" ondragstart="drag(event)">Y</span></div>
                          <div class="alfabeKutu" id="abc29" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba29" draggable="true" ondragstart="drag(event)">Z</span></div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>

                
                
                <p class="card-text">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="sifrelimesaj">Şifreli Mesaj</label>
                      <input type="text" name="s2_c1" class="form-control text-uppercase" id="sifrelimesaj" maxlength="30" data-uyari="Kriptolu Metin: Şifreli Mesaj" required>
                    </div>
                  </div>
                </p>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru1" data-action="nav"
                  data-controls="soru1">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru3" data-action="nav"
                  data-controls="soru3">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru3" role="tabpanel" aria-labelledby="list-soru3-list">

            <div class="card">
              <div class="card-header">Yaratıcı Düşünme (Algoritmik Düşünme, Değerlendirme)</div>
              <div class="card-body">
                <h5 class="card-title">Tur Rehberi</h5>
                <p class="card-text">Bir otelde tur rehberi olarak turistleri gezdirmen gerekiyor. Turistleri
                  gezdirirken, bir mekandan iki defa geçmeden otele varmalısınız. Bunun için haritadan yardım
                  alabilirsin. Güzergâh otel ile başlayıp, otel ile bitmeli ve turistler tüm mekanları gezmelidir. Mekanları, fare ile güzergâhın üzerine
                  sürükleyip bırakabilirsin.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru3.png" class="img-fluid"></p>

                <!-- Buraya gelsin sortable -->
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5>Mekanlar</h5>
                      <ul id="turRehberi1" class="list-group">
                        <li class="list-group-item list-group-item-action" data-mekan="0">Otel</li>
                        <li class="list-group-item list-group-item-action" data-mekan="1">Park</li>
                        <li class="list-group-item list-group-item-action" data-mekan="2">Akvaryum</li>
                        <li class="list-group-item list-group-item-action" data-mekan="3">Sahil</li>
                        <li class="list-group-item list-group-item-action" data-mekan="4">Sanat Galerisi</li>
                        <li class="list-group-item list-group-item-action" data-mekan="5">Bilim Müzesi</li>
                        <li class="list-group-item list-group-item-action" data-mekan="6">Üniversite</li>
                        <li class="list-group-item list-group-item-action" data-mekan="7">Fabrika</li>
                        <li class="list-group-item list-group-item-action" data-mekan="8">Kale</li>
                        <li class="list-group-item list-group-item-action" data-mekan="9">Köprü</li>
                      </ul>
                    </div>
                    <div class="col">
                      <h5>Güzergâh</h5>
                      <ul id="turRehberi2" class="list-group" style="height:550px;">
                        <li class="list-group-item list-group-item-action" data-mekan="0">Otel</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="text" name="s3_c1" id="rota"  class="d-none" data-uyari="Tur Rehberi: Güzergâh" required>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru2" data-action="nav"
                  data-controls="soru2">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru4" data-action="nav"
                  data-controls="soru4">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru4" role="tabpanel" aria-labelledby="list-soru4-list">

            <div class="card">
              <div class="card-header">Algoritmik Düşünme (Değerlendirme)</div>
              <div class="card-body">
                <h5 class="card-title">Sıcaklık Sensörü</h5>
                <p class="card-text">Bir bilgisayar programcısı, metal demir üzerine yerleştirdiği farklı noktalardaki
                  sıcaklık sensörleri sıcaklık değerini ölçmüştür. Bu ölçümü yapabilmek için programlanabilir devreye
                  daha önce yazmış olduğu kodu yüklemiştir. Yazdığı kodun çıktısı hangi seçenekte doğru olarak
                  verilmiştir?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru4.png" class="img-fluid"></p>

                <div class="card">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Programcı tarafından yazılan kod:</h6>
                    <kbd>SÜREKLİ TEKRAR ET</kbd>:<br>
                    deger1 = <kbd>OKU</kbd>(1) <br>
                    deger2 = <kbd>OKU</kbd>(2)<br>
                    deger3 = <kbd>OKU</kbd>(3)<br>
                    deger4 = <kbd>OKU</kbd>(4)<br>
                    deger5 = <kbd>OKU</kbd>(5)<br>
                    <kbd>YAZ</kbd> 1, deger1, zaman<br>
                    <kbd>YAZ</kbd> 2, deger2, zaman<br>
                    <kbd>YAZ</kbd> 3, deger3, zaman<br>
                    <kbd>YAZ</kbd> 4, deger4, zaman<br>
                    <kbd>YAZ</kbd> 5, deger5, zaman<br>
                    <kbd>BEKLE</kbd> 20 saniye
                  </div>
                </div>
                <br>
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <div class="input-group">
                        <div class="input-group">
                          <div class="input-group-prepend marginRight">
                            <div class="input-group-text">
                              <input type="radio" name="s4_c1" id="s4_c1" value="1" checked>
                            </div>
                          </div>
                          <samp>
                            1, 28.2, 10:20:00<br>
                            1, 28.6, 10:20:20<br>
                            1, 32.1, 10:20:40<br>
                            1, 34.3, 10:21:00<br>
                            1, 33.8, 10:21:00<br>
                            1, 36.7, 10:22:00<br>
                            1, 37.9, 10:22:20<br>
                            ...
                          </samp>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <div class="input-group">
                          <div class="input-group-prepend marginRight">
                            <div class="input-group-text">
                              <input type="radio" name="s4_c1" id="s4_c2" value="2">
                            </div>
                          </div>
                          <samp>
                            1, 28.2, 10:20:00<br>
                            2, 28.6, 10:20:20<br>
                            3, 29.1, 10:20:40<br>
                            4, 30.3, 10:21:00<br>
                            5, 30.9, 10:21:20<br>
                            1, 31.6, 10:21:40<br>
                            2, 32.3, 10:22:00<br>
                            ...
                          </samp>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="padding-top:10px;">
                    <div class="col">
                      <div class="input-group">
                        <div class="input-group">
                          <div class="input-group-prepend marginRight">
                            <div class="input-group-text">
                              <input type="radio" name="s4_c1" id="s4_c3" value="3">
                            </div>
                          </div>
                          <samp>
                            1, 28.2, 10:20:00<br>
                            2, 28.6, 10:20:00<br>
                            3, 29.1, 10:20:00<br>
                            4, 30.3, 10:20:00<br>
                            5, 30.9, 10:20:00<br>
                            1, 31.6, 10:20:20<br>
                            2, 32.3, 10:20:20<br>
                            ...
                          </samp>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="input-group">
                        <div class="input-group">
                          <div class="input-group-prepend marginRight">
                            <div class="input-group-text">
                              <input type="radio" name="s4_c1" id="s4_c4" value="4">
                            </div>
                          </div>
                          <samp>
                            1, 30.2, 10:20:00<br>
                            2, 29.6, 10:20:00<br>
                            3, 28.1, 10:20:00<br>
                            4, 31.3, 10:20:00<br>
                            5, 35.9, 10:20:00<br>
                            1, 31.6, 10:20:10<br>
                            2, 32.3, 10:20:10<br>
                            ...
                          </samp>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru3" data-action="nav"
                  data-controls="soru3">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru5" data-action="nav"
                  data-controls="soru5">Sonraki Adıma Geç</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="list-soru5" role="tabpanel" aria-labelledby="list-soru5-list">

            <div class="card">
              <div class="card-header">Problem Çözme (Algoritmik Düşünme, Değerlendirme)</div>
              <div class="card-body">
                <h5 class="card-title">Mühendis Takımı</h5>
                <p class="card-text">Bir grup mühendis uzaktan kumandalı araç geliştirmişler. Fakat geliştirdikleri
                  uzaktan kumandalı aracın gideceği rotayı yanlış programlamışlardır. Uzaktan kumandalı aracın varış noktasına gitmesi için rotayı yeniden sıralamalısın.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru5.png" class="img-fluid"></p>

                <!-- Buraya gelsin sortable -->
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5>Rota</h5>
                      <ul id="muhendis" class="list-group">
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Doğu
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Doğu
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Güney
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Doğu
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Batı
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-primary" data-muh="4">Kuzey
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Güney
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Doğu
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Batı
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Doğu
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Güney
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Doğu
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Batı
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Doğu
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-primary" data-muh="4">Kuzey
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Güney
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Doğu
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Batı
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="text" name="s5_c1" id="muhcevap" data-uyari="Mühendis Takımı: Rota" class="d-none" required>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru4" data-action="nav"
                  data-controls="soru4">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru6" data-action="nav"
                  data-controls="soru6">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru6" role="tabpanel" aria-labelledby="list-soru6-list">

            <div class="card">
              <div class="card-header">Algoritmik Düşünme (Soyutlama, Değerlendirme, Genelleştirme)</div>
              <div class="card-body">
                <h5 class="card-title">Şeker Labirenti</h5>
                <p class="card-text">Bir robot olabildiğince şeker toplamaya programlanmıştır. Robot, her hücreden geçerken şekerleri toplamaktadır. Her bir hücre 0, 1, 2 ve 3 şekere sahiptir. Robot sadece sağ ve yukarı hareket edebilir. Robot en fazla kaç tane şeker toplamıştır?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru6.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="seker">Şeker Sayısı</label>
                    <select id="seker" name="s6_c1" class="form-control" data-uyari="Şeker Labirenti: Şeker Sayısı" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">10 Tane Şeker</option>
                      <option value="5">11 Tane Şeker</option>
                      <option value="2">12 Tane Şeker</option>
                      <option value="3">14 Tane Şeker</option>
                      <option value="4">16 Tane Şeker</option>
                    </select>
                  </div>
                </div>
                 <!-- /// Bu sorun için şu becerilere yönelik olduğu belirtilmiş: "CT Skills - Abstraction (AB), Evaluation (EV), Generalisation (GE)" {doğru cevap:14}-->
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru5" data-action="nav"
                  data-controls="soru5">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru7" data-action="nav"
                  data-controls="soru7">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru7" role="tabpanel" aria-labelledby="list-soru7-list">
            <div class="card">
              <div class="card-header">Kritik Düşünme (Soyutlama, Değerlendirme, Genelleştirme)</div>
              <div class="card-body">
                <h5 class="card-title">Gizli Sayı</h5>
                <p class="card-text">Bir bilgisayar programcısı 7 adet LED kullanarak dijital sayıları göstermek
                  istiyor. Her bir LED parçasını resimde gösterildiği şekilde (A, B, C, D, E, F ve G) etiketlemiştir.
                  Programcının <kbd>6813</kbd> sayısını yazması için hangi LED parçalarını açması gerekir? Örneğin,
                  resimde 103 sayısı gösterilmiştir.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru7.png" class="img-fluid"></p>

                <table class="table table-hover text-center table-bordered" id="sayibul">
                  <thead>
                    <tr>

                      <th scope="col">A</th>
                      <th scope="col">B</th>
                      <th scope="col">C</th>
                      <th scope="col">D</th>
                      <th scope="col">E</th>
                      <th scope="col">F</th>
                      <th scope="col">G</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td id="soru_a1" data-sayibul="0"></td>
                      <td id="soru_b1" data-sayibul="0"></td>
                      <td id="soru_c1" data-sayibul="0"></td>
                      <td id="soru_d1" data-sayibul="0"></td>
                      <td id="soru_e1" data-sayibul="0"></td>
                      <td id="soru_f1" data-sayibul="0"></td>
                      <td id="soru_g1" data-sayibul="0"></td>
                    </tr>
                    <tr>

                      <td id="soru_a2" data-sayibul="0"></td>
                      <td id="soru_b2" data-sayibul="0"></td>
                      <td id="soru_c2" data-sayibul="0"></td>
                      <td id="soru_d2" data-sayibul="0"></td>
                      <td id="soru_e2" data-sayibul="0"></td>
                      <td id="soru_f2" data-sayibul="0"></td>
                      <td id="soru_g2" data-sayibul="0"></td>
                    </tr>
                    <tr>

                      <td id="soru_a3" data-sayibul="0"></td>
                      <td id="soru_b3" data-sayibul="0"></td>
                      <td id="soru_c3" data-sayibul="0"></td>
                      <td id="soru_d3" data-sayibul="0"></td>
                      <td id="soru_e3" data-sayibul="0"></td>
                      <td id="soru_f3" data-sayibul="0"></td>
                      <td id="soru_g3" data-sayibul="0"></td>
                    </tr>
                    <tr>

                      <td id="soru_a4" data-sayibul="0"></td>
                      <td id="soru_b4" data-sayibul="0"></td>
                      <td id="soru_c4" data-sayibul="0"></td>
                      <td id="soru_d4" data-sayibul="0"></td>
                      <td id="soru_e4" data-sayibul="0"></td>
                      <td id="soru_f4" data-sayibul="0"></td>
                      <td id="soru_g4" data-sayibul="0"></td>
                    </tr>
                  </tbody>
                </table>
                <input type="hidden" name="s_a1" id="s_a1" value="0">
                <input type="hidden" name="s_b1" id="s_b1" value="0">
                <input type="hidden" name="s_c1" id="s_c1" value="0">
                <input type="hidden" name="s_d1" id="s_d1" value="0">
                <input type="hidden" name="s_e1" id="s_e1" value="0">
                <input type="hidden" name="s_f1" id="s_f1" value="0">
                <input type="hidden" name="s_g1" id="s_g1" value="0">
                <input type="hidden" name="s_a2" id="s_a2" value="0">
                <input type="hidden" name="s_b2" id="s_b2" value="0">
                <input type="hidden" name="s_c2" id="s_c2" value="0">
                <input type="hidden" name="s_d2" id="s_d2" value="0">
                <input type="hidden" name="s_e2" id="s_e2" value="0">
                <input type="hidden" name="s_f2" id="s_f2" value="0">
                <input type="hidden" name="s_g2" id="s_g2" value="0">
                <input type="hidden" name="s_a3" id="s_a3" value="0">
                <input type="hidden" name="s_b3" id="s_b3" value="0">
                <input type="hidden" name="s_c3" id="s_c3" value="0">
                <input type="hidden" name="s_d3" id="s_d3" value="0">
                <input type="hidden" name="s_e3" id="s_e3" value="0">
                <input type="hidden" name="s_f3" id="s_f3" value="0">
                <input type="hidden" name="s_g3" id="s_g3" value="0">
                <input type="hidden" name="s_a4" id="s_a4" value="0">
                <input type="hidden" name="s_b4" id="s_b4" value="0">
                <input type="hidden" name="s_c4" id="s_c4" value="0">
                <input type="hidden" name="s_d4" id="s_d4" value="0">
                <input type="hidden" name="s_e4" id="s_e4" value="0">
                <input type="hidden" name="s_f4" id="s_f4" value="0">
                <input type="hidden" name="s_g4" id="s_g4" value="0">

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru6" data-action="nav"
                  data-controls="soru6">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru8" data-action="nav"
                  data-controls="soru8">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru8" role="tabpanel" aria-labelledby="list-soru8-list">

            <div class="card">
              <div class="card-header">Algoritmik Düşünme (Değerlendirme, Genelleştirme)</div>
              <div class="card-body">
                <h5 class="card-title">Şifreli Mektup</h5>
                <p class="card-text">Bir postacı çantasındaki bir mektubu kutuların yönüne göre teslim edecektir. Mektubu teslim edebilmesi için programcı tarafından yazılan koda göre kutuları çevirmesi gerekmektedir. Örneğin, kutunun rengi yeşil, kırmızı veya mavi değilse kutuyu çevirmemelidir. Buna göre mektubun teslimat noktası neresidir?</p>

                <div class="card">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Programcı tarafından yazılan kod:</h6>
                    <kbd>EĞER</kbd> Kutu_Renk = Yeşil:<br>
                    <kbd>ÇEVİR</kbd> Kutu 90°<br>
                    <kbd>EĞER</kbd> Kutu_Renk = Kırmızı:<br>
                    <kbd>ÇEVİR</kbd> Kutu 270°<br>
                    <kbd>EĞER</kbd> Kutu_Renk = Mavi:<br>
                    <kbd>ÇEVİR</kbd> Kutu 180°<br>
                    <kbd>DEĞİLSE:</kbd><br>
                    <kbd>ÇEVİRME</kbd>
                  </div>
                </div>
                <br>
                <div class="card">
                  <div class="card-body" id="kutular">
                    <h6 class="card-subtitle mb-2 text-muted">Kutular:</h6>
                    <div data-toggle="tooltip" data-placement="top" title="Çevirmek için tıkla" class="sKutu bg-warning"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Çevirmek için tıkla" class="sKutu bg-success"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Çevirmek için tıkla" class="sKutu bg-warning"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Çevirmek için tıkla" class="sKutu bg-warning"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Çevirmek için tıkla" class="sKutu bg-danger"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Çevirmek için tıkla" class="sKutu bg-danger"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Çevirmek için tıkla" class="sKutu bg-primary"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Çevirmek için tıkla" class="sKutu bg-primary"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                  </div>
                </div>

                <br>
                <p class="card-text text-center"><img src="assets/img/soru/soru8.png" class="img-fluid"></p>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="mektup">Teslimat Noktası</label>
                    <select id="mektup" name="s8_c1" class="form-control" data-uyari="Şifreli Mektup: Teslimat Noktası" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">1. Teslimat Noktası</option>
                      <option value="2">2. Teslimat Noktası</option>
                      <option value="3">3. Teslimat Noktası</option>
                      <option value="4">4. Teslimat Noktası</option>
                      <option value="5">5. Teslimat Noktası</option>
                      <option value="6">6. Teslimat Noktası</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru7" data-action="nav"
                  data-controls="soru7">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru9" data-action="nav"
                  data-controls="soru9">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru9" role="tabpanel" aria-labelledby="list-soru9-list">

            <div class="card">
              <div class="card-header">Problem Çözme (Değerlendirme, Genelleştirme)</div>
              <div class="card-body">
                <h5 class="card-title">Balık Araştırması</h5>
                <p class="card-text">Bir grup bilim insanı farklı bölgelerdeki balık popülasyonunu incelemeye almıştır.
                  Elde edilen verilere göre soruları cevaplandır.</p>
                  <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Yıl</th>
                      <th scope="col">Türü</th>
                      <th scope="col">Popülasyon</th>
                      <th scope="col">Su Seviyesi (m)</th>
                      <th scope="col">Bölge</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>2010</th>
                      <td>Barbunya</td>
                      <td>6.000</td>
                      <td>50</td>
                      <td>Ege</td>
                    </tr>
                    <tr>
                      <th>2017</th>
                      <td>Hamsi</td>
                      <td>10.150</td>
                      <td>88</td>
                      <td>Karadeniz</td>
                    </tr>
                    <tr>
                      <th>2017</th>
                      <td>Hamsi</td>
                      <td>7.350</td>
                      <td>65</td>
                      <td>Marmara</td>
                    </tr>
                    <tr>
                      <th>2019</th>
                      <td>Kefal</td>
                      <td>2.350</td>
                      <td>38</td>
                      <td>Akdeniz</td>
                    </tr>
                    <tr>
                      <th>2014</th>
                      <td>Levrek</td>
                      <td>8.430</td>
                      <td>63</td>
                      <td>Marmara</td>
                    </tr>
                    <tr>
                      <th>2009</th>
                      <td>Uskumru</td>
                      <td>1.430</td>
                      <td>113</td>
                      <td>Karadeniz</td>
                    </tr>
                    <tr>
                      <th>2011</th>
                      <td>Barbunya</td>
                      <td>13.692</td>
                      <td>130</td>
                      <td>Akdeniz</td>
                    </tr>
                    <tr>
                      <th>2018</th>
                      <td>Kefal</td>
                      <td>6.350</td>
                      <td>74</td>
                      <td>Ege</td>
                    </tr>
                    <tr>
                      <th>2016</th>
                      <td>Uskumru</td>
                      <td>420</td>
                      <td>122</td>
                      <td>Marmara</td>
                    </tr>
                    <tr>
                      <th>2012</th>
                      <td>Kefal</td>
                      <td>5.150</td>
                      <td>69</td>
                      <td>Ege</td>
                    </tr>
                    <tr>
                      <th>2020</th>
                      <td>Levrek</td>
                      <td>2.150</td>
                      <td>47</td>
                      <td>Karadeniz</td>
                    </tr>
                    <tr>
                      <th>2013</th>
                      <td>Mezgit</td>
                      <td>9.850</td>
                      <td>83</td>
                      <td>Karadeniz</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="balik_s1">İlk veri hangi yılda elde edilmiştir?</label>
                    <select id="balik_s1" name="s9_c1" class="form-control" data-uyari="Balık Araştırması: İlk veri hangi yılda elde edilmiştir?" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">2005</option>
                      <option value="2">2008</option>
                      <option value="3">2010</option>
                      <option value="4">2009</option>
                      <option value="5">2011</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="balik_s2">Su seviyesinin en az olduğu bölge neresidir?</label>
                    <select id="balik_s2" name="s9_c2" class="form-control" data-uyari="Balık Araştırması: Su seviyesinin en az olduğu bölge neresidir?" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">Karadeniz</option>
                      <option value="2">Ege</option>
                      <option value="3">Marmara</option>
                      <option value="4">Akdeniz</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="balik_s3">Popülasyonu en çok olan balık hangisidir?</label>
                    <select id="balik_s3" name="s9_c3" class="form-control" data-uyari="Balık Araştırması: Popülasyonu en çok olan balık hangisidir?" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">Barbunya</option>
                      <option value="2">Hamsi</option>
                      <option value="3">Uskumru</option>
                      <option value="4">Mezgit</option>
                      <option value="5">Levrek</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="balik_s4">Hangi bölgede balık türü daha fazladır?</label>
                    <select id="balik_s4" name="s9_c4" class="form-control" data-uyari="Balık Araştırması: Hangi bölgede balık türü daha fazladır?" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="1">Karadeniz</option>
                      <option value="2">Ege</option>
                      <option value="3">Marmara</option>
                      <option value="4">Akdeniz</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru8" data-action="nav"
                  data-controls="soru8">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru10" data-action="nav"
                  data-controls="soru10">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru10" role="tabpanel" aria-labelledby="list-soru10-list">

            <div class="card">
              <div class="card-header">Ayrıştırma (Soyutlama, Algoritmik Düşünme)</div>
              <div class="card-body">
                <h5 class="card-title">Beş Çubuk</h5>
                <p class="card-text">Emre'nin beş çubuğu vardır. Beş çubuk ile 1. şekli elde etmiştir. Daha sonra Ayşe bir çubuğun yerini değiştirmiş ve 2. şekli elde etmiştir. En son adımda ise Elif de bir çubuğun yerini değiştirmiştir. Bu durumda Elif'in elde edemeyeceği şekil hangisidir?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru9.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="soru9">Şekil Numarası</label>
                    <select id="soru9" name="s10_c1" class="form-control" data-uyari="Beş Çubuk: Şekil Numarası" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                </div>
                <!-- /// sorunun açıklama bölümünde: CT Skills - Abstraction (AB), Algorithmic Thinking (AL), Decomposition (DE) {doğru cevap: 6}-->
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru9" data-action="nav"
                  data-controls="soru9">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru11" data-action="nav"
                  data-controls="soru11">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru11" role="tabpanel" aria-labelledby="list-soru11-list">

            <div class="card">
              <div class="card-header">Soyutlama (Değerlendirme, Algoritmik Düşünme)</div>
              <div class="card-body">
                <h5 class="card-title">Oto Kuaför</h5>
                <p class="card-text">Bir oto kuaförde aynı anda 3 araç yıkanmaktadır. Aynı anda beş otomobil gelmiş ve her bir otomobil geliş sırasına göre 1'den 5'e kadar numaralandırılmıştır. Otomobiller, geliş sırasına göre yıkama alanına alınmıştır. Otomobiller teslimat alanına geçişi sırasında geliş sırasının tam tersi şeklinde numaraları yer değiştirmiştir. Buna göre otomobiller hangi teslimat sırasına göre teslimat alanından çıkış yapmalıdır?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru10.png" class="img-fluid"></p>

                <!-- Buraya gelsin sortable -->
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5>Teslimat Sırası</h5>
                      <ul id="otoKuafor" class="list-group">
                        <li class="list-group-item list-group-item-action bg-dark text-white" data-arac="1">Siyah
                          Otomobil</li>
                        <li class="list-group-item list-group-item-action bg-danger text-white" data-arac="2">Kırmızı
                          Otomobil</li>
                        <li class="list-group-item list-group-item-action bg-success text-white" data-arac="3">Yeşil
                          Otomobil</li>
                        <li class="list-group-item list-group-item-action bg-warning" data-arac="4">Sarı Otomobil</li>
                        <li class="list-group-item list-group-item-action bg-primary text-white" data-arac="5">Mavi
                          Otomobil</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="text" name="s11_c1" id="otocevap" data-uyari="Oto Kuaför: Teslimat Sırası" class="d-none" required>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru10" data-action="nav"
                  data-controls="soru10">Önceki Adım</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru12" data-action="nav"
                  data-controls="soru12">Sonraki Adıma Geç</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru12" role="tabpanel" aria-labelledby="list-soru12-list">

            <div class="card">
              <div class="card-header">Soyutlama (Değerlendirme, Algoritmik Düşünme)</div>
              <div class="card-body">
                <h5 class="card-title">Kitap Kulübü</h5>
                <p class="card-text">Bir kitap kulübünde 7 öğrenci arasındaki ilişki grafikte gösterilmiştir. Bu grafiğe göre öğrencilerin isimleri ve yaşları bilinmektedir. Kitap kulübünün bazı kuralları vardır:</p>
                <p class="card-text">Eğer kitabı henüz okumadıysanız, kitabı aldığınızda okuyun ve okuduktan sonra kitabı okumayanlar arasından en genç arkadaşınıza verin. Eğer arkadaşlarınızın hepsi kitabı okuduysa, o kitabı size ilk veren arkadaşınıza vermelisiniz. Örneğin, Emre, Ayşe, Özgen ve Elif ile arkadaştır ve Emre'nin en genç arkadaşı Ayşe'dir.</p>
                <p class="card-text">Kitabı okuyan ilk Emre olduğuna göre kitabı okuyan en son kişi kimdir?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru11.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="soru12">Kitabı Okuyan En Son Kişi</label>
                    <select id="soru12" name="s12_c1" class="form-control" data-uyari="Kitap Kulübü: Kitabı Okuyan En Son Kişi" required>
                      <option value="0" selected disabled>Seçim Yap</option>
                      <option value="2">Ayşe</option>
                      <option value="6">Özgen</option>
                      <option value="3">Beril</option>
                      <option value="4">Murat</option>
                      <option value="7">Elif</option>
                      <option value="5">Ali</option>
                    </select>
                  </div>
                </div>
               <!--  /////  açıklamada bu soruya ilişkin beceriler: CT Skills - Abstraction (AB), Algorithmic Thinking (AL), Evaluation (EV) {doğru cevap: özgen}-->
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru11" data-action="nav"
                  data-controls="soru11">Önceki Adım</a>
                <input class="btn btn-success" type="submit" id="submit" value="Tamamla">
                
              </div>
            </div>

          </div>
          
        </div>

      
      </form>
    </div>
    </div>
  </div>

<?php include 'assets/inc/footer.php';?>

<!-- alert modal -->
<!-- Modal -->
<div class="modal fade" id="controlModal" tabindex="-1" role="dialog" aria-labelledby="controlModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="controlModalLongTitle">Uyarı</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" role="alert">
        Lütfen tüm alanları eksiksiz bir şekilde tamamlayın.
        </div>
        <div id="gereklialanlar"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tamam</button>
      </div>
    </div>
  </div>
</div>
<!-- alert modal -->

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/Sortable.js"></script>
  <script>
    $('#submit').on('click', function() {
        var valid = true,
            message = '';

        $('form input, form select').each(function() {
          //var $this = $(this).find(':input');
            var $this = $(this);

            if(!$this.val()) {
                var inputName = $this.attr('data-uyari');
                valid = false;
                message += '<li>' + inputName + '</li>';
            }
        });

        if(!valid) {
            $('#gereklialanlar').html('<ul>' + message + '</ul>');
            $('#controlModal').modal('show');
        }
    });
    $('a[data-action=nav]').on('click', function () {
      let element = $(this).attr('data-controls');
      $('.list-group a.active').removeClass('active');
      $('a[aria-controls=' + element + ']').addClass('active');
      let thiss = $(this);
      setTimeout(function () {
        thiss.removeClass('active');
      }, 1);
    });

    // Drag-Drop-List1
    Sortable.create(turRehberi1, {
      group: {
        name: 'shared',
        pull: 'clone'
      },
      animation: 150,
      onEnd: function (evt) {
        var li;
        var guzergah = new Array();
        $('#turRehberi2 li').each(function () {
          li = $(this).data('mekan');
          guzergah.push(li);
        });
        $("#rota").val(guzergah);
        
      },
    });
    Sortable.create(turRehberi2, {
      group: 'shared',
      animation: 150,
      onEnd: function (evt) {
        var li;
        var guzergah = new Array();
        $('#turRehberi2 li').each(function () {
          li = $(this).data('mekan');
          guzergah.push(li);
        });
        $("#rota").val(guzergah);
        

      },
    });

    Sortable.create(muhendis, {
      animation: 150,
      onEnd: function (evt) {
        var yeniLi;
        var muhcvp = new Array();
        $('#muhendis li').each(function () {
          yeniLi = $(this).data('muh');
          muhcvp.push(yeniLi);
        });
        $("#muhcevap").val(muhcvp);

      },
    });

    Sortable.create(otoKuafor, {
      animation: 150,
      onEnd: function (evt) {
        var yeniLi;
        var otocvp = new Array();
        $('#otoKuafor li').each(function () {
          yeniLi = $(this).data('arac');
          otocvp.push(yeniLi);
        });
        $("#otocevap").val(otocvp);

      },
    });


    $('#sayibul td').on('click', function () {
      if ($(this).attr('data-sayibul') == 0) {
        $(this).css('background-color', 'red');
        $(this).attr('data-sayibul', '1');
        $('#s_' + $(this).attr('id').split('_')[1]).val('1');
      } else {
        $(this).css('background-color', 'white');
        $(this).attr('data-sayibul', '0');
        $('#s_' + $(this).attr('id').split('_')[1]).val('0');
      }
    });

    $('#kutular .sKutu').on('click', function () {
      var derecesi = $(this).data('derece');
      var yeniderece = derecesi + 90;
      $(this).css({ 'transition-duration': '500ms', 'transform': 'rotate(' + yeniderece + 'deg)' });
      $(this).data('derece', yeniderece);
    });
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });

    //kriptolu metin
    function allowDrop(ev) {
      ev.preventDefault();
    }

    function drag(ev) {
      ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev) {
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
    }

  </script>
</body>

</html>