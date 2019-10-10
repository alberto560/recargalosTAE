
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--JQUERY-->
    <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
    <!--SCRIPT-->
    <script type="text/javascript" src="assets/js/js_views/js_estados_municipios.js"></script>
    <script type="text/javascript" src="assets/js/util/data.js"></script>
    <script type="text/javascript" src="assets/js/util/jlinq.js"></script>
    <script type="text/javascript" src="assets/js/js_views/js_mclientes.js"></script>
    <script type="text/javascript" src="assets/js/util/CleanModal.js"></script>
    <script type="text/javascript" src="assets/js/util/stacktable.js"></script>
    <!--Validate-->
    <script type="text/javascript" src="assets/js/validate/validate1.19.1.js"></script>
    <script type="text/javascript" src="assets/js/validate/validate_rules.js"></script>
    <link rel="stylesheet" href="assets/css/util/fontawesome.css">

    <!--CSS-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">


    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" >
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="stylesheet" href="assets/css/style-media.css">
    <link rel="stylesheet" href="assets/css/stacktable.css">
    <title></title>
  </head>
  <body>
     <center>
        <div class="contenedor-resp">
          <br>
          <div class="grid-margin stretch-card">
            <div class="card-bord">
              <div class="card-body" data-step="2" data-intro="Vista Clientes">
                <div class="row justify-content-md-between">
                  <div class="col-8 col-md-2">
                    <h4 class="text-sm-center"><b>Clientes</b></h4>
                  </div>
                  <div class="col-4 col-md-6">
                    <a  class="redimen2" id="btnAddClient" data-toggle="modal" data-target="#modalAddClient">
                        <i class="mdi mdi-plus-circle-outline fa-3x  text-info"></i>
                    </a>
                  </div>
                  <div class="redimen">
                    <div data-step="3" data-intro="Boton para agregar clientes <img src='ayuda/sites/statics/css/images/img/ayu-ncli.png' height='280' />">
                      <a class="btn btn-primary" id="btnAddClient" data-toggle="modal" data-target="#modalAddClient">
                          Agregar
                      </a>
                    </div>
                  </div>
                </div>
                <br>
                <table class="table table-striped table-bordered" cellspacing="0" width="100%" data-step="4" data-intro="Tabla que muestra los clientes dados de alta.">
                    <thead>
                      <th>Distribuidor</th>
                      <th>Nombre comercial</th>
                      <th>Nombre del responsable</th>
                      <th>Telefono celular</th>
                      <th>Saldo</th>
                      <th>Estado</th>
                      <th data-step="5" data-intro="Acceso para editar a clientes. <img src='ayuda/sites/statics/css/images/img/ayu-cedi.png' />">Acciones</th>
                    </thead>
                    <tbody align="center">
                      <tr>
                        <td>TELCEL</td>
                        <td>Tienda</td>
                        <td>Oscar Cid</td>
                        <td>2384697523</td>
                        <td>$3500.00</td>
                        <td>Activo</td>
                        <td> <a id="modalSet" data-toggle="modal" data-target="#modalSettings">
                              <i class="mdi mdi-border-color fa-2x"></i>
                             </a> </td>
                      </tr>
                      <tr>
                        <td>MOVISTAR</td>
                        <td>Tienda 2</td>
                        <td>Pedro Campos</td>
                        <td>2384697523</td>
                        <td>$0.00</td>
                        <td>Bloqueado</td>
                        <td> <a id="modalSet" data-toggle="modal" data-target="#modalSettings">
                              <i class="mdi mdi-border-color fa-2x"></i>
                             </a> </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </center>

      <!-- Central Modal AddClient -->
      <div class="modal fade" id="modalAddClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header blue-gradient color-block">
              <h4 class="modal-title w-100 text-white font-weight-bold" id="myModalLabel">Añadir cliente</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="form_add_client" action="#" method="post">
            <div class="modal-body">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-7 col-md-6">
                      <label for="nomb_comercial">Nombre comercial</label>
                      <input class="form-control required" type="text" name="AddNomb_comercial" id="AddNomb_comercial" >
                    </div>
                    <div class="col-7 col-md-6">
                      <label for="nomb_responsables">Nombre del responsable</label>
                      <input class="form-control required lettersonly" type="text" name="AddNomb_responsable" id="AddNomb_responsable" >
                    </div>
                  </div>
                    <div class="row justify-content-start">
                      <div class="col-6 col-md-4">
                        <label for="AddCodigo_postal">Codigo postal</label>
                        <input class="form-control required number" type="tel" onKeyPress="if(this.value.length==5) return false;" name="AddCodigo_postal" id="AddCodigo_postal" >
                      </div>
                      <div class="col-6 col-md-4">
                        <label for="estado">Estado</label>
                        <input type="text" name="AddEstado" id="AddEstado" class="form-control" disabled>
                      </div>
                      <div class="col-6 col-md-4">
                        <label for="municipio">Municipio</label>
                        <input type="text" name="AddMunicipio" id="AddMunicipio" class="form-control" disabled>
                      </div>
                    </div>
                    <div id="indicator" style="display: none; text-align: center;" class="loading_img">
                      <img src="assets/images/indicator.gif"/>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-6 col-md-4">
                        <label for="AddColonia">Colonia</label>
                        <select class="select-css required" type="text" name="AddColonia" id="AddColonia" style="text-align-last:center" >
                          <option value="" disabled selected >--Seleccione--</option>
                        </select>
                      </div>
                      <div class="col-6 col-md-4">
                        <label for="calle">Calle</label>
                        <input class="form-control required" type="text" name="AddCalle" id="AddCalle" >
                      </div>
                      <div class="col-6 col-md-2">
                        <label for="num_exterior">Num. exterior</label>
                        <input class="form-control required" type="text" name="AddNum_exterior" id="AddNum_exterior" >
                      </div>
                      <div class="col-6 col-md-2">
                        <label for="num_interior">Num. interior</label>
                        <input class="form-control" type="text" name="AddNum_interior" id="AddNum_interior" >
                      </div>
                    </div>
                    <div class="row justify-content-start">
                      <div class="col-6 col-md-4">
                        <label for="tel_fijo">Telefono fijo</label>
                        <input class="form-control required  phones" type="number" min="1" name="AddTel_fijo" id="AddTel_fijo" >
                      </div>
                      <div class="col-6 col-md-4">
                        <label for="tel_celular">Telefono celular</label>
                        <input class="form-control required number phones" type="number" min="1" name="AddTel_celular" id="AddTel_celular" >
                      </div>
                      <div class="col-6 col-md-4">
                        <label for="email">E-mail</label>
                        <input class="form-control required email" type="email" name="AddEmail" id="AddEmail" >
                      </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="CancelAddClient">Cancelar</button>
              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" id="btnAdd_client" name="btnAdd_client">Guardar</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Central Modal AddClient   -->

      <!-- Central Modal Settings -->
      <div class="modal fade" id="modalSettings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Opciones</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-5  grid-margin stretch-card">
                      <div class="col-12">
                        <div class="list-group" id="list-tab" role="tablist">
                          <a class="list-group-item list-group-item-action active" id="list-transferencia-list" data-toggle="list" href="#list-transferencia"
                            role="tab" aria-controls="transferencia"><i class="mdi mdi-transfer mr-4 pr-2 fa-2x"></i>   Transferencia</a>
                          <a class="list-group-item list-group-item-action" id="list-CContraseña-list"  data-toggle="modal" data-target="#modalpswdistro"
                            role="tab" aria-controls="CContraseña"><i class=" mdi mdi-account-key mr-4 pr-2 fa-2x"></i>   Cambiar contraseña</a>
                          <a class="list-group-item list-group-item-action" id="list-Datos-list" data-toggle="list" href="#list-Datos"
                            role="tab" aria-controls="Datos"><i class="mdi mdi-account-card-details mr-4 pr-2 fa-2x"></i>    Datos</a>
                          <a class="list-group-item list-group-item-action" id="list-Configuracion-list" data-toggle="list" href="#list-Configuracion"
                            role="tab" aria-controls="Configuracion"><i class="mdi mdi-settings mr-4 pr-2 fa-2x"></i>   Configuración</a>
                        </div>
                  </div>
                </div>
                <div class="col-md-7 grid-margin stretch-card">
                      <div class="col-12 col-md-12">
                        <div class="tab-content" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="list-transferencia" role="tabpanel" aria-labelledby="list-transferencia-list">
                            <h4><b>Transferencia</b></h4>
                            <div class="container">
                              <div class="row justify-content-center">
                                <div class="col-7 col-md-6">
                                  <label for="cantidad_trans">Cantidad a tranferir</label>
                                  <input type="number" class="form-control" placeholder="$" min="1" name="cantidad_trans" id="cantidad_trans">
                                </div>
                                <div class="col-5 col-md-6">
                                  <label for="referencia">Referencia</label>
                                  <input type="text" class="form-control" name="referencia" id="referencia">
                                </div>
                              </div>
                              <br>
                              <div class="row justify-content-end">
                                <div class="col-6 col-md-3">
                                  <a id="btnAbonar" data-toggle="modal" data-target="#modalAbonar">
                                    <button type="button" class="btn btn-primary" name="btnAbonar">Abonar</button> </a>
                                </div>
                              </div>
                            </div>
                            <br>
                          </div>
                          <div class="tab-pane fade" id="list-CContraseña" role="tabpanel" aria-labelledby="list-CContraseña-list">
                            <h4><b>Cambiar contraseña</b></h4>
                            <form id="form_pwd" >
                              <div class="container">
                                <div class="row justify-content-center">
                                  <div class="col-7 col-md-5">
                                    <label for="newpsw">Nueva contraseña</label>
                                    <input class="form-control" type="password" maxlength="10" name="newpsw" id="newpsw">
                                  </div>
                                </div>
                                <div class="row justify-content-center">
                                  <div class="col-7 col-md-5">
                                    <label for="confnewpwd">Repita la contraseña</label>
                                    <input class="form-control" type="password" maxlength="10" name="confnewpwd" id="confnewpwd">
                                  </div>
                                </div>
                                <div class="row justify-content-end">
                                  <div class="col-6 col-md-4">
                                    <button type="button" name="btnPWD" id="btnPWD"class="btn btn-primary">Guardar</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="tab-pane fade" id="list-Datos" role="tabpanel" aria-labelledby="list-Datos-list">
                            <h4><b>Datos</b></h4>
                            <form action="#" method="post" id="form_data_client">
                            <div class="container">
                              <div class="row justify-content-center">
                                <div class="col-7 col-md-6">
                                  <label for="nomb_comercial">Nombre comercial</label>
                                  <input class="form-control required" type="text" name="nomb_comercial" id="nomb_comercial">
                                </div>
                                <div class="col-7 col-md-6">
                                  <label for="nomb_responsables">Nombre del responsable</label>
                                  <input class="form-control required lettersonly" type="text" name="nomb_responsables" id="nomb_responsables">
                                </div>
                              </div>
                                <div class="row justify-content-start">
                                  <div class="col-6 col-md-4">
                                    <label for="codigo_postal">Codigo postal</label>
                                    <input class="form-control required number" type="text" onKeyPress="if(this.value.length==5) return false;" name="codigo_postal" id="codigo_postal">
                                  </div>
                                  <div class="col-6 col-md-4">
                                    <label for="estado">Estado</label>
                                    <input type="text" class="form-control" name="estado" id="estado" disabled>
                                  </div>
                                  <div class="col-6 col-md-4">
                                    <label for="municipio">Municipio</label>
                                    <input type="text"class="form-control" name="municipio" id="municipio" disabled>
                                  </div>
                                </div>
                                <div class="row justify-content-start">
                                  <div class="col-6 col-md-4">
                                    <label for="colonia">Colonia</label>
                                    <select class="select-css required" name="colonia" id="colonia" style="text-align-last:center">
                                      <option value="" disabled selected >--Seleccione--</option>
                                    </select>
                                  </div>
                                  <div class="col-6 col-md-4">
                                    <label for="calle">Calle</label>
                                    <input class="form-control" type="text" name="calle" id="calle">
                                  </div>
                                  <div class="col-6 col-md-2">
                                    <label for="num_exterior">Num. Ext.</label>
                                    <input class="form-control" type="text" name="num_exterior" id="num_exterior">
                                  </div>
                                  <div class="col-6 col-md-2">
                                    <label for="num_interior">Num. Int.</label>
                                    <input class="form-control" type="text" name="num_interior" id="num_interior">
                                  </div>
                                </div>

                                <div class="row justify-contetn-start">
                                  <div class="col-6 col-md-4">
                                    <label for="tel_fijo">Telefono fijo</label>
                                    <input class="form-control required number phones" type="number" min="1" name="tel_fijo" id="tel_fijo">
                                  </div>
                                  <div class="col-6 col-md-4">
                                    <label for="tel_celular">Telefono celular</label>
                                    <input class="form-control required number phones" type="number" min="1" name="tel_celular" id="tel_celular">
                                  </div>
                                  <div class="col-6 col-md-4">
                                    <label for="email">E-mail</label>
                                    <input class="form-control required email" type="email" name="email" id="email">
                                  </div>
                                </div>
                            </div>
                            <br>
                            <div class="row justify-content-end">
                              <div class="col-6 col-md-3">
                                <button type="button" class="btn btn-primary" id="btnSaveChanges" name="btnSaveChanges">Guardar</button>
                              </div>
                            </div>
                            </form>
                          </div>
                          <div class="tab-pane fade" id="list-Configuracion" role="tabpanel" aria-labelledby="list-Configuracion-list">
                            <h4><b>Configuracion</b></h4>
                            <br>
                            <div class="row justify-content-end">
                              <div class="col-8 col-md-5">
                                <h5><b><label id="perfil">Cliente WebServices</label></b></h5>
                              </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-6 col-md-4">
                                  <label for="comison">Comisión asignada</label>
                                  <input class="form-control" type="number" min="1" name="comision" id="comision" >
                                </div>
                            </div>
                            <br>
                                <a id="btnAbonar" data-toggle="modal" data-target="#modalComision">
                                  <button type="button" class="btn btn-primary" name="btnComision">Modificar</button> </a>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">OK</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Central Modal Settings -->

      <!-- Central Modal Confirmación Abono -->
      <div class="modal fade" id="modalAbonar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Confirmación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ¿Desea continuar y abonar al cliente?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Central Modal Confirmación Abono -->
      <!-- Central Modal Confirmación Abono -->
      <div class="modal fade" id="modalComision" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Confirmación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ¿Desea continuar y modificar la comisión al cliente?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Central Modal Confirmación Abono -->

      <!-- Central Modal Confirmación Abono -->
      <div class="modal fade" id="modalpswdistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Confirmación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row justify-content-center">
                <div class="col-6 col-md-8">
                  <label for="pwddistro">Ingrese su contraseña</label>
                  <input class="form-control" type="password" name="pwddistro" id="pwddistro" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary btn-sm" data-toggle="list" href="#list-CContraseña" data-dismiss="modal">Aceptar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Central Modal Confirmación Abono -->
      <script type="text/javascript">
            $('table').stacktable();
      </script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/bootstrap/js/mdb.min.js"></script>
  </body>
</html>
