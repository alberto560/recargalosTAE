<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--JQUERY-->
    <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-clockpicker.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="assets/js/js_views/js_consultas.js"></script>
    <script type="text/javascript" src="assets/js/util/stacktable.js"></script>
    <!--CSS-->

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-clockpicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-datetimepicker.min.css" >
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">
    <link rel="stylesheet" href="assets/css/stacktable.css">
    <link rel="stylesheet" href="assets/css/style-media.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" >
    <title></title>
  </head>
  <body></br>
  <center>
    <div class="contenedor-resp">
      <div class="row">
        <div class="col-md-12" data-step="2" data-intro="Vista Reportes">
          <div class="accordion" id="accordionExample">
            <div class="card-resp" style="border-radius: 32px 32px 32px 32px;" data-step="3" data-intro="Estados de cuenta">
              <div class="card-header heading" id="headingOne" style="border-radius: 32px 32px 32px 32px">
                <div class="col-md-12 text-center">
                  <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h5 style="text-align: center;"><b>Estado de Cuenta</b><i class="fa fa-down pull-right mdi mdi-arrow-down-drop-circle"></i></h5>
                    </a>
                  </h2>
                </div>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="tab-pane fade show active" id="list-estado" role="tabpanel" aria-labelledby="list-estado-list">
                  <div class="container col-md-6" data-step="4" data-intro="Seleccion de punto de venta <img src='ayuda/sites/statics/css/images/img/ayu-pun.png' width='100%' />">
                    </br><label for="inputPunto">Punto de Venta</label>
                    <div class="form-group">
                    <select class="browser-default custom-select md-form" searchable="Search here.." style="text-align: center;">
                      <option value="" disabled selected>--Seleccione--</option>
                      <option value="1">Paseo</option>
                      <option value="2">TMAC</option>
                    </select>
                    </div>
                  </div>
                  <div class="container col-md-6">
                    <div class="row justify-content-center">
                      <div class="col-12" style="text-align: left;" data-step="5" data-intro="Seleccion de punto de venta <img src='ayuda/sites/statics/css/images/img/ayu-fi.png' height='180' />">
                        <label for="btnfechai"> Fecha Inicial </label>
                        <input data-toggle="modal" data-target="#modalfechai" id="btnfechai" name="btnfechai" type="button" class="form-control resaltado" value="">
                      </div>
                      <div class="col-12" role="group" aria-label="Basic example" id="btng" name="btng" style="text-align: left;" data-step="6" data-intro="Seleccion de punto de venta <img src='ayuda/sites/statics/css/images/img/ayu-ff.png' height='180' />">
                        <label for="btnfechaf"> Fecha Final </label>
                        <input data-toggle="modal" data-target="#modalfechaf" id="btnfechaf" name="btnfechaf" type="button" class="form-control resaltado" value="">
                      </div>
                    </div></br>
                    <div class="btn-group" role="group" aria-label="Basic example" id="btng" name="btng" data-step="7" data-intro="Boton para realizar la busqueda y generar una tabla de resultados <img src='ayuda/sites/statics/css/images/img/ayu-tab-rep.png' height='160' />">
                      <button id="btnReporte" name="btnReporte" type="button" class="btn btn-info waves-effect" style="padding: 10px 15px">Reporte</button>
                    </div>
                  </div></br>
                  <div class="container col-md-7" id="rep" style="display:none;">
                    <div class="row justify-center">
                      <h4><b>Reporte</b></h4>
                      <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Fecha</th>
                            <th>Referencia</th>
                            <th>Cargo</th>
                            <th>Abono</th>
                            <th>Saldo</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th>16-01-2018</th>
                            <td>589568456111561</td>
                            <td>2000</td>
                            <td>6546</td>
                            <td>48448</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-resp" style="border-radius: 32px 32px 32px 32px;">
              <div class="card-header heading" id="headingTwo" data-step="8" data-intro="Pagos de procesados" style="border-radius: 32px 32px 32px 32px">
                <div class="col-md-12 text-center">
                  <h2 class="mb-0">
                    <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h5 style="text-align: center;"><b>Pagos  Procesados</b><i class="fa fa-down pull-right mdi mdi-arrow-down-drop-circle"></i></h5>
                    </a>
                  </h2>
                </div>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="tab-pane fade show active" id="list-estado" role="tabpanel" aria-labelledby="list-estado-list">

                  <div class="container col-md-6">
                    <label for="inputPunto">Punto de Venta</label>
                    <div class="form-group">
                      <select class="browser-default custom-select md-form" searchable="Search here.." style="text-align: center;">
                        <option value="" disabled selected>--Seleccione--</option>
                        <option value="1">Paseo</option>
                        <option value="2">TMAC</option>
                      </select>
                    </div>
                  </div>
                  <div class="container col-md-6">
                    <div class="row justify-content-center">
                      <div class="col-12" style="text-align: left;">
                        <label for="">Fecha Inicial</label>
                        <input data-toggle="modal" data-target="#modalfechaiP" id="btnfechaiP" name="btnfechaiP" type="button" class="form-control resaltado" value="">
                      </div>
                      <div class="col-12" style="text-align: left;">
                        <label for="">Fecha Final</label>
                        <input data-toggle="modal" data-target="#modalfechafP" id="btnfechafP" name="btnfechafP" type="button" class="form-control resaltado" value="">
                      </div>
                    </div></br>
                    <div class="btn-group" role="group" aria-label="Basic example" id="btng" name="btng">
                      <button id="btnReporteP" name="btnReporteP" type="button" class="btn btn-info waves-effect" style="padding: 10px 15px">Reporte</button>
                    </div>
                  </div></br>
                  <div class="container col-md-7" id="repP" style="display:none;">
                    <h4><b>Reporte</b></h4>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Fecha</th>
                          <th>Referencia</th>
                          <th>Cargo</th>
                          <th>Abono</th>
                          <th>Saldo</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>20-06-2019</th>
                          <td>5151515151515151</td>
                          <td>100</td>
                          <td>1230</td>
                          <td>6000</td>
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
  </center>
      <!--First Modal -->
      <div class="modal fade" id="modalfechai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                          <input type="text" name="fechai" id="fechai" class="form-control" placeholder="Fecha inicial">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                    </div>
                    <div class="col-4">
                       <div class="timei" data-placement="left" data-align="top" data-autoclose="true">
                          <input type="text" id="timei" name="timei" class="form-control" size="3" placeholder="Hora">
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
      <div class="modal fade" id="modalfechaf" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                          <input type="text" name="fechaf" id="fechaf" class="form-control" placeholder="Fecha final">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>

                    </div>
                    <div class="col-4">
                      <div class="timef" data-placement="left" data-align="top" data-autoclose="true">
                        <input type="text" id="timef" name="timef" class="form-control" size="3" placeholder="Hora">
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
      <!--First Modal -->
      <div class="modal fade" id="modalfechaiP" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                          <input type="text" name="fechaiP" id="fechaiP" class="form-control" placeholder="Fecha inicial">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                    </div>
                    <div class="col-4">
                       <div class="timeiP" data-placement="left" data-align="top" data-autoclose="true">
                          <input type="text" id="timeiP" name="timeiP" class="form-control" size="3" placeholder="Hora">
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button  class="btn btn-danger" data-dismiss="modal">Close</button>
                <button  class="btn btn-default" data-dismiss="modal" id="btnfechainicialP" name="btnfechainicialP">OK</button>
              </div>
          </div>
        </div>
      </div>
      <!--End first modal-->
      <!-- Second Modal -->
      <div class="modal fade" id="modalfechafP" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Fecha termino</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col-6">
                    <div class="input-group date fechas" data-date="" data-date-format="yyyy-mm-dd"  data-link-format="yyyy-mm-dd">
                        <input type="text" name="fechafP" id="fechafP" class="form-control" placeholder="Fecha final">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="timefP" data-placement="left" data-align="top" data-autoclose="true">
                      <input type="text" id="timefP" name="timefP" class="form-control" size="3" placeholder="Hora">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal">Close</button>
              <button class="btn btn-default" data-dismiss="modal" id="btnfechafinalP" name="btnfechafinalP">OK</button>
            </div>
          </div>
        </div>
      </div>
      <!--End second modal-->

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/bootstrap/js/mdb.min.js"></script>

    <script type="text/javascript">

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

      $('.timeiP').clockpicker();
      $('.timefP').clockpicker();

      /*function recibirP(){
        var valor = document.getElementById("fechaiP").value;
        var valor1 = document.getElementById("timeiP").value;
        var valorf = valor+' '+valor1;
        $("#fechaiiP").text(valorf);
      }

      function recibirP2(){
        var valor = document.getElementById("fechafP").value;
        var valor1 = document.getElementById("timefP").value;
        var valorf = valor+' '+valor1;
        $("#fechaffP").text(valorf);
      }*/

      function validar(frm)
        {
          frm.sub.disabled = true;
          for (i=0; i<3; i++)
            if (frm['date'+i].value =='') return
            frm.sub.disabled = false;
        }

        $(document).ready(function(){
         $("#btnReporte").click(function(){
         $("#rep").toggle(100);
         });
        });
        $(document).ready(function(){
         $("#btnReporteP").click(function(){
         $("#repP").toggle(100);
         });
        });

        $('#btnfechainicial').click(function(){
        fechainicial("input#fechai","input#timei",'input#btnfechai');
        });

        $('#btnfechafinal').click(function(){
        fechafinal("input#fechaf","input#timef","input#btnfechaf");
        });

        $('#btnfechainicialP').click(function(){
        fechainicial("input#fechaiP","input#timeiP",'input#btnfechaiP');
        });

        $('#btnfechafinalP').click(function(){
        fechafinal("input#fechafP","input#timefP","input#btnfechafP");
        });

        $('table').stacktable();
    </script>
    <style type="text/css">
      @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
      .panel-title > a:before {
          float: right !important;
          font-family: FontAwesome;
          content:"\f068";
          padding-right: 5px;
      }
      .panel-title > a.collapsed:before {
          float: right !important;
          content:"\f067";
      }
      .panel-title > a:hover,
      .panel-title > a:active,
      .panel-title > a:focus  {
          text-decoration:none;
      }

      .card-header .fa {
      transition: .3s transform ease-in-out;
      }
      .card-header .collapsed .fa {
        transform: rotate(90deg);
      }
    </style>
  </body>
</html>
