$(document).ready(function() {
  validar_formulario("#form_Add_CuentaF","#btnAddCuentaFiscal");
  $("#codigo_postal").keyup(function() {
    var cp0 = $("#codigo_postal").val();
    getData(cp0,"#SelEstados","#SelMunicipios","#colonia");
  });
  //call to method validar_formulario of validate_rules script
  validar_formulario("#form_rep_depositos","#btnReportar");
});

//Methos from hide o show elements of DOM
$(function() {
  $('#adjuntar_imagen').change(function(){
    if(!$(this).prop('checked')){
      $('#div_browse').hide(300);
    }else{
      $('#div_browse').show(300);
    }
  });

  CleanModal("#CancelAddCuentaFiscal","#form_Add_CuentaF");
  CleanModal2("#modalCF","#form_Add_CuentaF");

  $('#btnfechainicial').click(function(){
  fechainicial("#fechai","#timei",'#btnfechai');
  });

  $('#btnfechafinal').click(function(){
  fechafinal("#fechaf","#timef","#btnfechaf");
  });

  //Method from clen this from
  CleanModal("#CancelReportar","#form_rep_depositos");

  $("#list-CBancarias-list").click(function(){
        //$('#info').hide(300);
        evaluar();
  });
  $("#list-CTarjeta-list").click(function(){
    $('#info').hide(300);
  });
  $("#list-CFiscales-list").click(function(){
    $('#info').hide(300);
  });
  $("#list-CRealizadas-list").click(function(){
    $('#info').hide(300);
  });

  //Method from modal date and clock
  $('#btnfechainicial').click(function(){
  fechainicial("#fechai","#timei",'#btnfechai');
  });

  $('#btnfechafinal').click(function(){
  fechafinal("#fechaf","#timef","#btnfechaf");
  });
  //End Method
  //Method from replace a image in only one modal
  $('#btnbancomer').click(function(){
    $('#imgBanco').replaceWith('<img id="imgBanco" src="ayuda/sites/statics/css/images/Hbancomer2.png" width="150" class="img-fluid" alt="Responsive image"">');
  });

  $('#btnsantander').click(function(){
    $('#imgBanco').replaceWith('<img id="imgBanco" src="ayuda/sites/statics/css/images/Hsantander2.png" width="300"class="img-fluid" alt="Responsive image"">');
  });

  $('#btnoxxo').click(function(){
    $('#imgBanco').replaceWith('<img id="imgBanco" src="ayuda/sites/statics/css/images/oxxo2.png"  width="125" class="img-fluid" alt="Responsive image"">');
  });

  $('#btnhsbc').click(function(){
    $('#imgBanco').replaceWith('<img id="imgBanco" src="ayuda/sites/statics/css/images/Hhsbc2.png"  width="250" class="img-fluid" alt="Responsive image"">');
  });

  $('#btnbanorte').click(function(){
    $('#imgBanco').replaceWith('<img id="imgBanco" src="ayuda/sites/statics/css/images/Hbanorte2.png" width="300" class="img-fluid" alt="Responsive image"">');
  });

  $('#btnazteca').click(function(){
    $('#imgBanco').replaceWith('<img id="imgBanco" src="ayuda/sites/statics/css/images/Hazteca2.png" class="img-fluid" alt="Responsive image"">');
  });
  //End Method

  //Method from clena modal
  CleanModal("#CancelDepositar","#form_Depositar");
  //
  //call to method validar_formulario of validate_rules script
     validar_formulario("#form_Depositar","#btnDepositar");
  //End Method
  //Method from replace a image in only one modal
  $('#btnDespositoBancomer').click(function(){
    $('#imgBancoDepositosPS').replaceWith('<img id="imgBancoDepositosPS" src="ayuda/sites/statics/css/images/hbancomer2.png" width="150" class="img-fluid" alt="Responsive image"">');
  });

  $('#btnDespositoAzteca').click(function(){
    $('#imgBancoDepositosPS').replaceWith('<img id="imgBancoDepositosPS" src="ayuda/sites/statics/css/images/hazteca2.png" class="img-fluid" alt="Responsive image"">');
  });
  //clockpicker and datetimepicker
  $('.timed').clockpicker();
  $('.fechas').datetimepicker({
      todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
  });
  $('.timei').clockpicker();
  $('.timef').clockpicker();
  //--
  $('#input02').filestyle({
     'placeholder' : 'Seleccione una imagen',
     buttonText : '',
     iconName : 'mdi mdi-folder fa-lg',
     buttonName : 'btn-primary btn-sm',
     buttonBefore : true
  });
  //
  $('#input03').filestyle({
     'placeholder' : 'Seleccione una imagen',
     buttonText : '',
     iconName : 'mdi mdi-folder fa-lg',
     buttonName : 'btn-primary btn-sm',
     buttonBefore : true
  });
});

    function updateStatus() {
      if ($("#rbtnTAE").is(':checked')) {
          $('#div_DepositosTAE').show(300);
          $('#info').show(300);
          $('#div_DepositosPS').hide(300);
      } else {
        if ($("#rbtnPS").is(':checked')) {
          $('#div_DepositosTAE').hide(300);
          $('#info').hide(300);
          $('#div_DepositosPS').show(300);          
        }        
      }
    }

    $('#radioGroup').change(function(){
      updateStatus();
    });

    function evaluar() {
      // body...
      if ($("#rbtnTAE").is(':checked')) {
        $('#info').show(300);
      }
    }