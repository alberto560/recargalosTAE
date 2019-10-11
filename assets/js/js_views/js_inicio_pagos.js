
$(function() {
  //change of images in only one modal
  $('#pagoCFE').click(function(){
    $('#img_info').replaceWith('<img id="img_info" src="ayuda/sites/statics/css/images/CFEInfo.jpeg" class="img-fluid" alt="Responsive image"">');
    $('#service').replaceWith('<label class="modal-title" id="service" style="display:none" disabled>CFE</label>');
  });
  $('#pagoTELMEX').click(function(){
    $('#img_info').replaceWith('<img id="img_info" src="ayuda/sites/statics/css/images/TelmexInfo.png" class="img-fluid" alt="Responsive image"">');
    $('#service').replaceWith('<label class="modal-title" id="service" style="display:none" disabled>TELMEX</label>');
  });
  $('#pagoMEGACABLE').click(function(){
    $('#img_info').replaceWith('<img id="img_info" src="ayuda/sites/statics/css/images/megacableInfo.png" class="img-fluid" alt="Responsive image"">');
    $('#service').replaceWith('<label class="modal-title" id="service" style="display:none" disabled>MEGACABLE</label>');
  });
  $('#pagoIZZI').click(function(){
    $('#img_info').replaceWith('<img id="img_info" src="ayuda/sites/statics/css/images/IzziInfo.png" class="img-fluid" alt="Responsive image"">');
    $('#service').replaceWith('<label class="modal-title" id="service" style="display:none" disabled>IZZI</label>');
  });
  $('#pagoDISH').click(function(){
    $('#img_info').replaceWith('<img id="img_info" src="ayuda/sites/statics/css/images/DishInfo.png" class="img-fluid" alt="Responsive image"">');
    $('#service').replaceWith('<label class="modal-title" id="service" style="display:none" disabled>DISH</label>');
  });
  $('#pagoTOTALP').click(function(){
    $('#img_info').replaceWith('<img id="img_info" src="ayuda/sites/statics/css/images/TotalPInfo.png" class="img-fluid" alt="Responsive image"">');
    $('#service').replaceWith('<label class="modal-title" id="service" style="display:none" disabled>TOTAL PLAY</label>');
  });
  $('#pagoFULLER').click(function(){
    $('#img_info').replaceWith('<img id="img_info" src="ayuda/sites/statics/css/images/FullerInfo.png" class="img-fluid" alt="Responsive image"">');
    $('#service').replaceWith('<label class="modal-title" id="service" style="display:none" disabled>FULLER</label>');
  });
  $('#pagoTELCEL').click(function(){
    $('#img_info').replaceWith('<img id="img_info" src="ayuda/sites/statics/css/images/TelcelInfo.png" class="img-fluid" alt="Responsive image"">');
    $('#service').replaceWith('<label class="modal-title" id="service" style="display:none" disabled>TELCEL</label>');
  });
  //
  //Add comision to monto
  $("#btnApuntador").click(function() {
    var ref = $("#referencia_pago").val();
    $("#lblreferencia").text(ref);

    var mon = $("#monto_pago").val();
    var comision = 10.00;
    var total = parseFloat(mon) + parseFloat(comision);

    $("#lblmonto").text(mon);
    $("#lbltotalPago").text(total);
  });
  //
});

//Validate form with validate rules script
$(document).ready(function() {
  $(function() {
     validar_formulario("#form_pago_servicios","#btnApuntador");
  });
  CleanModal("#closeApuntador","#form_pago_servicios");
  CleanModal2("#modalPagosInicio","#form_pago_servicios");

  recorrido_inicioPS();
  recorrido();
  //
});

$(function() {
  $('#return_pagos').on('click', function(){
    var menues = $(".nav li");
    menues.removeClass("active");
    $("#li_pagos").addClass("active");
    ret_vistas("views/pago_servicios/pagos.php",'#result');
  });
  //contadores de clic´s
  $('#divcfe2').click(function(){
    count_cfe();
  });
  $('#divtelmex2').click(function(){
    count_telmex();
  });
  $('#divtelcel2').click(function(){
    count_telcelPS();
  });
  $('#divmegacable2').click(function(){
    count_megacable();
  });
  $('#divizzi2').click(function(){
    count_izzi();
  });
  $('#divdish').click(function(){
    count_dish();
  });
  $('#divtotalp').click(function(){
    count_totalp();
  });
  $('#divfuller').click(function(){
    count_fuller();
  });
});
