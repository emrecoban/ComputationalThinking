<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Obtenga su puntuación - Computational Thinking Score</title>
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
            <h5 class="mb-1">Inicio</h5>
            <small>Perfil</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru1-list" data-toggle="list" href="#list-soru1"
            role="tab" aria-controls="soru1">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Perro raro</h5>
              <small>1</small>
            </div>
            <small>Reconocimiento de patrones</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru2-list" data-toggle="list" href="#list-soru2"
            role="tab" aria-controls="soru2">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Texto encriptado</h5>
              <small>2</small>
            </div>
            <small>Pensamiento creativo</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru3-list" data-toggle="list" href="#list-soru3"
            role="tab" aria-controls="soru3">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Guía turística</h5>
              <small>3</small>
            </div>
            <small>Pensamiento creativo</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru4-list" data-toggle="list" href="#list-soru4"
            role="tab" aria-controls="soru4">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sensor de temperatura</h5>
              <small>4</small>
            </div>
            <small>Pensamiento algorítmico</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru5-list" data-toggle="list" href="#list-soru5"
            role="tab" aria-controls="soru5">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Equipo de ingenieros</h5>
              <small>5</small>
            </div>
            <small>Resolución de problemas</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru6-list" data-toggle="list" href="#list-soru6"
            role="tab" aria-controls="soru6">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Laberinto de caramelos</h5>
              <small>6</small>
            </div>
            <small>Pensamiento algorítmico</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru7-list" data-toggle="list" href="#list-soru7"
            role="tab" aria-controls="soru7">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Número oculto</h5>
              <small>7</small>
            </div>
            <small>Pensamiento crítico</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru8-list" data-toggle="list" href="#list-soru8"
            role="tab" aria-controls="soru8">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Correo cifrado</h5>
              <small>8</small>
            </div>
            <small>Pensamiento algorítmico</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru9-list" data-toggle="list" href="#list-soru9"
            role="tab" aria-controls="soru9">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Investigación pesquera</h5>
              <small>9</small>
            </div>
            <small>Resolución de problemas</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru10-list" data-toggle="list" href="#list-soru10"
            role="tab" aria-controls="soru10">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Cinco palos</h5>
              <small>10</small>
            </div>
            <small>Descomposición</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru11-list" data-toggle="list" href="#list-soru11"
            role="tab" aria-controls="soru11">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Lavado de coches</h5>
              <small>11</small>
            </div>
            <small>Abstracción</small>
          </a>
          <a class="list-group-item list-group-item-action" id="list-soru12-list" data-toggle="list" href="#list-soru12"
            role="tab" aria-controls="soru12">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Club de lectura</h5>
              <small>12</small>
            </div>
            <small>Abstracción</small>
          </a>
        </div>

      </div>
      
      <div class="col-lg-8 my-4">
        <form id="cttest" action="result.php" method="POST">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-baslangic" role="tabpanel"
            aria-labelledby="list-baslangic-list">

            <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">Bienvenido!</h4>
              <p>Antes de empezar con las preguntas, debes completar tu propia información. Podrás ver tu etapa actual en el menú de la izquierda. Puedes cambiar de pregunta y empezar por la que quieras.</p>
              <hr>
              <p class="mb-0">Para ver la puntuación de Pensamiento Computacional, debe rellenar <strong>todos los campos completamente</strong>.</p>
              <hr>
              <p class="mb-0">Para cualquier problema o pregunta, puede enviar un correo electrónico a <strong>emre@emrecoban.com.tr</strong>.</p>
            </div>

            <div class="card panel-primary">
              <div class="card-header">
               Perfil
              </div>
              <div class="card-body">

                <div class="form-group">
                  <label for="inputCity">Apodo:<br />4 NÚMEROS de DNI, del 3º al 6º, más 4 NÚMEROS para el DÍA y MES de nacimiento, con 2 dígitos para día y dos dígitos para mes. 
