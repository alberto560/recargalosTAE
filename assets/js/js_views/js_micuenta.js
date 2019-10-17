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

$(function(){
  $('#misDatos').click(function(){
    get_datos();
  });
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



function get_datos() {

  $('#proces').show();

  $.post('controller/Ajax_Web.php',
    {
      P: 'USUARIO_FORM'
    },
    function(data, textStatus) {
      renderDatosForm(data);
      $('#proces').hide();
    },
    "json"
  );
}

function renderDatosForm(jsonData) {
var nom;
var apell;
var apellM;
var noExt
var calle;
var cp;
var col;
var telf1;
var telf2;
var mail;

      $.each(jsonData, function (i, member) {
        nom = member[0];
      });
      console.log(nom);

      $.each(jsonData, function (i, member) {
        apell = member[1];
      });
      console.log(apell);

      $.each(jsonData, function (i, member) {
        apellM = member[2];
      });
      console.log(apellM);

      $.each(jsonData, function (i, member) {
        noExt = member[3];
      });
      console.log(noExt);

      $.each(jsonData, function (i, member) {
        calle = member[4];
      });
      console.log(calle);

      $.each(jsonData, function (i, member) {
        cp = member[5];
      });
      console.log(cp);

      $.each(jsonData, function (i, member) {
        col = member[6];
      });
      console.log(col);

      $.each(jsonData, function (i, member) {
        telf1 = member[7];
      });
      console.log(telf1);

      $.each(jsonData, function (i, member) {
        telf2 = member[8];
      });
      console.log(telf2);

      $.each(jsonData, function (i, member) {
        mail = member[9];
      });
      console.log(mail);


    $("#inputName").html(nom);
    $("#inputApaterno").html(apell);
    //$("#ModalSaldoTitle").html(title);

  }
