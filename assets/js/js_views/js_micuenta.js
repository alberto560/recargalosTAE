$(function() {
  //Metodo para validar
   validate_PWD("#checkpwd","#guardar");
     //
  //Metodo para obtener el Codigo postal
     $("#inputCP").keyup(function() {
       var cp0 = $("#inputCP").val();
       getData(cp0,"#inputEstado","#inputMunicipio","#inputColonia");
     });
     //
});

$(function() {
  validate_CTA("#modalpwd","#saveNewOp");
});

function myFunction(){
  Swal.mixin({
  input: 'password',
  inputPlaceholder: "Pin",
  inputAttributes: {
    maxlength: 4,
  },
  //html: '<p><input id="input-field" maxlength="32" class="form-control" style="text-align:center;">',
  confirmButtonText: 'Iniciar &rarr;',
  showCancelButton: true,
  }).queue([
  {
    title: '<h1>Ingrese Su PIN a 4 Dígitos</h1>',
  }
]).then((result) => {
  if (result.value) {
    Swal.fire({
      title: 'Estado Activado',
      showConfirmButton: false,
      timer: 1500
    })
  }
  })
}


$('#addOperador').click(function(){
  $('#operadorTitle').replaceWith('<h5 id="operadorTitle">Agregar Operador</h5>');
  $('#lblOp').replaceWith('<label id="lblOp" for="nameOperator"> Nombre Operador</label>');
  $('#nameOperator').replaceWith('<input type="text" class="form-control" id="nameOperator" placeholder="Nombre de Operador">');
});

$('#edita').click(function(){
  $('#operadorTitle').replaceWith('<h5 id="operadorTitle">Cambiar Contraseña</h5>');
  $('#lblOp').replaceWith('<label id="lblOp" for="nameOperator" style="display: none;" disabled> Nombre Operador</label>');
  $('#nameOperator').replaceWith('<input type="text" class="form-control" id="nameOperator" placeholder="Nombre de Operador" style="display:none;" disabled>');
});
