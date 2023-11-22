<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get your score - Computational Thinking Score</title>
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
            <h5 class="mb-1">Beginning</h5>
            <small>Profile</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru1-list" data-toggle="list" href="#list-soru1"
            role="tab" aria-controls="soru1">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Weird Dog</h5>
              <small>1</small>
            </div>
            <small>Recognition Pattern</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru2-list" data-toggle="list" href="#list-soru2"
            role="tab" aria-controls="soru2">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Encrypted Text</h5>
              <small>2</small>
            </div>
            <small>Creative Thinking</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru3-list" data-toggle="list" href="#list-soru3"
            role="tab" aria-controls="soru3">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Tour Guide</h5>
              <small>3</small>
            </div>
            <small>Creative Thinking</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru4-list" data-toggle="list" href="#list-soru4"
            role="tab" aria-controls="soru4">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Temperature Sensor</h5>
              <small>4</small>
            </div>
            <small>Algorithmic Thinking</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru5-list" data-toggle="list" href="#list-soru5"
            role="tab" aria-controls="soru5">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Engineer Team</h5>
              <small>5</small>
            </div>
            <small>Problem Solving</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru6-list" data-toggle="list" href="#list-soru6"
            role="tab" aria-controls="soru6">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Candy Maze</h5>
              <small>6</small>
            </div>
            <small>Algorithmic Thinking</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru7-list" data-toggle="list" href="#list-soru7"
            role="tab" aria-controls="soru7">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Hidden Number</h5>
              <small>7</small>
            </div>
            <small>Critical Thinking</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru8-list" data-toggle="list" href="#list-soru8"
            role="tab" aria-controls="soru8">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Cipher Mail</h5>
              <small>8</small>
            </div>
            <small>Algorithmic Thinking</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru9-list" data-toggle="list" href="#list-soru9"
            role="tab" aria-controls="soru9">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Fish Research</h5>
              <small>9</small>
            </div>
            <small>Problem Solving</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru10-list" data-toggle="list" href="#list-soru10"
            role="tab" aria-controls="soru10">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Five Sticks</h5>
              <small>10</small>
            </div>
            <small>Decomposition</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru11-list" data-toggle="list" href="#list-soru11"
            role="tab" aria-controls="soru11">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Car Wash</h5>
              <small>11</small>
            </div>
            <small>Abstraction</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru12-list" data-toggle="list" href="#list-soru12"
            role="tab" aria-controls="soru12">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Book Club</h5>
              <small>12</small>
            </div>
            <small>Abstraction</small>
          </a>
        </div>

      </div>
      
      <div class="col-lg-8 my-4">
        <form id="cttest" action="result.php" method="POST">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-baslangic" role="tabpanel"
            aria-labelledby="list-baslangic-list">

            <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">Welcome!</h4>
              <p>Before you start the questions, you must complete your own information. You will be able to see your current stage in the left menu. You can switch between questions and start with the one you want.</p>
              <hr>
              <p class="mb-0">In order to see the Computational Thinking score, you need to fill in <strong>all fields completely</strong>.</p>
              <hr>
              <p class="mb-0">For any problems or questions, you can send an e-mail to <strong>emre@emrecoban.com.tr</strong>.</p>
            </div>

            <div class="card panel-primary">
              <div class="card-header">
               Profile
              </div>
              <div class="card-body">

                <div class="form-group">
                  <label for="inputCity">Nickname</label>
                  <input type="text" class="form-control text-uppercase" id="adsoyad" name="adsoyad" maxlength="30" data-uyari="Profile: Nickname" required>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3" style="display:none;">
                    <label for="okulno">School Number</label>
                    <input type="text" class="form-control" id="okulno" name="okulno" value="<?=rand(10,999)?>" maxlength="8" data-uyari="Profile: School Number" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="okultip">School Type</label>
                    <select id="okultip" name="okultip" class="form-control" data-uyari="Profile: School Type" required>
                      <option value="1" selected>Skip this field</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="cinsiyet">Gender</label>
                    <select id="cinsiyet" name="cinsiyet" class="form-control" data-uyari="Profile: Gender" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="1">Woman</option>
                      <option value="2">Man</option>
                      <option value="3">Other</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="sinif">Level/Course/Class</label>
                    <select id="sinif" name="sinif" class="form-control" data-uyari="Profile: Grade" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="1">1st</option>
                      <option value="2">2nd</option>
                      <option value="3">3rd</option>
                      <option value="4">4th</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-primary" data-toggle="list" href="#list-soru1" data-action="nav"
                  data-controls="soru1">Next</a>
              </div>
            </div>

          </div>


          <div class="tab-pane fade" id="list-soru1" role="tabpanel" aria-labelledby="list-soru1-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Recognition Pattern</span> <span class="badge badge-secondary p-2">Decomposition</span></div>
              <div class="card-body">
                <h5 class="card-title">Weird Dog</h5>
                <p class="card-text">In each row, identify the dog that does not fit the column (vertical pattern).</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru1.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="satir1">1. Row</label>
                    <select id="satir1" name="s1_c1" class="form-control" data-uyari="Weird Dog: 1. Row" required>
                      <option value="0" selected disabled>Select</option>
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
                    <label for="satir2">2. Row</label>
                    <select id="satir2" name="s1_c2" class="form-control" data-uyari="Weird Dog: 2. Row" required>
                      <option value="0" selected disabled>Select</option>
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
                    <label for="satir3">3. Row</label>
                    <select id="satir3" name="s1_c3" class="form-control" data-uyari="Weird Dog: 3. Row" required>
                      <option value="0" selected disabled>Select</option>
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
                    <label for="satir4">4. Row</label>
                    <select id="satir4" name="s1_c4" class="form-control" data-uyari="Weird Dog: 4. Row" required>
                      <option value="0" selected disabled>Select</option>
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
                  data-controls="baslangic">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru2" data-action="nav"
                  data-controls="soru2">Next</a>
              </div>
            </div>


          </div>
          <div class="tab-pane fade" id="list-soru2" role="tabpanel" aria-labelledby="list-soru2-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Creative Thinking</span> <span class="badge badge-secondary p-2">Evaluation</span> <span class="badge badge-secondary p-2">Generalization</span></div>
              <div class="card-body">
                <h5 class="card-title">Encrypted Text</h5>
                <p class="card-text">Each letter of the alphabet is numbered with different numbers. Some letter matches are given in the message. You can match each letter in the key by dropping it on the numbers. Complete the key accordingly and decrypt the message. Then write the message you found in the Encrypted Message box. Hint: Reverse.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru2.png" class="img-fluid"></p>

                <div class="card">
                  <div class="card-body">
                    <div class="card-title">Key</div>
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
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="alfabeKutu" id="abc1" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba1" draggable="true" ondragstart="drag(event)">A</span></div>
                          <div class="alfabeKutu" id="abc2" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba2" draggable="true" ondragstart="drag(event)">B</span></div>
                          <div class="alfabeKutu" id="abc3" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba3" draggable="true" ondragstart="drag(event)">C</span></div>
                          <div class="alfabeKutu" id="abc4" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba4" draggable="true" ondragstart="drag(event)">D</span></div>
                          <div class="alfabeKutu" id="abc5" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba5" draggable="true" ondragstart="drag(event)">E</span></div>
                          <div class="alfabeKutu" id="abc6" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba6" draggable="true" ondragstart="drag(event)">F</span></div>
                          <div class="alfabeKutu" id="abc7" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba7" draggable="true" ondragstart="drag(event)">G</span></div>
                          <div class="alfabeKutu" id="abc8" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba8" draggable="true" ondragstart="drag(event)">H</span></div>
                          <div class="alfabeKutu" id="abc9" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba9" draggable="true" ondragstart="drag(event)">I</span></div>
                          <div class="alfabeKutu" id="abc10" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba10" draggable="true" ondragstart="drag(event)">J</span></div>
                          <div class="alfabeKutu" id="abc11" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba11" draggable="true" ondragstart="drag(event)">K</span></div>
                          <div class="alfabeKutu" id="abc12" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba12" draggable="true" ondragstart="drag(event)">L</span></div>
                          <div class="alfabeKutu" id="abc13" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba13" draggable="true" ondragstart="drag(event)">M</span></div>
                          <div class="alfabeKutu" id="abc14" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba14" draggable="true" ondragstart="drag(event)">N</span></div>
                          <div class="alfabeKutu" id="abc15" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba15" draggable="true" ondragstart="drag(event)">O</span></div>
                          <div class="alfabeKutu" id="abc16" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba16" draggable="true" ondragstart="drag(event)">P</span></div>
                          <div class="alfabeKutu" id="abc17" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba17" draggable="true" ondragstart="drag(event)">Q</span></div>
                          <div class="alfabeKutu" id="abc18" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba18" draggable="true" ondragstart="drag(event)">R</span></div>
                          <div class="alfabeKutu" id="abc19" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba19" draggable="true" ondragstart="drag(event)">S</span></div>
                          <div class="alfabeKutu" id="abc20" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba20" draggable="true" ondragstart="drag(event)">T</span></div>
                          <div class="alfabeKutu" id="abc21" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba21" draggable="true" ondragstart="drag(event)">U</span></div>
                          <div class="alfabeKutu" id="abc22" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba22" draggable="true" ondragstart="drag(event)">V</span></div>
                          <div class="alfabeKutu" id="abc23" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba23" draggable="true" ondragstart="drag(event)">W</span></div>
                          <div class="alfabeKutu" id="abc24" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba24" draggable="true" ondragstart="drag(event)">X</span></div>
                          <div class="alfabeKutu" id="abc25" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba25" draggable="true" ondragstart="drag(event)">Y</span></div>
                          <div class="alfabeKutu" id="abc26" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba26" draggable="true" ondragstart="drag(event)">Z</span></div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>

                
                
                <p class="card-text">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="sifrelimesaj">Encrypted Message</label>
                      <input type="text" name="s2_c1" class="form-control text-uppercase" id="sifrelimesaj" maxlength="30" data-uyari="Encrypted Message" required>
                    </div>
                  </div>
                </p>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru1" data-action="nav"
                  data-controls="soru1">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru3" data-action="nav"
                  data-controls="soru3">Next</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru3" role="tabpanel" aria-labelledby="list-soru3-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Creative Thinking</span> <span class="badge badge-secondary p-2">Algorithmic Thinking</span> <span class="badge badge-secondary p-2">Evaluation</span></div>
              <div class="card-body">
                <h5 class="card-title">Tour Guide</h5>
                <p class="card-text">As a tour guide in a hotel, you have to show tourists around. While guiding the tourists, you have to reach the hotel without passing through a place twice. You can get help from the map for this. The route must start and end with the hotel and the tourists must visit all the places. You can drag and drop the locations on the route with the mouse.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru3.png" class="img-fluid"></p>

                <!-- Buraya gelsin sortable -->
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5>Locations</h5>
                      <ul id="turRehberi1" class="list-group">
                        <li class="list-group-item list-group-item-action" data-mekan="0">Hotel</li>
                        <li class="list-group-item list-group-item-action" data-mekan="1">Park</li>
                        <li class="list-group-item list-group-item-action" data-mekan="2">Aquarium</li>
                        <li class="list-group-item list-group-item-action" data-mekan="3">Beach</li>
                        <li class="list-group-item list-group-item-action" data-mekan="4">Art Gallery</li>
                        <li class="list-group-item list-group-item-action" data-mekan="5">Science Museum</li>
                        <li class="list-group-item list-group-item-action" data-mekan="6">University</li>
                        <li class="list-group-item list-group-item-action" data-mekan="7">Factory</li>
                        <li class="list-group-item list-group-item-action" data-mekan="8">Castle</li>
                        <li class="list-group-item list-group-item-action" data-mekan="9">Bridge</li>
                      </ul>
                    </div>
                    <div class="col">
                      <h5>Route</h5>
                      <ul id="turRehberi2" class="list-group" style="height:550px;">
                        <li class="list-group-item list-group-item-action" data-mekan="0">Hotel</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="text" name="s3_c1" id="rota"  class="d-none" data-uyari="Tour Guide" required>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru2" data-action="nav"
                  data-controls="soru2">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru4" data-action="nav"
                  data-controls="soru4">Next</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru4" role="tabpanel" aria-labelledby="list-soru4-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Algorithmic Thinking</span> <span class="badge badge-secondary p-2">Evaluation</span></div>
              <div class="card-body">
                <h5 class="card-title">Temperature Sensor</h5>
                <p class="card-text">A computer programmer measured the temperature value with temperature sensors placed at different points on metal iron. In order to make this measurement, he loaded the code he had written before into the programmable circuit. In which option is the output of the code correctly given?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru4.png" class="img-fluid"></p>

                <div class="card">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Code written by the programmer:</h6>
                    <kbd>LOOP FOREVER</kbd>:<br>
                    val1 = <kbd>READ</kbd>(1) <br>
                    val2 = <kbd>READ</kbd>(2)<br>
                    val3 = <kbd>READ</kbd>(3)<br>
                    val4 = <kbd>READ</kbd>(4)<br>
                    val5 = <kbd>READ</kbd>(5)<br>
                    <kbd>WRITE</kbd> 1, val1, time<br>
                    <kbd>WRITE</kbd> 2, val2, time<br>
                    <kbd>WRITE</kbd> 3, val3, time<br>
                    <kbd>WRITE</kbd> 4, val4, time<br>
                    <kbd>WRITE</kbd> 5, val5, time<br>
                    <kbd>WAIT</kbd> 20 seconds
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
                              <input type="radio" name="s4_c1" id="s4_c1" value="1" data-uyari="Temperature Sensor" required>
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
                              <input type="radio" name="s4_c1" id="s4_c2" value="2" data-uyari="Temperature Sensor">
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
                              <input type="radio" name="s4_c1" id="s4_c3" value="3" data-uyari="Temperature Sensor">
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
                              <input type="radio" name="s4_c1" id="s4_c4" value="4" data-uyari="Temperature Sensor">
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
                  data-controls="soru3">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru5" data-action="nav"
                  data-controls="soru5">Next</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="list-soru5" role="tabpanel" aria-labelledby="list-soru5-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Problem Solving</span> <span class="badge badge-secondary p-2">Algorithmic Thinking</span> <span class="badge badge-secondary p-2">Evaluation</span></div>
              <div class="card-body">
                <h5 class="card-title">Engineer Team</h5>
                <p class="card-text">A group of engineers have developed a remote-controlled vehicle. But they programmed the route of the remote-controlled vehicle incorrectly. You need to re-sequence the route so that the remote controlled vehicle reaches its destination.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru5.png" class="img-fluid"></p>

                <!-- Buraya gelsin sortable -->
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5>Rota</h5>
                      <ul id="muhendis" class="list-group">
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">East
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">East
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">South
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">East
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">West
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-primary" data-muh="4">North
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">South
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">East
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">West
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">East
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">South
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">East
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">West
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">East
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-primary" data-muh="4">North
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">South
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">East
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">West
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="text" name="s5_c1" id="muhcevap" data-uyari="Engineer Team" class="d-none" required>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru4" data-action="nav"
                  data-controls="soru4">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru6" data-action="nav"
                  data-controls="soru6">Next</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru6" role="tabpanel" aria-labelledby="list-soru6-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Algorithmic Thinking</span> <span class="badge badge-secondary p-2">Abstraction</span> <span class="badge badge-secondary p-2">Evaluation</span> <span class="badge badge-secondary p-2">Generalization</span></div>
              <div class="card-body">
                <h5 class="card-title">Candy Maze</h5>
                <p class="card-text">A robot is programmed to collect as much candy as possible. The robot collects candies as it passes through each cell. Each cell has 0, 1, 2 and 3 candies. The robot can only move up and to the right. How many candies has the robot collected at most?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru6.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="seker">Candy Count</label>
                    <select id="seker" name="s6_c1" class="form-control" data-uyari="Candy Count" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="1">10 Candy</option>
                      <option value="5">11 Candy</option>
                      <option value="2">12 Candy</option>
                      <option value="3">14 Candy</option>
                      <option value="4">16 Candy</option>
                    </select>
                  </div>
                </div>
                
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru5" data-action="nav"
                  data-controls="soru5">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru7" data-action="nav"
                  data-controls="soru7">Next</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru7" role="tabpanel" aria-labelledby="list-soru7-list">
            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Critical Thinking</span> <span class="badge badge-secondary p-2">Abstraction</span> <span class="badge badge-secondary p-2">Evaluation</span> <span class="badge badge-secondary p-2">Decomposition</span></div>
              <div class="card-body">
                <h5 class="card-title">Hidden Number</h5>
                <p class="card-text">A computer programmer wants to display digital numbers using 7 LEDs. Each LED part is labeled as shown in the picture (A, B, C, D, E, F and G).
                Which LED parts should the programmer turn on to write the number <kbd>6813</kbd>? For example, the number 103 is shown in the picture.</p>
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
                  data-controls="soru6">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru8" data-action="nav"
                  data-controls="soru8">Next</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru8" role="tabpanel" aria-labelledby="list-soru8-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Algorithmic Thinking</span> <span class="badge badge-secondary p-2">Evaluation</span> <span class="badge badge-secondary p-2">Generalization</span></div>
              <div class="card-body">
                <h5 class="card-title">Cipher Mail</h5>
                <p class="card-text">A postwoman will deliver a letter in his bag according to the orientation of the boxes. In order to deliver the letter, she needs to turn the boxes according to the code written by the programmer. Where is the delivery point of the letter?</p>

                <div class="card">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Code written by the programmer:</h6>
                    <kbd>IF</kbd> Box_Color = Green:<br>
                    <kbd>TURN</kbd> Box 90°<br>
                    <kbd>IF</kbd> Box_Color = Red:<br>
                    <kbd>TURN</kbd> Box 270°<br>
                    <kbd>IF</kbd> Box_Color = Blue:<br>
                    <kbd>TURN</kbd> Box 180°<br>
                    <kbd>IF NOT:</kbd><br>
                    <kbd>DON'T TURN</kbd>
                  </div>
                </div>
                <br>
                <div class="card">
                  <div class="card-body" id="kutular">
                    <h6 class="card-subtitle mb-2 text-muted">Boxes (Click on it):</h6>
                    <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-warning"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-success"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-warning"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-warning"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-danger"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-danger"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-primary"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Click on it" class="sKutu bg-primary"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                  </div>
                </div>

                <br>
                <p class="card-text text-center"><img src="assets/img/soru/soru8.png" class="img-fluid"></p>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="mektup">Delivery Point</label>
                    <select id="mektup" name="s8_c1" class="form-control" data-uyari="Delivery Point" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="1">1. Delivery Point</option>
                      <option value="2">2. Delivery Point</option>
                      <option value="3">3. Delivery Point</option>
                      <option value="4">4. Delivery Point</option>
                      <option value="5">5. Delivery Point</option>
                      <option value="6">6. Delivery Point</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru7" data-action="nav"
                  data-controls="soru7">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru9" data-action="nav"
                  data-controls="soru9">Next</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru9" role="tabpanel" aria-labelledby="list-soru9-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Problem Solving</span> <span class="badge badge-secondary p-2">Evaluation</span> <span class="badge badge-secondary p-2">Generalization</span></div>
              <div class="card-body">
                <h5 class="card-title">Fish Research</h5>
                <p class="card-text">A group of scientists studied fish populations in different regions. Answer the questions according to the data obtained.</p>
                  <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Year</th>
                      <th scope="col">Type</th>
                      <th scope="col">Population</th>
                      <th scope="col">Water Level (m)</th>
                      <th scope="col">Region</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>2010</th>
                      <td>Bean</td>
                      <td>6.000</td>
                      <td>50</td>
                      <td>Aegean</td>
                    </tr>
                    <tr>
                      <th>2017</th>
                      <td>Anchovy</td>
                      <td>10.150</td>
                      <td>88</td>
                      <td>Euxine Sea</td>
                    </tr>
                    <tr>
                      <th>2017</th>
                      <td>Anchovy</td>
                      <td>7.350</td>
                      <td>65</td>
                      <td>Marmara</td>
                    </tr>
                    <tr>
                      <th>2019</th>
                      <td>Gray Mullet</td>
                      <td>2.350</td>
                      <td>38</td>
                      <td>Mediterranean</td>
                    </tr>
                    <tr>
                      <th>2014</th>
                      <td>Sea Bass</td>
                      <td>8.430</td>
                      <td>63</td>
                      <td>Marmara</td>
                    </tr>
                    <tr>
                      <th>2009</th>
                      <td>Mackerel</td>
                      <td>1.430</td>
                      <td>113</td>
                      <td>Euxine Sea</td>
                    </tr>
                    <tr>
                      <th>2011</th>
                      <td>Bean</td>
                      <td>13.692</td>
                      <td>130</td>
                      <td>Mediterranean</td>
                    </tr>
                    <tr>
                      <th>2018</th>
                      <td>Gray Mullet</td>
                      <td>6.350</td>
                      <td>74</td>
                      <td>Aegean</td>
                    </tr>
                    <tr>
                      <th>2016</th>
                      <td>Mackerel</td>
                      <td>420</td>
                      <td>122</td>
                      <td>Marmara</td>
                    </tr>
                    <tr>
                      <th>2012</th>
                      <td>Gray Mullet</td>
                      <td>5.150</td>
                      <td>69</td>
                      <td>Aegean</td>
                    </tr>
                    <tr>
                      <th>2020</th>
                      <td>Sea Bass</td>
                      <td>2.150</td>
                      <td>47</td>
                      <td>Euxine Sea</td>
                    </tr>
                    <tr>
                      <th>2013</th>
                      <td>Whiting Fish</td>
                      <td>9.850</td>
                      <td>83</td>
                      <td>Euxine Sea</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="balik_s1">In which year was the first data obtained?</label>
                    <select id="balik_s1" name="s9_c1" class="form-control" data-uyari="Fish Research 1" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="1">2005</option>
                      <option value="2">2008</option>
                      <option value="3">2010</option>
                      <option value="4">2009</option>
                      <option value="5">2011</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="balik_s4">Which region has more fish species?</label>
                    <select id="balik_s4" name="s9_c4" class="form-control" data-uyari="Fish Research 2" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="1">Euxine Sea</option>
                      <option value="2">Aegean</option>
                      <option value="3">Marmara</option>
                      <option value="4">Mediterranean</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="balik_s3">Which fish will have the highest population between 2016 and 2020?</label>
                    <select id="balik_s3" name="s9_c3" class="form-control" data-uyari="Fish Research 3" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="1">Bean</option>
                      <option value="2">Anchovy</option>
                      <option value="3">Mackerel</option>
                      <option value="4">Whiting Fish</option>
                      <option value="5">Sea Bass</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="balik_s2">Where is the region with the lowest water level between 2017-2019?</label>
                    <select id="balik_s2" name="s9_c2" class="form-control" data-uyari="Fish Research 4" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="1">Euxine Sea</option>
                      <option value="2">Aegean</option>
                      <option value="3">Marmara</option>
                      <option value="4">Mediterranean</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru8" data-action="nav"
                  data-controls="soru8">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru10" data-action="nav"
                  data-controls="soru10">Next</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru10" role="tabpanel" aria-labelledby="list-soru10-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Decomposition</span> <span class="badge badge-secondary p-2">Abstraction</span> <span class="badge badge-secondary p-2">Algorithmic Thinking</span></div>
              <div class="card-body">
                <h5 class="card-title">Five Sticks</h5>
                <p class="card-text">Emre has five sticks. He obtained the 1st shape with five sticks. Then Ayşe moved one stick and obtained the 2nd shape. In the last step, Elif also moved one stick. In this case, which shape cannot be obtained by Elif?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru9.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="soru9">Shape Number</label>
                    <select id="soru9" name="s10_c1" class="form-control" data-uyari="Five Number" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                </div>
                
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru9" data-action="nav"
                  data-controls="soru9">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru11" data-action="nav"
                  data-controls="soru11">Next</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru11" role="tabpanel" aria-labelledby="list-soru11-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Abstraction</span> <span class="badge badge-secondary p-2">Evaluation</span> <span class="badge badge-secondary p-2">Algorithmic Thinking</span></div>
              <div class="card-body">
                <h5 class="card-title">Car Wash</h5>
                <p class="card-text">Three cars can be washed at the same time in a car wash. Five cars come to this car wash and each car is numbered from 1 to 5. Cars were taken into the washing area from smallest to largest according to the numbers they had. After the washing process of the cars was over, the numbers were reversed and the cars left the washing area in descending order according to the numbers they had.<br><br>According to this, what is the delivery order of the cars? You can change the Delivery Order by drag and drop.
                <!-- Bir oto kuaförde aynı anda 3 araç yıkanabilmektedir. Aynı anda beş otomobil gelmiş ve her bir otomobil geliş sırasına göre 1'den 5'e kadar numaralandırılmıştır. <u>Otomobiller, geliş sırasına göre yıkama alanına alınmıştır.</u> Otomobiller teslimat alanına geçişi sırasında geliş sırasının tam tersi şeklinde numaraları yer değiştirmiştir.<br><br>Buna göre otomobiller hangi teslimat sırasına göre teslimat alanından çıkış yapmalıdır? Teslimat Sırasını sürükle-bırak yöntemiyle değiştirebilirsin.--></p>
                <p class="card-text text-center"><img src="assets/img/soru/soru10.png" class="img-fluid"></p>

                <!-- Buraya gelsin sortable -->
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5>Delivery Order</h5>
                      <ul id="otoKuafor" class="list-group">
                        <li class="list-group-item list-group-item-action bg-dark text-white" data-arac="1">Black Car</li>
                        <li class="list-group-item list-group-item-action bg-danger text-white" data-arac="2">Red Car</li>
                        <li class="list-group-item list-group-item-action bg-success text-white" data-arac="3">Green Car</li>
                        <li class="list-group-item list-group-item-action bg-warning" data-arac="4">Yellow Car</li>
                        <li class="list-group-item list-group-item-action bg-primary text-white" data-arac="5">Blue Car</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="text" name="s11_c1" id="otocevap" data-uyari="Car Wash" class="d-none" required>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru10" data-action="nav"
                  data-controls="soru10">Previous step</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru12" data-action="nav"
                  data-controls="soru12">Next</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru12" role="tabpanel" aria-labelledby="list-soru12-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Abstraction</span> <span class="badge badge-secondary p-2">Evaluation</span> <span class="badge badge-secondary p-2">Algorithmic Thinking</span></div>
              <div class="card-body">
                <h5 class="card-title">Book Club</h5>
                <p class="card-text">The relationship between 7 students in a book club is shown in the graph. According to this graph, the names and ages of the students are known. The book club has some rules:</p>
                <p class="card-text">If you haven't read the book yet, read it when you get it and then give it to the youngest friend who hasn't read it. If all your friends have read the book, you should give it to the friend who gave it to you first. For example, Emre is friends with Ayşe, Özgen and Elif and Emre's youngest friend is Ayşe.</p>
                <p class="card-text">Since Emre was the first person to read the book, who is the last person to read the book? (No one has read the book before)</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru11.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="soru12">The Last Person to Read the Book</label>
                    <select id="soru12" name="s12_c1" class="form-control" data-uyari="Book Club" required>
                      <option value="0" selected disabled>Select</option>
                      <option value="2">Ayşe</option>
                      <option value="6">Özgen</option>
                      <option value="3">Beril</option>
                      <option value="4">Murat</option>
                      <option value="7">Elif</option>
                      <option value="5">Ali</option>
                    </select>
                  </div>
                </div>
               
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru11" data-action="nav"
                  data-controls="soru11">Previous step</a>
                <input class="btn btn-success" type="submit" id="submit" value="Finish">
                
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
        <h5 class="modal-title" id="controlModalLongTitle">Warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" role="alert">
        Please complete all fields in full.
        </div>
        <div id="gereklialanlar"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>
      </div>
    </div>
  </div>
</div>
<!-- alert modal -->

  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/Sortable.js"></script>
  <script src="assets/js/jquery.validate.min.js"></script>
  <script>
  
    $('#submit').on('click', function() {
        var valid = true,
            message = '';

        $("form input, form select").each(function() {
          //var $this = $(this).find(':input');
            var $this = $(this);
            //|| ($this.attr('type')=='radio' && !$this.is(':checked'))
            if(!$this.val() || ($this.attr('type')=='radio' && !$("input[name=" + $this.attr('name') + "]").is(':checked'))) {
                
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