<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!--JQUERY-->
      <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
      <!--SCRIPT-->
      <script type="text/javascript" src="assets/js/js_views/js_consultas.js"></script>
      <script type="text/javascript" src="assets/bootstrap/js/bootstrap-clockpicker.min.js"></script>
      <script type="text/javascript" src="assets/bootstrap/js/bootstrap-datetimepicker.js"></script>

      <!--CSS-->
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">

      <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-clockpicker.min.css" >
      <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-datetimepicker.min.css" >
      <!-- Material Design Bootstrap -->
      <link rel="stylesheet" href="assets/css/mdb.min.css" >
      <link rel="stylesheet" href="assets/css/css.css" >
      <link rel="stylesheet" href="assets/css/style-media.css" >

      <title></title>
    </head>
    <body>
      <center>
      <!--Navbar -->
          <div class="contenedor-resp" data-step="2" data-intro="Vista consulta de Procesados">
            <br>
            <!--div class="row">
              <div class="col-md-12 grid-margin stretch-card justify-content-center">
                <div class="card-resp">
                  <div class="card-body w-100 p-2" style="height: 3rem;">
                    <div class="col-12">
                      <h5><b>Consultas Procesados</b></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div-->


            <div class="grid-margin stretch-card">
              <div class="card-resp">
                <div class="card-body">
                  <div class="col-12">
                    <h4><b>&emsp;Consultas Procesados&emsp;</b></h4>
                  </div>
                      <br>
                        <div class="col-12">
                          <div class="row justify-content-md-center">
                              <div class="col-12 col-md-2" data-step="3" data-intro="Agrergar fecha inicial <img src='ayuda/sites/statics/css/images/img/ayu-fi.png' weight='100' height='137' />">
                                <center><b><label for="btnfechai">Fecha inicial</label></b> </center>
                                <input data-toggle="modal" data-target="#modalfechai" type="button" id="btnfechai" name="btnfechai" class="form-control resaltado" value="">
                              </div>
                              <div class="col-12 col-md-2" data-step="4" data-intro="Agrergar fecha final <img src='ayuda/sites/statics/css/images/img/ayu-ff.png' weight='100' height='135' />">
                                <center><b><label for="btnfechaf">Fecha final</label></b> </center>
                                <input data-toggle="modal" data-target="#modalfechaf" type="button" id="btnfechaf" name="btnfechaf" class="form-control resaltado" value="" >
                              </div>
                              <div class="col-12 col-md-2" data-step="5" data-intro="Agrergar Sucursal <img src='ayuda/sites/statics/css/images/img/ayu-suc.png' weight='100' height='135' />">
                                <center><b><label for="btnStore">Sucursal</label></b> </center>
                                <input data-toggle="modal" data-target="#modalStore" type="button" name="btnStore" id="btnStore" class="form-control resaltado" value="">
                              </div>
                              <div class="col-12 col-md-2" data-step="6" data-intro="Agrergar fecha final <img src='ayuda/sites/statics/css/images/img/ayu-edo.png' weight='100' height='135' />">
                                <center><b><label for="btnStatus">Estado</label></b> </center>
                                <input data-toggle="modal" data-target="#modalStatus" type="button" id="btnStatus" name="btnStatus" class="form-control resaltado">
                              </div>
                              <div class="col-12 col-md-2" data-step="7" data-intro="Agrergar numero para buscar">
                                <center><b><label for="exampleForm2">Ingrese el número</label></b> </center>
                                <input type="tel" onKeyPress="if(this.value.length==10) return false;" id="enternumber" name="enternumber" class="form-control">
                              </div>
                              <br>
                              <div class="col-12 col-md-2" data-step="8" data-intro="Boton para realizar la busqueda y generar una tabla de resultados <img src='ayuda/sites/statics/css/images/img/ayu-tab.png' height='220' />">
                                <center>
                                  <label for="btnconsultar"><i class="mdi mdi-account-search "></i> </label>
                                </center>
                                <input type="button" name="btnconsultar" id="btnconsultar" value="Buscar" class="form-control btn-block text-white" style="background: #33b5e5;">
                              </div>
                          </div>
                        </div>
                      <br>
                      <br>
                      <div id="prueba" class="">

                      </div>

                      <br>
                      <div class="row justify-content-md-center">
                        <div id="contenedorConsulta" class="table-responsive col-12 col-md-10 ">

                        </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </center>
        <div id="indicator" style="display: none; text-align: center;" class="loading_img">
          <img src="assets/images/indicator.gif"/>
        </div>
      <!--First Modal -->
      <div class="modal fade" id="modalfechai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Fecha inicio</h5>
              <button  class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-6">
                    <div class="input-group date fechas" data-date="" data-date-format="yyyy-mm-dd"  data-link-format="yyyy-mm-dd">
                        <input type="text" onfocus="blur();" name="fechai" id="fechai" class="form-control" placeholder="Fecha inicial">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>

                  </div>
                  <div class="col-4">
                     <div class="timei" data-placement="left" data-align="top" data-autoclose="true">
                        <input type="text" onfocus="blur();" id="timei" name="timei" class="form-control" size="3" placeholder="Hora">
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button  class="btn btn-danger" data-dismiss="modal">Close</button>
              <button  class="btn btn-default" data-dismiss="modal" id="btnfechainicial" name="btnfechainicial">OK</button>
            </div>
          </div>
        </div>
      </div>
      <!--End first modal-->
      <!-- Second Modal -->
      <div class="modal fade" id="modalfechaf" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Fecha termino</h5>
            <button  class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="row justify-content-md-center">
                <div class="col-6">
                  <div class="input-group date fechas" data-date="" data-date-format="yyyy-mm-dd"  data-link-format="yyyy-mm-dd">
                      <input type="text" onfocus="blur();" name="fechaf" id="fechaf" class="form-control" placeholder="Fecha final">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                  </div>

                </div>
                <div class="col-4">
                  <div class="timef" data-placement="left" data-align="top" data-autoclose="true">
                    <input type="text" onfocus="blur();"  id="timef" name="timef" class="form-control" size="3" placeholder="Hora">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button  class="btn btn-danger" data-dismiss="modal">Close</button>
            <button  class="btn btn-default" data-dismiss="modal" id="btnfechafinal" name="btnfechafinal">OK</button>
          </div>
        </div>
      </div>
      </div>
      <!--End second modal-->
      <!-- Third Modal -->
      <div class="modal fade" id="modalStore" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Sucursal</h5>
            <button  class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <select class="custom-select" id="selectStore" name="selectStore">            
            </select>
          </div>
          <div class="modal-footer">
            <button  class="btn btn-danger" data-dismiss="modal">Close</button>
            <button  class="btn btn-default" data-dismiss="modal" id="btnSelectStore" name="btnSelectStore">OK</button>
          </div>
        </div>
      </div>
      </div>
      <!--End Third modal-->
      <!-- Four Modal -->
      <div class="modal fade" id="modalStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
      <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Estado de la transacción</h5>
            <button  class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <select class="custom-select" id="selectStatus" name="selectStatus">
              <option value="TD">Todas</option>
              <option value="ER">Fallidas</option>
              <option value="OK">Exitosas</option>              
            </select>
          </div>
          <div class="modal-footer">
            <button  class="btn btn-danger" data-dismiss="modal">Close</button>
            <button  class="btn btn-default" data-dismiss="modal" id="btnSelectStatus" name="btnSelectStatus" >OK</button>
          </div>
        </div>
      </div>
      </div>
      <!--End Four modal-->
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="assets/bootstrap/js/mdb.min.js"></script>

      <script type="text/javascript">
        //clockpicker and datepicker
        $('.timei').clockpicker();
        $('.timef').clockpicker();
        $('.fechas').datetimepicker({
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
      </script>


    </body>


</html>
