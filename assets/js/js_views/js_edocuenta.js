//funciones recibir elementos para label - View Consultas
function fechainicial(fechai,timei,resultado) {
  valor = $(fechai).val();
  valor1 = $(timei).val();
  var valorf = valor+' '+valor1;
  $(resultado).val(valorf);
}

function fechafinal(fechaf,timef,resultado) {
  valor = $(fechaf).val();
  valor1 = $(timef).val();
  var valorf = valor+' '+valor1;
  $(resultado).val(valorf);
}
// -- Edo Cuenta -- //
function selLocal(select,resultado) {
  valor = $(select).val();
  $(resultado).val(valor);
}
function selBolsa(select,resultado) {
  valor = $(select).val();
  $(resultado).val(valor);
}
function selCuenta(select,resultado) {
  valor = $(select).val();
  $(resultado).val(valor);
}

function recibir1_1(){
  valor = $("select#selectLocal").val();
  $("label#lbllocal").text(valor);
}

function recibir2_2(){
  valor = $("select#selectBolsa").val();
  $("label#lblBolsa").text(valor);
}

function recibir3_3(){
  valor = $("select#selectCuenta").val();
  $("label#lblCuenta").text(valor);
}

$(function() {
  ////
  $('#btnconsultar').click(function(){
  get_Recargas(this);
  });

  $('#btnfechainicial').click(function(){
  fechainicial("input#fechai","input#timei",'input#btnfechai');
  });

  $('#btnfechafinal').click(function(){
  fechafinal("input#fechaf","input#timef","input#btnfechaf");
  });

  $('#btnSelectLocal').click(function(){
  selLocal("select#selectLocal","input#btnLocal");
  });

  $('#btnSelectBolsa').click(function(){
  selBolsa("select#selectBolsa","input#btnBolsa");
  });

  $('#btnSelectCuenta').click(function(){
  selCuenta("select#selectCuenta","input#btnCuenta");
  });
});
$(document).ready(function(){
  $("#btnconsultar").click(function(){
      $("#tabla").toggle(1000);
  });
  fechaValInicio("#btnfechai");
  fechaValFin("#btnfechaf");
  fechaValInicio("#btnfechaiP");
  fechaValFin("#btnfechafP");
});
//***+
//View Consultas
$(function() {
$('#btnconsultar').click(function(){
get_Recargas(this);
});

//btn action modal´s date´s
$('#btnfechainicial').click(function(){
  fechainicial("input#fechai","input#timei","input#btnfechai");
});

$('#btnfechafinal').click(function(){
  fechafinal("input#fechaf","input#timef","input#btnfechaf");
});

$('#btnSelectStore').click(function(){
  selSucursal("select#selectStore","input#btnStore");
});

$('#btnSelectStatus').click(function(){
recibir4();
});


});

//******
//******
$("#btnLocal").click(function() {
get_store1("#selectLocal");
});

$("#btnBolsa").click(function() {
get_store2("#selectBolsa");
});

$("#btnCuenta").click(function() {
get_store3("#selectCuenta");
});

$("#btnconsultar").click(function() {
get_request('#btnfechai','#btnfechaf','#selectLocal','#selectBolsa','#selectCuenta');
});


function get_store1(Store1) {
var selStore1;
    selStore1 = Store1;
$('#indicator1').show();

$.post('controller/Ajax_Web_1.php',
  {
    P: 'ESTADOCTA_APP'
  },
  function(data, textStatus) {
    renderStoreList(data,selStore1);
    $('#indicator1').hide();
  },
  "json"
);
}

//bolsa
function get_store2(Store2) {
var selStore2;
    selStore2 = Store2;
$('#indicator2').show();

$.post('controller/Ajax_Web_2.php',
  {
    P: 'ESTADOCTA_APP'
  },
  function(data, textStatus) {
    renderStoreList2(data,selStore2);
    $('#indicator2').hide();
  },
  "json"
);
}
//cuenta
function get_store3(Store3) {
var selStore3;
    selStore3 = Store3;
$('#indicator3').show();

$.post('controller/Ajax_Web_3.php',
  {
    P: 'ESTADOCTA_APP'
  },
  function(data, textStatus) {
    renderStoreList3(data,selStore3);
    $('#indicator3').hide();
  },
  "json"
);
}

function get_request(element) {
var fechai = $('#btnfechai').val();
var fechaf = $('#btnfechaf').val();
var clave = $('#btnLocal').val();
var bolsa = $('#btnBolsa').val();
var tipo = $('#btnCuenta').val();

$('#indicator1').show();
$('#indicator2').show();
$('#indicator3').show();

$.post('controller/Ajax_Web_1.php',
  {
    P: 'ESTADOCTA_APP_New',
    cl: clave,
    bolsa: bolsa,
    tipo: tipo,
    f1: fechai,
    f2: fechaf
  },
  function(data, textStatus) {
    renderTableList(data);
    $('#indicator1').hide();
    $('#indicator2').hide();
    $('#indicator3').hide();
  },
  "json"
);
}

function renderStoreList(jsonData,selStore1) {
  var selectLocal;
      selectLocal=selStore1;
  var select1;

  console.log(jsonData);
    $.each(jsonData, function (i, member) {
    for (var i in member) {
      select1 += '<option value="'+member[i]+'">'+member[i]+'</option>';
     }
    });

  $(selectLocal).html(select1);
}

//Bolsa
function renderStoreList2(jsonData,selStore2) {
  var selectBolsa;
      selectBolsa=selStore2;
  var select2;

  console.log(jsonData);
    $.each(jsonData, function (i, member) {
    for (var i in member) {
      select2 += '<option value="'+member[i]+'">'+member[i]+'</option>';
     }
    });

  $(selectBolsa).html(select2);
}

//cuenta
function renderStoreList3(jsonData,selStore3) {
  var selectCuenta;
      selectCuenta=selStore3;
  var select3;

  console.log(jsonData);
    $.each(jsonData, function (i, member) {
    for (var i in member) {
      select3 += '<option value="'+member[i]+'">'+member[i]+'</option>';
     }
    });

  $(selectCuenta).html(select3);
}


///TABLA
function renderTableList(jsonData) {
  var table = '<table cellspacing="0" width="100%" class="table table-striped table-bordered" id="recent-purchases-listing"><thead><tr><th scope="col">Fecha</th><th scope="col">Referencia</th><th scope="col">Cargo</th><th scope="col">Folio</th><th scope="col">Abono</th><th scope="col">Saldo</th></tr></thead><tbody class="buscar">';

  $.each( jsonData, function( index,member){

        table += '<td COLSPAN="6">'+member[0]+'</td>';
    });

  table += '</tbody></table>';

  $('div#contenedorConsulta').html(table);
}
