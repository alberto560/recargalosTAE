<!DOCTYPE html>
<html>
<head>
  <script src="assets/jquery/jquery-3.4.1.min.js"></script>
  <!--SCRIPT-->
  <script type="text/javascript" src="assets/js/js_views/js_estados_municipios.js"></script>
  <script type="text/javascript" src="assets/js/util/data.js"></script>
  <script type="text/javascript" src="assets/js/util/jlinq.js"></script>
  <script type="text/javascript" src="assets/js/js_views/js_micuenta.js"></script>
  <!--Validate-->
  <script type="text/javascript" src="assets/js/validate/validate1.19.1.js"></script>
  <script src="assets/js/util/sweetalert.js"></script>
  <script type="text/javascript" src="assets/js/validate/validate_rules.js"></script>
  <script type="text/javascript" src="assets/js/validate/rules_l.js"></script>
  <script type="text/javascript" src="assets/js/util/stacktable.js"></script>

  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">
  <link rel="stylesheet" href="assets/css/mdb.min.css" >
  <link rel="stylesheet" href="assets/css/css.css" >
  <link rel="stylesheet" href="assets/css/style-media.css">
  <link rel="stylesheet" href="assets/css/stacktable.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="assets/css/util/fontawesome.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Mi Cuenta</title>
</head>
<body></br>
  <center>
    <div class="main-panel table-responsive">
      <center>
        <div class="contenedor-resp ">
          <div class="row" data-step="2" data-intro="Vista mi cuenta">
            <div class="col-12 col-md-5 grid-margin stretch-card">
              <div class="card-bord" style="border-radius: 10px 10px 10px 10px;">
                <div class="card-body">
                  <div class="col-12">
                    <div class="list-group" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active" id="list-passwd-list" data-toggle="list" href="#list-passwd" role="tab" aria-controls="passwd" style="text-align: left;" data-step="3" data-intro="Cambiar contraseña <img src='ayuda/sites/statics/css/images/img/ayu-cc.png' height='300' />"><i class="mdi mdi-account-key  fa-2x"></i> &nbsp; Cambiar Contraseña</a>
                      <a class="list-group-item list-group-item-action" id="misDatos" data-toggle="list" href="#MisDatos_Div" role="tab" aria-controls="profile" style="text-align: left;" data-step="4" data-intro="Mis datos <img src='ayuda/sites/statics/css/images/img/ayu-mis.png' height='300'/>"><i class="mdi mdi-account-card-details fa-2x"></i> &nbsp; Mis datos registrados</a>
                      <a class="list-group-item list-group-item-action" id="operadores" data-toggle="list" href="#list-operador" role="tab" aria-controls="operador" style="text-align: left;" data-step="5" data-intro="Operadores <img src='ayuda/sites/statics/css/images/img/ayu-?.png' weight='100' height='205' />"><i class="mdi mdi-headset fa-2x"></i> &nbsp; Operadores</a>
                      <a class="list-group-item list-group-item-action" id="acceswpd" data-toggle="list" href="#list-acceswpd" role="tab" aria-controls="acceswpd" style="text-align: left;" data-step="6" data-intro="Acceso WAP <img src='ayuda/sites/statics/css/images/img/ayu-?.png' weight='100' height='205' />"><i class="mdi mdi-cellphone-basic fa-2x"></i> &nbsp; Acceso Wap/Wml</a>
                      <a class="list-group-item list-group-item-action" id="list-accessms-list" data-toggle="list" href="#list-accessms" role="tab" aria-controls="accessms" style="text-align: left;" data-step="7" data-intro="Acceso SMS <img src='ayuda/sites/statics/css/images/img/ayu-?.png' weight='100' height='205' />"><i class="mdi mdi-message-text fa-2x"></i> &nbsp; Acceso SMS</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-7 grid-margin stretch-card">
              <div class="card-bord" style="border-radius: 10px 10px 10px 10px;">
                <div class="body">
                  <div class="col-15">
                    <div class="tab-content" id="nav-tabContent">
                      <!--Cambiar Contraseña-->
                      <div class="tab-pane fade show active" id="list-passwd" role="tabpanel" aria-labelledby="list-passwd-list">
                        </br><center><h4><b>Cambiar Contraseña</b></h4></center></br>
                        <div class="col-12 flex-center">
                            <form id="checkpwd">
                              <div class="" style="text-align: left;">
                                <i class="mdi mdi-lock prefix fa fa-2x"></i><label for="pwdA">Contraseña Actual</label>
                                <input type="password" id="pwdA" name="pwdA" class="form-control validate" autofocus>
                              </div><br/>
                              <div class="" style="text-align: left;">
                                <i class="mdi mdi-lock prefix fa fa-2x"></i><label for="newpsw">Nueva Contraseña</label>
                                <input type="password" id="newpsw" name="newpsw" class="form-control validate">
                              </div></br>
                              <div class="" style="text-align: left;">
                                <i class="mdi mdi-lock prefix fa fa-2x"></i><label for="confnewpwd">Confirme Contraseña</label>
                                <input type="password" id="confnewpwd" name="confnewpwd" class="form-control validate">
                              </div></br>
                            <button id="guardar" name="guardar" class="btn btn-primary" onclick="myFunction1()">Cambiar Contraseña</button>
                            </form>
                        </div>
                      </div>
                      <!--Datos registrados-->
                      <div class="tab-pane fade" id="MisDatos_Div" role="tabpanel" aria-labelledby="misDatos">
                        </br><center><h4><b>Mis Datos Registrados</b></h4></center></br>
                        <div class="container">
                          <form id="formDatos">
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="inputName">Nombre:</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Nombre" autofocus>
                                <label for="inputCalle">Calle</label>
                                <input type="text" class="form-control" id="inputCalle" placeholder="Calle">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputName">Apellido Paterno</label>
                                <input type="text" class="form-control" id="inputApaterno" placeholder="Nombre">
                                <label for="inputCalle">No. Exterior</label>
                                <input type="text" class="form-control" id="inputNext" placeholder="No. Exterior">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputName">Apellido Materno</label>
                                <input type="text" class="form-control" id="inputAmaterno" placeholder="Nombre">
                                <label for="inputCalle">No. Interior</label>
                                <input type="text" class="form-control" id="inputNint" placeholder="No. Interior">
                              </div>
                              <div class="form-group col-md-2">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-2">
                                <label for="inputCP">C.P.</label>
                                <input type="tel" onKeyPress="if(this.value.length==5) return false;" class="form-control" id="inputCP" placeholder="Codigo Postal">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputEstado">Estado</label>
                                <input type="text" name="inputEstado" id="inputEstado" class="form-control" disabled>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputMunicipio">Municipio/Delegación</label>
                                <input type="text" name="inputMunicipio" id="inputMunicipio" class="form-control" disabled>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputColonia">Colonia</label>
                                <select class="select-css required" type="text" name="inputColonia" id="inputColonia" style="text-align-last:center">
                                  <option value="" disabled selected >--Seleccione--</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-4">
                                <label for="inputTelf">Teléfono Fijo</label>
                                <input type="text" class="form-control" id="inputTelf">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputTelC">Teléfono Celular</label>
                                <input type="text" class="form-control" id="inputTelC">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inputEmail">E-mail</label>
                                <input type="text" class="form-control" id="inputEmail">
                              </div>
                            </div>
                            <center><button type="button" id="save" class="btn btn-primary">Guardar Cambios</button></center>
                          </form>
                        </div>
                      </div>
                      <div id="proces" style="display: none; text-align: center;" class="loading_img">
                        <img src="assets/images/indicator.gif"/>
                      </div>
                      <div id="proces2" style="display: none; text-align: center;" class="loading_img">
                        <img src="assets/images/indicator.gif"/>
                      </div>
                      <div id="proces3" style="display: none; text-align: center;" class="loading_img">
                        <img src="assets/images/indicator.gif"/>
                      </div>
                      <!--Lista Operadores-->
                      <div class="tab-pane fade" id="list-operador" role="tabpanel" aria-labelledby="operadores">
                        </br></br><center><h4><b>Operadores</b></h4></center></br>
                        <div class="container">
                          <div class="row justify-content-md-end">
                            <div class="col-4 col-md-4">
                              <a  class="redimen2" id="addOperadorR" data-toggle="modal" data-target="#modalOperador">
                                  <i class="mdi mdi-plus-circle-outline fa-2x text-info"></i>
                              </a>
                            </div>
                            <div class="redimen">
                              <div >
                                <a class="btn btn-primary btn-rounded" id="addOperador" data-toggle="modal" data-target="#modalOperador" style="padding: 5px 18px">
                                    Agregar
                                </a>
                              </div>
                            </div>
                          </div>
                          <table id="paswdOp" class="table table-bordered text-center">
                            <thead>
                              <tr>
                                <th class="text-center">Estatus</th>
                                <th class="text-center">Operador</th>
                                <th class="text-center">Nombre</th>
                                <th width="80" class="text-center">Opción</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td class="pt-3-half"><h5 name="estatusOP" id="estatusOP"></h5></td>
                                  <td class="pt-3-half"><h5 id="numOP" name="numOP"></h5></td>
                                  <td class="pt-3-half"><h5 id="nomb" name="nom"></h5></td>
                                  <td>
                                    <div class="redimen2">
                                      <span class="table-up"><a id="editaR" data-toggle="modal" data-target="#modalOperador" class="indigo-text"><i class="mdi mdi-table-edit fa-2x" aria-hidden="true"></i></a></span>
                                      <span class="table-up"><a id="remov" class="indigo-text"><i class="mdi mdi-delete fa-2x text-danger" aria-hidden="true"></i></a></span>
                                    </div>
                                    <div class="redimen">
                                      <a class="btn btn-default btn-rounded" id="edita" name="edita" data-toggle="modal" data-target="#modalOperador" style="padding: 3px 18px">Editar</a>
                                    </div></br>
                                    <div class="redimen">
                                      <a class="btn btn-default btn-rounded" id="remov" name="remov" style="padding: 3px 10px">Elimimar</a>
                                    </div>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!--Acceso WAP-->
                      <div class="tab-pane fade" id="list-acceswpd" role="tabpanel" aria-labelledby="acceswpd">
                        <div class="container" style="text-align: left;">
                          </br><center><h4><b>Acceso WAP/WML</b></h4></center></br>
                          <div class="card-header mdb-color lighten-4">
                            <h5>Vende recargas desde tu celular WAP en 3 pasos</h5>
                          </div>
                          <div class="card-body">
                            <h6><b>1.-Activa el Servicio:</b></h6>
                            <p>Desliza el Control de Estado actual a la opción "Permitido".</br>
                              Asigna un PIN movil (Deben ser 4 números).</p>
                            <h6><b>2.-Crea un favorito en el navegador WAP de tu celular.</b></h6>
                            <p>URL:http://wap.recargalos.mx.</br>
                              Name: Recargalos.</p>
                            <h6><b>3.-El Servicio te pedirá los siguientes datos.</b></h6>
                            <p>USUARIO: Con el que ingresas a este portal.</br>
                              PINMOVIL: Los 4 números que asignaste.</br>
                              El número y monto a recargar.</p>
                          </div>
                          <div class="card-header mdb-color lighten-4">
                            <h5>Acceso Celular Wap Wml</h5>
                          </div>
                          <div class="card-body">
                            <label>Estado Actual:</label>
                            <!-- Default checked-->
                            <div class="custom-control custom-switch" style="display: flex;">
                                <input onclick="myFunction()" class="a" type="checkbox" id="switch">
                                  <label class="h" for="switch">Toggle</label>
                                <div class="silder round">
                                  <span class="on">Activado</span><span class="off">Bloqueado</span>
                                </div>
                            </div>
                          </div>
                          <div class="card-header mdb-color lighten-4">
                            <h5>Asignar Nuevo Pin Movil</h5>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-6">
                                  <input type="number" class="form-control" id="pin" placeholder="Ingrese Nuevo Pin[0-9]">
                              </div>
                              <div class="col-md-6">
                                  <button type="button" class="btn btn-primary btn-md" name="button">Asignar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--Acceso SMS-->
                      <div class="tab-pane fade" id="list-accessms" role="tabpanel" aria-labelledby="list-accessms-list">
                        <div class="container" style="text-align: left;">
                          </br><center><h4><b>Acceso SMS</b></h4></center></br>
                          <div class="card-header mdb-color lighten-4">
                            <h5>Ahora puedes vender recargas por SMS</h5>
                          </div>
                          <div class="card-body">
                            <h6><b>1.-Marcación corta 2246: </b><p>Desde Carrier Telcel con un costo de $0.50c por SMS (IVA incluido).</p></h6>
                            <h6><b>2.-Al número 238-205-48-82</b><p>Desde cualquier Carrier utilizando tu paquete de SMS y/o regístralo como número grátis.</p></h6>
                            <h6><b>Descarga la descripción del Servicio. Aquí</b></h6>
                          </div>
                          <div class="card-header mdb-color lighten-4">
                            <h5>Teléfonos Registrados para Venta por SMS</h5>
                          </div>
                          <div class="card-body">
                            <p>Operadores SMS Registrados</p>

                            <div id="table">
                              <a class="text-success"><i class="fas fa-plus fa-2x" aria-hidden="true"></i></a>
                              <table class="table table-bordered table-striped text-center">
                                <thead>
                                  <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Carrier</th>
                                  <th scope="col">Número</th>
                                  <th scope="col">Estado</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="pt-3-half">1</td>
                                    <td class="pt-3-half">TELCEL</td>
                                    <td class="pt-3-half">2315484515</td>
                                    <td>
                                      <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="customSwitches" checked>
                                        <label class="custom-control-label" for="customSwitches"></label>
                                      </div>
                                      <button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </center>
    </div>
  </center>
  <!--Modal-->
  <div class="modal fade" id="modalOperador" tabindex="-1" role="dialog" aria-labelledby="operadorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="operadorTitle"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="modalpwd" method="post">
              <label id="lblOp"></label>
              <input id="nameOperator">

              <label id="lblpasswN" for="contraseñaOp"> Contraseña</label>
              <input type="password" class="form-control validate" name="contraseñaOp" id="contraseñaOp" placeholder="Contraseña" required></br>

              <label id="lblpasswC" for="contraseñaCfm"> Confirme Contraseña</label>
              <input type="password" class="form-control validate" name="contraseñaCfm" id="contraseñaCfm" placeholder="Confirme Contraseña" required>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="clospwd" name="clospwd" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" id="saveNewOp" name="saveNewOp" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>


  <!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script-->
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
  <script type="text/javascript">
    $('table').stacktable();
  </script>
  <style>

  </style>

</body>

</html>
