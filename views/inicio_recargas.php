<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--JQUERY-->
    <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
    <!--JS ORDER MAS USADOS-->
    <script type="text/javascript" src="assets/js/order/tinysort.js"></script>
    <script type="text/javascript" src="assets/js/order/order.js"></script>
    <!--SCRIPT-->
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap-clockpicker.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/js_views/js_recargas.js"></script>
    <script type="text/javascript" src="assets/js/util/alertify.min.js"></script>
    <script type="text/javascript" src="assets/js/js_views/js_env-rec.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-clockpicker.min.css" >
    <link rel="stylesheet" type="text/css" href="assets/css/util/alertify.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mystyle.css">
    <script src="assets/js/util/sweetalert.js"></script>
  </head>
  <body>
    <div id="toHome1">
    <div id="div_gralR" class="row mb-5 flex-center">
      <!--Zoom effect-->
      <div id="divtelcelR" class="view overlay zoom col-6 col-md-4" data-step="4" data-intro="<b>Realizar recarga</b> <img src='ayuda/sites/statics/css/images/img/ayu-tel.png' height='350' />">
          <a data-toggle="modal" data-target="#modal_recarga" id="recTelcel">
          <br>
          <img src="ayuda/sites/statics/css/images/img/telcel.png" class="img-fluid tel" alt="smaple image">
          <br>
          </a>
      </div>
      <div id="divattR" class="view overlay zoom col-6 col-md-4 rounded">
        <a data-toggle="modal" data-target="#modal_recarga" id="recAtnt">
          <br>
          <img src="ayuda/sites/statics/css/images/img/atnt.png" class="img-fluid tel" alt="smaple image">
          <br>
        </a>
      </div>
      <div id="divmovistarR" class="view overlay zoom col-6 col-md-4 rounded">
        <a data-toggle="modal" data-target="#modal_recarga" id="recMovistar">
          <br>
          <img src="ayuda/sites/statics/css/images/img/movistar.png" class="img-fluid tel" alt="smaple image">
          <br>
        </a>
      </div>
      <div sort="0" class="view overlay zoom col-6 col-md-4 rotateMe" title="Ver mas compañias" data-step="5" data-intro="Ver mas compañias">
        <br />
        <a id="return_recarga1">
          <center><img src="ayuda/sites/statics/css/images/img/mas1.png" class="img-fluid mov " alt="smaple image"></center>
        </a>
        <br />
      </div>
    </div>
    <!-- Modal recarga telcel -->
      <div class="modal fade" id="modal_recarga" tabindex="-1" role="dialog" aria-labelledby="list-settings2-list" aria-hidden="true">
      <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-md" role="document" >
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel"><img id="comp" ></h4>
            </div>
            <div class="modal-body">
              <form id="validacion">
                <div class="col-15">
                  <P align="left">
                  <label for="titulo" class="labelStyle" style="font-size:25px;">Número:</label>
                  <input type="tel" name="numero" id="numero" class="form-control" style="font-size:47px; text-align:center; font-weight:bold;" onKeyPress="if(this.value.length==10) return false;" placeholder="Número">
                  <p class="" align="left" id="adv_numero" style="display:none;color:red;"><em>Ingrese el número completo</em></p>
                </div>
                <div class="col-15">
                  <p for="contenido" class="labelStyle" align="right" style="font-size:25px;">Cantidad:</p>
                  <select id="monto" class="select" style="text-align-last:center; font-weight:bold; -webkit-appearance: none;">
                    <option value="0" selected="">-Seleccione-</option>
                    <option value="10">$10.00</option>
                    <option value="20">$20.00</option>
                    <option value="30">$30.00</option>
                    <option value="50">$50.00</option>
                    <option value="80">$80.00</option>
                    <option value="100">$100.00</option>
                    <option value="150">$150.00</option>
                    <option value="200">$200.00</option>
                    <option value="300">$300.00</option>
                    <option value="500">$500.00</option>
                  </select>
                </div>
                <div class="col-15">
                  <p></p>
                  <P align="left">
                  <label for="contenido" id="adv_monto" style="display: none; font-size:25px;">Confirmar Cantidad:</label>
                  <input type="tel" name="conf_monto" id="conf_monto" class="form-control" style="font-size:47px; text-align:center; font-weight:bold; display:none;" onKeyPress="if(this.value.length==3) return false;" placeholder="Ingrese el monto">
                  <p align="left" id="adv" font="em"><em></em></p>
                  <input id="c">
                  <input id="c1">
                  <p></p>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal" id="btnCancelar">Cancelar</button>
              <button type="button" id="guardar0" class="btn btn-primary btn-sm" data-toggle="modal" data-dismiss="modal" href="#modalConfPagoRecarga" disabled>Confirmar</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Termina modal recarga telcel -->
      <!-- Modal ConfirmacionPago Recarga-->
      <div class="modal fade" id="modalConfPagoRecarga" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
      <!--div class="modal-dialog modal-dialog-centered" role="document"-->
      <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
          <div class="modal-header blue-gradient">
            <h5 class="modal-title w-100 font-weight-bold text-center text-white" id="exampleModalLongTitle">Confirmación de recarga</h5>
          </div>
          <div class="modal-body">
            <div class="row-justify-content-center">
              <center>
              <div class="col-12 col-md-12">
                <p>Compañia</p>
                <h1><label id="lblcompania"></label></h1>
                <h1><label id="lblcompania1" style="display: none" disabled>'></label></h1>
                <p>Se realizará una recarga al número</p>
                <h1><label id="lblnumero"></label></h1>
                <p>Por la cantidad de</p>
                <h1>$<label id="lblmonto1"></label></h1>
                <p><b>¿Desea continuar?</b></p>
              </div>
            </center>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" data-toggle="modal" href="#modal_recarga">Corregir</button>
            <button type="button" class="btn btn-primary" onclick="fun()" data-dismiss="modal" id="btnProcesar">Procesar</button>
          </div>
        </div>
      </div>
      </div>
      <!--End modal ConfirmacionRecarga-->
    </div>
    <script type="text/javascript">
      $('#return_recarga1').on('click', function(){
        var menues = $(".nav li");
        menues.removeClass("active");
        $("#li_recargas").addClass("active");
        ret_vistas("views/recargas/recarga.php",'#result');
      });

      $(document).ready(function() {
        recorrido_recargas();
      });

      $("#divtelcelR").click(function() {
        count_telcel();
      });
      $("#divattR").click(function() {
        count_att();
      });
      $("#divmovistarR").click(function() {
        count_movistar();
      });

    </script>
  </body>
</html>
