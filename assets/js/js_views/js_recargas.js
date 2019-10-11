$(function() {
    //change of images in only one modal
  $('#recTelcel').click(function(){
  $('#comp').replaceWith('<img id="comp" src="ayuda/sites/statics/css/images/img/telcel_b.png" class="img-fluid" alt="Responsive image">');
  $('#compania').replaceWith('<input type="text" name="compania" id="compania" class="form-control" value="TELCEL" style="display: none" disabled>');
  });
  $('#recMovistar').click(function(){
  $('#comp').replaceWith('<img id="comp" src="ayuda/sites/statics/css/images/img/mov_1.png" class="img-fluid" alt="Responsive image">');
  $('#compania').replaceWith('<input type="text" name="compania" id="compania" class="form-control" value="MOVISTAR" style="display: none" disabled>');
  });
  $('#recAtnt').click(function(){
  $('#comp').replaceWith('<img id="comp" src="ayuda/sites/statics/css/images/img/att_2.png" class="img-fluid" alt="Responsive image">');
  $('#compania').replaceWith('<input type="text" name="compania" id="compania" class="form-control" value="AT&T" style="display: none" disabled>');
  });
  $('#recUnefon').click(function(){
  $('#comp').replaceWith('<img id="comp" src="ayuda/sites/statics/css/images/img/une1.png" class="img-fluid" alt="Responsive image">');
  $('#compania').replaceWith('<input type="text" name="compania" id="compania" class="form-control" value="UNEFON" style="display: none" disabled>');
  });
  $('#recFlashmobile').click(function(){
  $('#comp').replaceWith('<img id="comp" src="ayuda/sites/statics/css/images/img/flash.png" class="img-fluid" alt="Responsive image">');
  $('#compania').replaceWith('<input type="text" name="compania" id="compania" class="form-control" value="FLASHMOBILE" style="display: none" disabled>');
  });
  $('#recVirgin').click(function(){
  $('#comp').replaceWith('<img id="comp" src="ayuda/sites/statics/css/images/img/vir1.png" class="img-fluid" alt="Responsive image">');
  $('#compania').replaceWith('<input type="text" name="compania" id="compania" class="form-control" value="VIRGIN" style="display: none" disabled>');
  });
  $('#recAlo').click(function(){
  $('#comp').replaceWith('<img id="comp" src="ayuda/sites/statics/css/images/img/al.png" class="img-fluid" alt="Responsive image">');
  $('#compania').replaceWith('<input type="text" name="compania" id="compania" class="form-control" value="ALO" style="display: none" disabled>');
  });
  $('#recCierto').click(function(){
  $('#comp').replaceWith('<img id="comp" src="ayuda/sites/statics/css/images/img/cier.png" class="img-fluid" alt="Responsive image">');
  $('#compania').replaceWith('<input type="text" name="compania" id="compania" class="form-control" value="CIERTO" style="display: none" disabled>');
  });
  $('#recTuenti').click(function(){
  $('#comp').replaceWith('<img id="comp" src="ayuda/sites/statics/css/images/img/tue.png" class="img-fluid" alt="Responsive image">');
  $('#compania').replaceWith('<input type="text" name="compania" id="compania" class="form-control" value="TUENTI" style="display: none" disabled>');
  });
});
//validacion del numero
$(document).ready(function(){
  var numero, numero_movistar, numero_atn, numero_unefon, numero_flashmobile, numero_virgin, numero_alo, numero_cierto, numero_tuenti, conf_monto, monto;

  $("#numero").keyup(function(){
      numero=$("#numero").val();
      if(numero.length<10){
        $("#adv_numero").css("display","block");
        $("#numero").css('background', '#ffdddd');
      }
      else{
        $("#adv_numero").css("display","none");
        $("#numero").css('background', '#ffffff');
      }
  });
});
//fin de validacion
//Validacion monto y confirmar monto
$(function(){
  $(document).on('keyup','#monto, #conf_monto',function(){
    var monto = $('#monto').val().trim();
    var conf_monto = $('#conf_monto').val().trim();
    if( !monto || !conf_monto || monto == '' || conf_monto == '' ){
      $('#adv').removeClass('text-success').addClass('text-danger').text('Confirme el monto');
      $("#conf_monto").css('background', '#ffdddd');
    }
    else{
      if( monto !== conf_monto ){
        $('#adv').removeClass('text-success').addClass('text-danger').text('Confirme el monto');
        $("#conf_monto").css('background', '#ffdddd');
      }
      else{
        $('#adv').removeClass('text-danger').addClass('text-success').text('Monto confirmado');
        $("#conf_monto").css('background', '#ffffff');
      }
    }
  });
});
//Fin de la validacion de monto y confirmar monto

//funciones para activar montos de mas de 200
$( function() {
  //activar input de confirmacion de monto
  $("#monto").change( function() {
    if ($(this).val() === "0" || $(this).val() === "10" || $(this).val() === "20" || $(this).val() === "30" || $(this).val() === "50" || $(this).val() === "80" || $(this).val() === "100" || $(this).val() === "150"){
      //$("#conf_monto").prop("disabled", true);
      $("#adv_monto").css("display", "none");
      $("#conf_monto").css("display", "none");
      $('#conf_monto').val('');
      $("#adv").css("display","none");
      $("#guardar").prop("disabled", false);
      $("#guardar0").prop("disabled", false);
      $("#conf_monto").css('background', '#eeeeee');
    }
    else {
      //$("#conf_monto").prop("disabled", false);
      $("#adv_monto").css("display", "block");
      $("#conf_monto").css("display", "block");
      $('#conf_monto').val('');
      $("#guardar").prop("disabled", false);
      $("#guardar0").prop("disabled", false);
      $("#conf_monto").css('background', '#ffffff');
      $("#adv").css("display","block");
    }
  });
// --- Fin ---
});

//Modal ConfirmacionPago
$("#guardar0").click(function() {
  var comp = $("#compania").val();
  $("#lblcompania").text(comp);
  var num = $("#numero").val();
  $("#lblnumero").text(num);
  var mon = $("#monto").val();
  $("#lblmonto1").text(mon);
});
//Fin modal de confirmacion

//   limpiar modal telcel
$("#btnCancelar").click(function(event) {
  $("#validacion")[0].reset();
  $("#adv_numero").css("display","none");
  $("#numero").css('background', '#ffffff');
  $("#adv").css("display","none");
  $("#adv_monto").css('display', 'none');
  $("#conf_monto").css('display', 'none');
  $("#conf_monto").css('background', '#ffffff');
  $("#guardar0").prop("disabled", true);
});
