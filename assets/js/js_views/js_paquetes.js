/* Funcion validar campos numeros */
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



/**/
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
    var comp=[$("#c").val()];
    $("#lblc").text(comp);
    var cod=[$("#codigo").val()];
    $("#lblcodigo").text(cod);
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
  type: 'error',
  title: '!Formato de Telefono invalido!',
  width: 600,
  padding: '6em',
  background: '#fff',
  backdrop: `
    rgba(0, 136, 255, 0.58)
    center left
    no-repeat
  `,
  showConfirmButton: false,
  timer: 3000

})
}


/**********Area de reutilizacion de Modal para Paquete Sin limite Telcel**********/

$('#paq20').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $20</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="1 Día" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="60 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="20" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="SL020" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#paq30').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $30</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="3 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="80 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="30" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="SL030" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#paq50').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $50</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="7 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="300 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="50" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="SL050" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#paq80').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $80</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="13 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="400 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="80" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="SL080" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#paq100').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $100</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="17 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="800 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="100" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="SL100" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#paq150').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $150</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="28 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="1000 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="150" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="SL150" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#paq200').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $200</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="30 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="1500 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="200" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="SL200" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px;">Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold;" autofocus>');

  });
  $('#paq300').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $300</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="33 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="2500 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="300" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="SL300" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px;">Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold;" autofocus>');

  });
  $('#paq500').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Paquete Sin Límite $500</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="33 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="5000 MB" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="500" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="SL500" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px;">Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold;" autofocus>');

  });
/************Fin paquete Sin limites****************/


 /************Area Internet Por tiempo****************/
  $('#int20').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Internet por Tiempo $20</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="1 Día" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="120 MB para Navegar" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="20" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="Int20" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#int30').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Internet por Tiempo $30</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="3 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="150 MB para Navegar" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="30" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="Int30" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#int50').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Internet por Tiempo $50</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="7 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="400 MB para Navegar" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="50" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="Int50" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#int80').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Internet por Tiempo $80</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="13 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="600 MB para Navegar" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="80" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="Int80" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#int100').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Internet por Tiempo $100</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="15 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="1500 MB para Navegar" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="100" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="Int100" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#int150').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Internet por Tiempo $150</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="26 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="2500 MB para Navegar" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="150" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="Int150" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px; display: none;" disabled>Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold; display: none;" autofocus disabled>');
  });
  $('#int200').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Internet por Tiempo $200</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="30 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="3500 MB para Navegar" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="200" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="Int200" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px;">Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold;" autofocus>');

  });
  $('#int300').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Internet por Tiempo $300</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="33 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="5000 MB para Navegar" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="300" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="Int300" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px;">Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold;" autofocus>');

  });
  $('#int500').click(function(){
    $('#modal-title').replaceWith('<h3 class="col-12 modal-title text-center font-weight-bold text-white" id="modal-title">Internet por Tiempo $500</h3>');
    $('#vigencia').replaceWith('<input type="text" name="vigencia" id="vigencia" class="form-control" value="33 Días" style="display: none" disabled>');
    $('#mb').replaceWith('<input type="text" name="mb" id="mb" class="form-control" value="8000 MB para Navegar" style="display: none" disabled>');
    $('#mont').replaceWith('<input type="text" name="mont" id="mont" class="form-control" value="500" style="display: none" disabled>');
    $('#codigo').replaceWith('<input type="text" name="codigo" id="codigo" class="form-control" value="Int500" style="display: none" disabled>');
    $('#lblpaqC').replaceWith('<label for="recipient-name" id="lblpaqC" class="col-form-label font-weight-bold" style="font-size: 25px;">Confirme Número Telefónico:</label>');
    $('#inpPaqCmx').replaceWith('<input type="tel" class="form-control required number" id="inpPaqCmx" name="inpPaqCmx" pattern="[0-9]{10}" onKeyPress="if(this.value.length==10) return false;" placeholder="Número" style="font-size: 43px; text-align: center; font-weight: bold;" autofocus>');

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



// ajax_web_recarga
/*$("#guardar0").click(function(){
  loguear1('#c','#numero','#monto');
});*/
$("#conf").click(function(){
  paquetes('#lblc','#lblnumero','#lblmonto2','lblcodigo');
});

function paquetes(element) {
/*var com = $('#c').val();
var num = $('#numero').val();
var mon = $('#monto').val();*/

var com1 = $("#lblc").text();
var num1 = $("#lblnumero").text();
var mon1 = $("#lblmonto2").text();
var cod1 = $("#lblcodigo").text();

$('#indicator1').show();

$.post('controller/Ajax_Web.php',
  {
    P: 'RECARGA_APP1',
    c: com1,
    pro: cod1,
    numero: num1,//'2',//bolsa,
    monto: mon1
  },
  function(data) {
    //renderStoreList(data,selStore1);
    $('#indicator1').hide();
  },
  "json"
);
}
