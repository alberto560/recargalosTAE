<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Estados de cuenta</title>
    <!--JQUERY-->
    <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
    <!--SCRIPT-->
    <script type="text/javascript" src="assets/js/js_views/js_consultas.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-clockpicker.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-datetimepicker.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/bootstrap/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/js/util/stacktable.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">
    <link rel="stylesheet" href="assets/css/style-media.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-clockpicker.min.css" >
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-datetimepicker.min.css" >
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" >
    <link rel="stylesheet" href="assets/css/css.css" >
    <link rel="stylesheet" href="assets/css/stacktable.css">
  </head>
  <body>
    <center>
      <p></p>
      <div class="contenedor-resp" data-step="2" data-intro="Vista Estado de cuenta">
         <!--div class="row">
           <div class="col-md-12 grid-margin stretch-card justify-content-center">
             <div class="card-resp">
               <div class="card-body w-100 p-2" style="height: 3rem;">
                 <div class="col-12">
                   <h4><b>&emsp;Estado de cuenta&emsp;</b></h4>
                 </div>
               </div>
             </div>
           </div>
         </div-->
         <p></p>
         <!-- Div de los botones -->
    	   <div class="grid-margin stretch-card">
    	      <div class="card-resp">
    	         <div class="card-body">
    	            <div class="col-12">
                    <div class="col-12">
                      <h4><b>&emsp;Estado de cuenta&emsp;</b></h4>
                    </div><br>
                    <div class="row justify-content-md-center" style="text-align: center;">
                        <div class="col-12 col-md-2" data-step="3" data-intro="Agrergar local <img src='ayuda/sites/statics/css/images/img/ayu-loc.png' weight='100' height='137' />">
                          <label for="lbllocal"><b> Local </b></label>
                          <input data-toggle="modal" data-target="#modalLocal" type="button" id="btnLocal" name="btnLocal"  class="form-control resaltado">
                        </div>
                        <div class="col-12 col-md-2" data-step="4" data-intro="Agrergar tipo de bolsa <img src='ayuda/sites/statics/css/images/img/ayu-bol.png' weight='100' height='137' />">
                          <label for="lblBolsa"><b> Tipo de bolsa </b></label>
                          <input data-toggle="modal" data-target="#modalBolsa" type="button" id="btnBolsa" name="btnBolsa" class="form-control resaltado">
                        </div>
                        <div class="col-12 col-md-2" data-step="5" data-intro="Agrergar tipo de cuenta <img src='ayuda/sites/statics/css/images/img/ayu-cue.png' weight='100' height='137' />">
                          <label for="lblCuenta"><b> Tipo de cuenta </b></label>
                          <input data-toggle="modal" data-target="#modalCuenta" type="button" id="btnCuenta" name="btnCuenta" class="form-control resaltado">
                        </div>
                        <div class="col-12 col-md-2" data-step="6" data-intro="Agrergar fecha inicial <img src='ayuda/sites/statics/css/images/img/ayu-fi.png' weight='100' height='137' />">
                          <label for="btnfechai"><b> Fecha inicial </b></label>
                          <input data-toggle="modal" data-target="#modalfechai" type="button" id="btnfechai" name="btnfechai" class="form-control resaltado" value="">
                        </div>
                        <div class="col-12 col-md-2" data-step="7" data-intro="Agrergar fecha final <img src='ayuda/sites/statics/css/images/img/ayu-ff.png' weight='100' height='137' />">
                          <label for="btnfechaf"><b> Fecha final </b></label>
                          <input data-toggle="modal" data-target="#modalfechaf" type="button" id="btnfechaf" name="btnfechaf"  class="form-control resaltado" value="">
                        </div>
                        <div class="col-12 col-md-2" data-step="8" data-intro="Boton para realizar la busqueda y generar una tabla de resultados <img src='ayuda/sites/statics/css/images/img/ayu-tab1.png' height='140' />">
                          <label for="" style="color:white"><b> _ </b></label>
                          <input type="button" style="background: #0099CC; color:black;" id="btnconsultar" value="Buscar" class="form-control">
                        </div>
                    </div>
    	            </div>
                  <br>
    	         </div>
    	      </div>
    	   </div>
         <!-- Termina div de los botones -->
         <!-- Inicia tabla -->
         <p />
         <div id="tabla" class="grid-margin stretch-card table table-striped table-bordered" style="display:none">
    	      <div class="card">
    	         <div class="card-body">
    	            <div class="col-12 text-center table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th class="text-center">Fecha</th>
                          <th class="text-center">Referencia</th>
                          <th class="text-center">Cargo</th>
                          <th class="text-center">Abono</th>
                          <th class="text-center">Saldo</th>
                          <th class="text-center">Total cargo</th>
                          <th class="text-center">Total abono</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="pt-3-half">2019-07-26</td>
                          <td class="pt-3-half">0123456789</td>
                          <td class="pt-3-half">1000</td>
                          <td class="pt-3-half">2000</td>
                          <td class="pt-3-half">3000</td>
                          <td class="pt-3-half">2000</td>
                          <td class="pt-3-half">3000</td>
                        </tr>
                        <tr>
                          <td class="pt-3-half">2019-07-26</td>
                          <td class="pt-3-half">0123456789</td>
                          <td class="pt-3-half">1000</td>
                          <td class="pt-3-half">2000</td>
                          <td class="pt-3-half">3000</td>
                          <td class="pt-3-half">2000</td>
                          <td class="pt-3-half">3000</td>
                        </tr>
                      </tbody>
                    </table>
    	            </div>
    	         </div>
    	      </div>
    	   </div>
         <!-- Termina tabla -->
    	</div>
    </center>
    <!-- Modal local -->
    <div class="modal fade" id="modalLocal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Local</h5>
          <button  class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <select class="custom-select" id="selectLocal" name="selectLocal">
              <option value="Miscelanea chuchita">Miscelanea chuchita</option>
              <option value="Tienda paco">Tienda paco</option>
              <option value="+ Barato">+ Barato</option>
          </select>
        </div>
        <div class="modal-footer">
          <button  class="btn btn-danger" data-dismiss="modal">Close</button>
          <button  class="btn btn-default" data-dismiss="modal" id="btnSelectLocal" name="btnSelectLocal">OK</button>
        </div>
      </div>
    </div>
    </div>
    <!--End modal local-->

    <!-- Modal bolsa -->
    <div class="modal fade" id="modalBolsa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tipo de bolsa</h5>
          <button  class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <select class="custom-select" id="selectBolsa" name="selectBolsa">
              <option value="TAE">TAE</option>
              <option value="P.SERVICIOS">P.SERVICIOS</option>
          </select>
        </div>
        <div class="modal-footer">
          <button  class="btn btn-danger" data-dismiss="modal">Close</button>
          <button  class="btn btn-default" data-dismiss="modal" id="btnSelectBolsa" name="btnSelectBolsa" >OK</button>
        </div>
      </div>
    </div>
    </div>
    <!--End modal bolsa-->

    <!-- Modal cuenta -->
    <div class="modal fade" id="modalCuenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tipo de cuenta</h5>
          <button  class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <select class="custom-select" id="selectCuenta" name="selectCuenta">
              <option value="TODOS">TODOS</option>
              <option value="ABONOS">ABONOS</option>
              <option value="RECARGAS">RECARGAS</option>
          </select>
        </div>
        <div class="modal-footer">
          <button  class="btn btn-danger" data-dismiss="modal">Close</button>
          <button  class="btn btn-default" data-dismiss="modal" id="btnSelectCuenta" name="btnSelectCuenta" >OK</button>
        </div>
      </div>
    </div>
    </div>
    <!--End cuenta bolsa-->

    <!--Modal fecha inicial -->
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
    <!--Termina modal fecha inicial-->

    <!-- Inicia Modal fecha final-->
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
                  <input type="text" onfocus="blur();" id="timef" name="timef" class="form-control" size="3" placeholder="Hora">
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
    <!--Termina modal fecha final-->


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

      $('table').stacktable();

    </script>

  </body>
</html>