<br />Ejemplo: si tu DNI es 09856471W y naciste el 7 de abril, tu código será: 85640704</label>
                  <input type="text" class="form-control text-uppercase" id="adsoyad" name="adsoyad" maxlength="30" data-uyari="Apodo" required>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-3" style="display:none;">
                    <label for="okulno">School Number</label>
                    <input type="text" class="form-control" id="okulno" name="okulno" value="<?=rand(10,999)?>" maxlength="8" data-uyari="Profile: School Number" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="okultip">Tipo de escuela</label>
                    <select id="okultip" name="okultip" class="form-control" data-uyari="Tipo de escuela" required>
                      <option value="1" selected>Saltar este campo</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="cinsiyet">Género</label>
                    <select id="cinsiyet" name="cinsiyet" class="form-control" data-uyari="Género" required>
                      <option value="0" selected disabled>Seleccionar</option>
                      <option value="1">Mujer</option>
                      <option value="2">Hombre</option>
                      <option value="3">Otro</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="sinif">Nivel/Curso/Clase</label>
                    <select id="sinif" name="sinif" class="form-control" data-uyari="Nivel/Curso/Clase" required>
                      <option value="0" selected disabled>Seleccionar</option>
                      <option value="1">1º</option>
                      <option value="2">2º</option>
                      <option value="3">3º</option>
                      <option value="4">4º</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-primary" data-toggle="list" href="#list-soru1" data-action="nav"
                  data-controls="soru1">Siguiente</a>
              </div>
            </div>

          </div>


          <div class="tab-pane fade" id="list-soru1" role="tabpanel" aria-labelledby="list-soru1-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Reconocimiento de patrones</span> <span class="badge badge-secondary p-2">Descomposición</span></div>
              <div class="card-body">
                <h5 class="card-title">Perro raro</h5>
                <p class="card-text">En cada fila, identifique el perro que no encaja en la columna (patrón vertical).</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru1.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="satir1">1. Fila</label>
                    <select id="satir1" name="s1_c1" class="form-control" data-uyari="Perro raro: 1. Fila" required>
                      <option value="0" selected disabled>Seleccionar</option>
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
                    <label for="satir2">2. Fila</label>
                    <select id="satir2" name="s1_c2" class="form-control" data-uyari="Perro raro: 2. Fila" required>
                      <option value="0" selected disabled>Seleccionar</option>
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
                    <label for="satir3">3. Fila</label>
                    <select id="satir3" name="s1_c3" class="form-control" data-uyari="Perro raro: 3. Fila" required>
                      <option value="0" selected disabled>Seleccionar</option>
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
                    <label for="satir4">4. Fila</label>
                    <select id="satir4" name="s1_c4" class="form-control" data-uyari="Perro raro: 4. Fila" required>
                      <option value="0" selected disabled>Seleccionar</option>
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
                  data-controls="baslangic">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru2" data-action="nav"
                  data-controls="soru2">Siguiente</a>
              </div>
            </div>


          </div>
          <div class="tab-pane fade" id="list-soru2" role="tabpanel" aria-labelledby="list-soru2-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Pensamiento creativo</span> <span class="badge badge-secondary p-2">Evaluación</span> <span class="badge badge-secondary p-2">Generalización</span></div>
              <div class="card-body">
                <h5 class="card-title">Texto encriptado</h5>
                <p class="card-text">Cada letra del alfabeto está numerada con números diferentes. En el mensaje se dan algunas coincidencias de letras. Puedes hacer coincidir cada letra en la clave dejándola caer sobre los números. Complete la clave según corresponda y descifre el mensaje. A continuación, escribe el mensaje que has encontrado en la casilla Mensaje cifrado. Sugerencia: al revés.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru2.png" class="img-fluid"></p>

                <div class="card">
                  <div class="card-body">
                    <div class="card-title">Clave</div>
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
                          <div class="alfabeKutu" id="abc15" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba15" draggable="true" ondragstart="drag(event)">Ñ</span></div>
                          <div class="alfabeKutu" id="abc16" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba16" draggable="true" ondragstart="drag(event)">O</span></div>
                          <div class="alfabeKutu" id="abc17" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba17" draggable="true" ondragstart="drag(event)">P</span></div>
                          <div class="alfabeKutu" id="abc18" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba18" draggable="true" ondragstart="drag(event)">Q</span></div>
                          <div class="alfabeKutu" id="abc19" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba19" draggable="true" ondragstart="drag(event)">R</span></div>
                          <div class="alfabeKutu" id="abc20" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba20" draggable="true" ondragstart="drag(event)">S</span></div>
                          <div class="alfabeKutu" id="abc21" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba21" draggable="true" ondragstart="drag(event)">T</span></div>
                          <div class="alfabeKutu" id="abc22" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba22" draggable="true" ondragstart="drag(event)">U</span></div>
                          <div class="alfabeKutu" id="abc23" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba23" draggable="true" ondragstart="drag(event)">V</span></div>
                          <div class="alfabeKutu" id="abc24" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba24" draggable="true" ondragstart="drag(event)">W</span></div>
                          <div class="alfabeKutu" id="abc25" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba25" draggable="true" ondragstart="drag(event)">X</span></div>
                          <div class="alfabeKutu" id="abc26" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba26" draggable="true" ondragstart="drag(event)">Y</span></div>
                          <div class="alfabeKutu" id="abc27" ondrop="drop(event)" ondragover="allowDrop(event)"><span id="cba27" draggable="true" ondragstart="drag(event)">Z</span></div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>

                
                
                <p class="card-text">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="sifrelimesaj">Mensaje cifrado</label>
                      <input type="text" name="s2_c1" class="form-control text-uppercase" id="sifrelimesaj" maxlength="30" data-uyari="Mensaje cifrado" required>
                    </div>
                  </div>
                </p>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru1" data-action="nav"
                  data-controls="soru1">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru3" data-action="nav"
                  data-controls="soru3">Siguiente</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru3" role="tabpanel" aria-labelledby="list-soru3-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Pensamiento creativo</span> <span class="badge badge-secondary p-2">Pensamiento algorítmico</span> <span class="badge badge-secondary p-2">Evaluación</span></div>
              <div class="card-body">
                <h5 class="card-title">Guía turística</h5>
                <p class="card-text">Como guía turístico en un hotel, tienes que mostrar los alrededores a los turistas. Mientras guías a los turistas, tienes que llegar al hotel sin pasar dos veces por un mismo lugar. Para ello, puedes ayudarte del mapa. La ruta debe empezar y terminar en el hotel y los turistas deben visitar todos los lugares. Puedes arrastrar y soltar los lugares en la ruta con el ratón.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru3.png" class="img-fluid"></p>

                <!-- Buraya gelsin sortable -->
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5>Ubicaciones</h5>
                      <ul id="turRehberi1" class="list-group">
                        <li class="list-group-item list-group-item-action" data-mekan="0">Hotel</li>
                        <li class="list-group-item list-group-item-action" data-mekan="1">Parque</li>
                        <li class="list-group-item list-group-item-action" data-mekan="2">Acuario</li>
                        <li class="list-group-item list-group-item-action" data-mekan="3">Playa</li>
                        <li class="list-group-item list-group-item-action" data-mekan="4">Galería de arte</li>
                        <li class="list-group-item list-group-item-action" data-mekan="5">Museo de la Ciencia</li>
                        <li class="list-group-item list-group-item-action" data-mekan="6">Universidad</li>
                        <li class="list-group-item list-group-item-action" data-mekan="7">Fábrica</li>
                        <li class="list-group-item list-group-item-action" data-mekan="8">Castillo</li>
                        <li class="list-group-item list-group-item-action" data-mekan="9">Puente</li>
                      </ul>
                    </div>
                    <div class="col">
                      <h5>Ruta</h5>
                      <ul id="turRehberi2" class="list-group" style="height:550px;">
                        <li class="list-group-item list-group-item-action" data-mekan="0">Hotel</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="text" name="s3_c1" id="rota"  class="d-none" data-uyari="Guía turística" required>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru2" data-action="nav"
                  data-controls="soru2">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru4" data-action="nav"
                  data-controls="soru4">Siguiente</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru4" role="tabpanel" aria-labelledby="list-soru4-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Pensamiento algorítmico</span> <span class="badge badge-secondary p-2">Evaluación</span></div>
              <div class="card-body">
                <h5 class="card-title">Sensor de temperatura</h5>
                <p class="card-text">Un programador de ordenadores midió el valor de la temperatura con sensores de temperatura colocados en distintos puntos del hierro metálico. Para realizar esta medición, cargó en el circuito programable el código que había escrito anteriormente. ¿En qué opción se indica correctamente la salida del código?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru4.png" class="img-fluid"></p>

                <div class="card">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Código escrito por el programador:</h6>
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
                              <input type="radio" name="s4_c1" id="s4_c1" value="1" data-uyari="Sensor de temperatura" required>
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
                  data-controls="soru3">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru5" data-action="nav"
                  data-controls="soru5">Siguiente</a>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="list-soru5" role="tabpanel" aria-labelledby="list-soru5-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Resolución de problemas</span> <span class="badge badge-secondary p-2">Pensamiento algorítmico</span> <span class="badge badge-secondary p-2">Evaluación</span></div>
              <div class="card-body">
                <h5 class="card-title">Equipo de ingenieros</h5>
                <p class="card-text">Un grupo de ingenieros ha desarrollado un vehículo teledirigido. Pero han programado mal la ruta del vehículo teledirigido. Tienes que volver a programar la ruta para que el vehículo teledirigido llegue a su destino.</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru5.png" class="img-fluid"></p>

                <!-- Buraya gelsin sortable -->
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5>Ruta</h5>
                      <ul id="muhendis" class="list-group">
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Este
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Este
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Sur
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Este
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Oeste
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-primary" data-muh="4">Norte
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Sur
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Este
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Oeste
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Este
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Sur
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Este
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Oeste
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Este
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-primary" data-muh="4">Norte
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-danger" data-muh="2">Sur
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-warning" data-muh="1">Este
                        </li>
                        <li class="list-group-item list-group-item-action list-group-item-success" data-muh="3">Oeste
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="text" name="s5_c1" id="muhcevap" data-uyari="Equipo de ingenieros" class="d-none" required>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru4" data-action="nav"
                  data-controls="soru4">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru6" data-action="nav"
                  data-controls="soru6">Siguiente</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru6" role="tabpanel" aria-labelledby="list-soru6-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Pensamiento algorítmico</span> <span class="badge badge-secondary p-2">Abstracción</span> <span class="badge badge-secondary p-2">Evaluación</span> <span class="badge badge-secondary p-2">Generalización</span></div>
              <div class="card-body">
                <h5 class="card-title">Laberinto de caramelos</h5>
                <p class="card-text">Un robot está programado para recoger tantos caramelos como sea posible. El robot recoge caramelos al pasar por cada celda. Cada casilla tiene 0, 1, 2 y 3 caramelos. El robot sólo puede moverse hacia arriba y hacia la derecha. ¿Cuántos caramelos ha recogido el robot como máximo?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru6.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="seker">Recuento de caramelos</label>
                    <select id="seker" name="s6_c1" class="form-control" data-uyari="Recuento de caramelos" required>
                      <option value="0" selected disabled>Seleccionar</option>
                      <option value="1">10 Caramelos</option>
                      <option value="5">11 Caramelos</option>
                      <option value="2">12 Caramelos</option>
                      <option value="3">14 Caramelos</option>
                      <option value="4">16 Caramelos</option>
                    </select>
                  </div>
                </div>
                
              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru5" data-action="nav"
                  data-controls="soru5">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru7" data-action="nav"
                  data-controls="soru7">Siguiente</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru7" role="tabpanel" aria-labelledby="list-soru7-list">
            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Pensamiento crítico</span> <span class="badge badge-secondary p-2">Abstracción</span> <span class="badge badge-secondary p-2">Evaluación</span> <span class="badge badge-secondary p-2">Descomposición</span></div>
              <div class="card-body">
                <h5 class="card-title">Número oculto</h5>
                <p class="card-text">Un programador de ordenadores quiere mostrar números digitales utilizando 7 LEDs. Cada parte del LED está etiquetada como se muestra en la imagen (A, B, C, D, E, F y G).
                ¿Qué partes del LED debe encender el programador para escribir el número <kbd>6813</kbd>? Por ejemplo, en la imagen aparece el número 103.</p>
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
                  data-controls="soru6">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru8" data-action="nav"
                  data-controls="soru8">Siguiente</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru8" role="tabpanel" aria-labelledby="list-soru8-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Pensamiento algorítmico</span> <span class="badge badge-secondary p-2">Evaluación</span> <span class="badge badge-secondary p-2">Generalización</span></div>
              <div class="card-body">
                <h5 class="card-title">Correo cifrado</h5>
                <p class="card-text">Una cartero entregará una carta en su bolsa según la orientación de las cajas. Para entregar la carta, tiene que girar las cajas según el código escrito por el programador. ¿Dónde está el punto de entrega de la carta?</p>

                <div class="card">
                  <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Código escrito por el programador:</h6>
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
                    <h6 class="card-subtitle mb-2 text-muted">Cajas (Haga clic en él):</h6>
                    <div data-toggle="tooltip" data-placement="top" title="Haga clic en él" class="sKutu bg-warning"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Haga clic en él" class="sKutu bg-success"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Haga clic en él" class="sKutu bg-warning"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Haga clic en él" class="sKutu bg-warning"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Haga clic en él" class="sKutu bg-danger"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Haga clic en él" class="sKutu bg-danger"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Haga clic en él" class="sKutu bg-primary"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                    <div data-toggle="tooltip" data-placement="top" title="Haga clic en él" class="sKutu bg-primary"
                      data-derece="0"><img src="assets/img/ok.png" class="img-fluid"></div>
                  </div>
                </div>

                <br>
                <p class="card-text text-center"><img src="assets/img/soru/soru8.png" class="img-fluid"></p>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="mektup">Punto de entrega</label>
                    <select id="mektup" name="s8_c1" class="form-control" data-uyari="Punto de entrega" required>
                      <option value="0" selected disabled>Seleccionar</option>
                      <option value="1">1. Punto de entrega</option>
                      <option value="2">2. Punto de entrega</option>
                      <option value="3">3. Punto de entrega</option>
                      <option value="4">4. Punto de entrega</option>
                      <option value="5">5. Punto de entrega</option>
                      <option value="6">6. Punto de entrega</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru7" data-action="nav"
                  data-controls="soru7">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru9" data-action="nav"
                  data-controls="soru9">Siguiente</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru9" role="tabpanel" aria-labelledby="list-soru9-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Resolución de problemas</span> <span class="badge badge-secondary p-2">Evaluación</span> <span class="badge badge-secondary p-2">Generalización</span></div>
              <div class="card-body">
                <h5 class="card-title">Investigación pesquera</h5>
                <p class="card-text">Un grupo de científicos estudió las poblaciones de peces en diferentes regiones. Responde a las preguntas según los datos obtenidos.</p>
                  <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Año</th>
                      <th scope="col">Tipo</th>
                      <th scope="col">Población</th>
                      <th scope="col">Nivel del agua (m)</th>
                      <th scope="col">Región</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>2010</th>
                      <td>Judía</td>
                      <td>6.000</td>
                      <td>50</td>
                      <td>Egeo</td>
                    </tr>
                    <tr>
                      <th>2017</th>
                      <td>Anchoa</td>
                      <td>10.150</td>
                      <td>88</td>
                      <td>Mar Euxino</td>
                    </tr>
                    <tr>
                      <th>2017</th>
                      <td>Anchoa</td>
                      <td>7.350</td>
                      <td>65</td>
                      <td>Mármara</td>
                    </tr>
                    <tr>
                      <th>2019</th>
                      <td>Salmonete gris</td>
                      <td>2.350</td>
                      <td>38</td>
                      <td>Mediterráneo</td>
                    </tr>
                    <tr>
                      <th>2014</th>
                      <td>Lubina</td>
                      <td>8.430</td>
                      <td>63</td>
                      <td>Mármara</td>
                    </tr>
                    <tr>
                      <th>2009</th>
                      <td>Caballa</td>
                      <td>1.430</td>
                      <td>113</td>
                      <td>Mar Euxino</td>
                    </tr>
                    <tr>
                      <th>2011</th>
                      <td>Judía</td>
                      <td>13.692</td>
                      <td>130</td>
                      <td>Mediterráneo</td>
                    </tr>
                    <tr>
                      <th>2018</th>
                      <td>Salmonete gris</td>
                      <td>6.350</td>
                      <td>74</td>
                      <td>Egeo</td>
                    </tr>
                    <tr>
                      <th>2016</th>
                      <td>Caballa</td>
                      <td>420</td>
                      <td>122</td>
                      <td>Mármara</td>
                    </tr>
                    <tr>
                      <th>2012</th>
                      <td>Salmonete gris</td>
                      <td>5.150</td>
                      <td>69</td>
                      <td>Egeo</td>
                    </tr>
                    <tr>
                      <th>2020</th>
                      <td>Lubina</td>
                      <td>2.150</td>
                      <td>47</td>
                      <td>Mar Euxino</td>
                    </tr>
                    <tr>
                      <th>2013</th>
                      <td>Pez pescador</td>
                      <td>9.850</td>
                      <td>83</td>
                      <td>Mar Euxino</td>
                    </tr>
                  </tbody>
                </table>
              </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="balik_s1">¿En qué año se obtuvieron los primeros datos?</label>
                    <select id="balik_s1" name="s9_c1" class="form-control" data-uyari="Investigación pesquera 1" required>
                      <option value="0" selected disabled>Seleccionar</option>
                      <option value="1">2005</option>
                      <option value="2">2008</option>
                      <option value="3">2010</option>
                      <option value="4">2009</option>
                      <option value="5">2011</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="balik_s4">¿Qué región tiene más especies de peces?</label>
                    <select id="balik_s4" name="s9_c4" class="form-control" data-uyari="Investigación pesquera 2" required>
                      <option value="0" selected disabled>Seleccionar</option>
                      <option value="1">Mar Euxino</option>
                      <option value="2">Egeo</option>
                      <option value="3">Mármara</option>
                      <option value="4">Mediterráneo</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="balik_s3">¿Qué peces tendrán mayor población entre 2016 y 2020?</label>
                    <select id="balik_s3" name="s9_c3" class="form-control" data-uyari="Investigación pesquera 3" required>
                      <option value="0" selected disabled>Seleccionar</option>
                      <option value="1">Judía</option>
                      <option value="2">Anchoa</option>
                      <option value="3">Caballa</option>
                      <option value="4">Pez pescador</option>
                      <option value="5">Lubina</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="balik_s2">¿Dónde está la región con el nivel de agua más bajo entre 2017 y 2019?</label>
                    <select id="balik_s2" name="s9_c2" class="form-control" data-uyari="Investigación pesquera 4" required>
                      <option value="0" selected disabled>Seleccionar</option>
                      <option value="1">Mar Euxino</option>
                      <option value="2">Egeo</option>
                      <option value="3">Mármara</option>
                      <option value="4">Mediterráneo</option>
                    </select>
                  </div>
                </div>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru8" data-action="nav"
                  data-controls="soru8">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru10" data-action="nav"
                  data-controls="soru10">Siguiente</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru10" role="tabpanel" aria-labelledby="list-soru10-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Descomposición</span> <span class="badge badge-secondary p-2">Abstracción</span> <span class="badge badge-secondary p-2">Pensamiento algorítmico</span></div>
              <div class="card-body">
                <h5 class="card-title">Cinco palos</h5>
                <p class="card-text">Emre tiene cinco palos. Obtuvo la 1ª forma con cinco palos. Entonces Raquel movió un palo y obtuvo la 2ª forma. En el último paso, Elif también movió un palo. En este caso, ¿qué figura no puede obtener Elif?</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru9.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="soru9">Forma Número</label>
                    <select id="soru9" name="s10_c1" class="form-control" data-uyari="Cinco palos" required>
                      <option value="0" selected disabled>Seleccionar</option>
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
                  data-controls="soru9">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru11" data-action="nav"
                  data-controls="soru11">Siguiente</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru11" role="tabpanel" aria-labelledby="list-soru11-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Abstracción</span> <span class="badge badge-secondary p-2">Evaluación</span> <span class="badge badge-secondary p-2">Pensamiento algorítmico</span></div>
              <div class="card-body">
                <h5 class="card-title">Lavado de coches</h5>
                <p class="card-text">En un túnel de lavado se pueden lavar tres coches al mismo tiempo. A este túnel de lavado llegan cinco coches y cada uno de ellos está numerado del 1 al 5. Los coches se introducían en la zona de lavado de menor a mayor según los números que tenían. Una vez terminado el proceso de lavado de los coches, se invierten los números y los coches salen de la zona de lavado en orden descendente según los números que tenían.<br><br>Según esto, ¿cuál es el orden de entrega de los coches? Puede cambiar el Orden de entrega arrastrando y soltando.
                <!-- Bir oto kuaförde aynı anda 3 araç yıkanabilmektedir. Aynı anda beş otomobil gelmiş ve her bir otomobil geliş sırasına göre 1'den 5'e kadar numaralandırılmıştır. <u>Otomobiller, geliş sırasına göre yıkama alanına alınmıştır.</u> Otomobiller teslimat alanına geçişi sırasında geliş sırasının tam tersi şeklinde numaraları yer değiştirmiştir.<br><br>Buna göre otomobiller hangi teslimat sırasına göre teslimat alanından çıkış yapmalıdır? Teslimat Sırasını sürükle-bırak yöntemiyle değiştirebilirsin.--></p>
                <p class="card-text text-center"><img src="assets/img/soru/soru10.png" class="img-fluid"></p>

                <!-- Buraya gelsin sortable -->
                <div class="container">
                  <div class="row">
                    <div class="col">
                      <h5>Orden de entrega</h5>
                      <ul id="otoKuafor" class="list-group">
                        <li class="list-group-item list-group-item-action bg-dark text-white" data-arac="1">Coche negro</li>
                        <li class="list-group-item list-group-item-action bg-danger text-white" data-arac="2">Coche rojo</li>
                        <li class="list-group-item list-group-item-action bg-success text-white" data-arac="3">Coche verde</li>
                        <li class="list-group-item list-group-item-action bg-warning" data-arac="4">Coche amarillo</li>
                        <li class="list-group-item list-group-item-action bg-primary text-white" data-arac="5">Coche azul</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <input type="text" name="s11_c1" id="otocevap" data-uyari="Lavado de coches" class="d-none" required>

              </div>
              <div class="card-footer text-muted text-right">
                <a class="btn btn-outline-secondary" data-toggle="list" href="#list-soru10" data-action="nav"
                  data-controls="soru10">Anterior</a>
                <a class="btn btn-primary" data-toggle="list" href="#list-soru12" data-action="nav"
                  data-controls="soru12">Siguiente</a>
              </div>
            </div>

          </div>
          <div class="tab-pane fade" id="list-soru12" role="tabpanel" aria-labelledby="list-soru12-list">

            <div class="card">
              <div class="card-header"><span class="badge badge-primary p-2">Abstracción</span> <span class="badge badge-secondary p-2">Evaluación</span> <span class="badge badge-secondary p-2">Pensamiento algorítmico</span></div>
              <div class="card-body">
                <h5 class="card-title">Club de lectura</h5>
                <p class="card-text">En el gráfico se muestra la relación entre 7 alumnos de un club de lectura. Según este gráfico, se conocen los nombres y las edades de los alumnos. El club de lectura tiene algunas reglas:</p>
                <p class="card-text">Si aún no has leído el libro, léelo cuando lo recibas y luego regálaselo al amigo más joven que no lo haya leído. Si todos tus amigos han leído el libro, debes dárselo al amigo que te lo dio primero. Por ejemplo, Emre es amigo de Ayşe, Özgen y Elif y la amiga más joven de Emre es Ayşe.</p>
                <p class="card-text">Puesto que Emre fue la primera persona que leyó el libro, ¿quién es la última persona que lo leyó? (Nadie ha leído el libro antes)</p>
                <p class="card-text text-center"><img src="assets/img/soru/soru11.png" class="img-fluid"></p>

                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="soru12">La última persona en leer el libro</label>
                    <select id="soru12" name="s12_c1" class="form-control" data-uyari="Club de lectura" required>
                      <option value="0" selected disabled>Seleccionar</option>
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
                  data-controls="soru11">Anterior</a>
                <input class="btn btn-success" type="submit" id="submit" value="Terminar">
                
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
        <h5 class="modal-title" id="controlModalLongTitle">Advertencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" role="alert">
        Rellene todos los campos.
        </div>
        <div id="gereklialanlar"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
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