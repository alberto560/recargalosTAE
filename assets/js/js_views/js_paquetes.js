$(function() {
  jQuery.validator.messages.required = 'Esta campo es obligatorio.';
  jQuery.validator.messages.number = 'Esta campo debe ser num&eacute;rico.';
  jQuery.validator.messages.maxlength = 'La direcci&oacute;n de correo es incorrecta.';
  jQuery.validator.messages.minlength = '10 caracteres.';
  validate_tel("#formpaq","#ok");
});
$(function() {
  jQuery.validator.messages.required = 'Esta campo es obligatorio.';
  jQuery.validator.messages.number = 'Esta campo debe ser num&eacute;rico.';
  jQuery.validator.messages.maxlength = 'La direcci&oacute;n de correo es incorrecta.';
  jQuery.validator.messages.minlength = '10 caracteres.';
  validate_telmx("#formpaqmx","#save");
});

$(function(btnEnable) {
  $(btnEnable).click(function() {
    var num =[$("#inpPaq").val()];
    $("#lblnumero").text(num);
    var vig =[$("#vigencia").val()];
    $("#lblvigencia").text(vig);
    var mb =[$("#mb").val()];
    $("#lblmb").text(mb);
    var mont=[$("#mont").val()];
    $("#lblmonto2").text(mont);
  });
});

$(function(btnEnable) {
  $(btnEnable).click(function() {
    var numM =[$("#inpPaqmx").val()];
    $("#lblnumeroMx").text(numM);
    var vigM =[$("#vigenciamx").val()];
    $("#lblvigenciaMx").text(vigM);
    var mbM =[$("#mbmx").val()];
    $("#lblmbMx").text(mbM);
    var montM=[$("#montmx").val()];
    $("#lblmonto2Mx").text(montM);
  });
});


function myFunction() {
  Swal.fire({
  type: 'success',
  title: 'Recarga Exitosa',
  width: 600,
  padding: '6em',
  background: '#fff',
  backdrop: `
    rgba(0, 136, 255, 0.58)
    center left
    no-repeat
  `,
  showConfirmButton: false,
  timer: 1500

})
}

$('#paq20').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $20</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="1 Día" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="60 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="20" style="display: none" disabled>');
  });
  $('#paq30').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $30</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="3 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="80 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="30" style="display: none" disabled>');
  });
  $('#paq50').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $50</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="7 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="300 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="50" style="display: none" disabled>');
  });
  $('#paq80').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $80</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="13 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="400 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="80" style="display: none" disabled>');
  });
  $('#paq100').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $100</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="17 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="800 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="100" style="display: none" disabled>');
  });
  $('#paq150').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $150</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="28 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="1000 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="150" style="display: none" disabled>');
  });
  $('#paq200').click(function(){
    $('#titleModal').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="titleModal">Paquete Sin Límite $200</h3>');
    $('#vigenciamx').replaceWith('<input type="text" name="vigenciamx" id="vigenciamx" class="form-control" value="30 Días" style="display: none" disabled>');
    $('#mbmx').replaceWith('<input type="text" name="mbmx" id="mbmx" class="form-control" value="1500 MB" style="display: none" disabled>');
    $('#montmx').replaceWith('<input type="text" name="montmx" id="montmx" class="form-control" value="200" style="display: none" disabled>');
  });
  $('#paq300').click(function(){
    $('#titleModal').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="titleModal">Paquete Sin Límite $300</h3>');
    $('#vigenciamx').replaceWith('<input type="text" name="vigenciamx" id="vigenciamx" class="form-control" value="33 Días" style="display: none" disabled>');
    $('#mbmx').replaceWith('<input type="text" name="mbmx" id="mbmx" class="form-control" value="2500 MB" style="display: none" disabled>');
    $('#montmx').replaceWith('<input type="text" name="montmx" id="montmx" class="form-control" value="300" style="display: none" disabled>');
  });
  $('#paq500').click(function(){
    $('#titleModal').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="titleModal">Paquete Sin Límite $500</h3>');
    $('#vigenciamx').replaceWith('<input type="text" name="vigenciamx" id="vigenciamx" class="form-control" value="33 Días" style="display: none" disabled>');
    $('#mbmx').replaceWith('<input type="text" name="mbmx" id="mbmx" class="form-control" value="5000 MB" style="display: none" disabled>');
    $('#montmx').replaceWith('<input type="text" name="montmx" id="montmx" class="form-control" value="500" style="display: none" disabled>');
  });





    $("#conf").click(function(event) {
      $("#formpaq")[0].reset();
      $("#ok").prop("disabled", true);
  });
    $("#confmx").click(function(event) {
      $("#formpaqmx")[0].reset();
      $("#save").prop("disabled", true);
  });
    $("#clos").click(function(event) {
      $("#formpaq")[0].reset();
      $("#ok").prop("disabled", true);
  });
    $("#closm").click(function(event) {
      $("#formpaqmx")[0].reset();
      $("#save").prop("disabled", true);
  });

  $(function() {$('[autofocus]').focus()});
