$(document).ready(function() {
  validar_formulario("#form_Add_CuentaF","#btnAddCuentaFiscal");
  $("#codigo_postal").keyup(function() {
    var cp0 = $("#codigo_postal").val();
    getData(cp0,"#SelEstados","#SelMunicipios","#colonia");
  });
  //call to method validar_formulario of validate_rules script
  validar_formulario("#form_rep_depositos","#btnReportar");

  fechaValInicio("#btnfechai");
  fechaValFin("#btnfechaf");
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

  function dontFact() {
  Swal.fire({
    type: 'error',
    title: 'No Tiene RFCs Disponibles <br> Puede darlos de alta en la opcion Compras -> Cuentas Fiscales',
    width: 610,
    padding: '1em',
    background: '#fff',
    backdrop: `
      rgba(0, 136, 255, 0.58)
      center left
      no-repeat
    `,
    showConfirmButton: true,
    //timer: 1500

    })
  }

  $("#btnPayNow").click(function() {
    // body...
    var topay = $("#topay").val();
                $("#getTopay").text("$ "+topay);
  })


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

    //*****
    //*****
    $("#solicitar_factura").click(function() {
      get_fact();
    });

    $("#solicitar_facturaCT").click(function() {
      get_fact();
    });

    function get_fact() {
      $('#indicator').show();

      $.post('controller/Ajax_Web.php',
        {
          P: 'REPORTES',
          F: 'Rfcs'
        },
        function(data, textStatus) {          
          dontChecked(data);
          $('#indicator').hide();
        },
        "json"
      );
    }

    function dontChecked(jsonData) {    
      var test = jsonData.Rfcs[0];
      if (test == 0) {
       $("#solicitar_factura").prop('checked', false); 
       $("#solicitar_facturaCT").prop('checked', false); 
      }
      dontFact()
    } 
    //****
    //****
    //****
    //****
    $("#confirmarPagarAhora").click(function() {
      get_confPCT("#producto","#topay");
    });

    function get_confPCT(element) {
      var producto = $('#producto').val();
      var topayAW = $('#topay').val();

      $('#indicator').show();

      $.post('controller/Ajax_Web.php',
        {
          P: 'REPORTES',
          F: 'P_ecomm',
          PTAE: producto,
          emonto: topayAW
        },
        function(data, textStatus) {
          renderModalLst(data);
          $('#indicator').hide();
        },
        "json"
      );
    }

    function dontServicePayWhitCard(message) {
    Swal.fire({
      type: 'error',
      title: message,
      width: 610,
      padding: '1em',
      background: '#fff',
      backdrop: `
        rgba(0, 136, 255, 0.58)
        center left
        no-repeat
      `,
      showConfirmButton: true,
      //timer: 1500

      })
    }

    function renderModalLst(jsonData) {
      var message;     
            $.each(jsonData, function (i, member) {
              message = member[0];
            });            
          dontServicePayWhitCard(message)

          $('#topay').val("");
    }
    //****
    //****
    //****
    //****
    $("#list-CFiscales-list").click(function() {
      getCuentasFiscales();
    });

    function getCuentasFiscales() {
      $('#indicator').show();

      $.post('controller/Ajax_Web.php',
        {
          P: 'REPORTES',
          F: 'C_rfcs'          
        },
        function(data, textStatus) {
         // renderModalLst(data);
          $('#indicator').hide();
        },
        "json"
      );
    }
    //****
    //****
    //****
    //****
    function successAddCF(message) {
    Swal.fire({
      type: 'success',
      title: message,
      width: 610,
      padding: '1em',
      background: '#fff',
      backdrop: `
        rgba(0, 136, 255, 0.58)
        center left
        no-repeat
      `,
      showConfirmButton: true,
      //timer: 1500
      })
    }
    $("#btnAddCuentaFiscal").click(function() {
      AddCuentaFiscal(this);
    });

    function AddCuentaFiscal(element) {
      var rfc = $('#rfc').val();
      var razon_social = $('#razon_social').val();
      var calle = $('#calle').val();
      var num_exterior = $('#num_exterior').val();
      var num_interior = $('#num_interior').val();
      var colonia = $('#colonia').val();
      var codigo_postal = $('#codigo_postal').val();
      var SelMunicipios = $('#SelMunicipios').val();
      var SelEstados = $('#SelEstados').val();
      var email = $('#email').val();

      $('#indicator').show();

      $.post('controller/Ajax_Web.php',
        {
          P: 'REPORTES',
          F: 'GD_rfc',
          rfc: rfc,
          nombre_fi: razon_social,
          calle: calle,
          noExterior: num_exterior,
          noInterior: num_interior,
          colonia: colonia,
          codigoPostal: codigo_postal,
          municipio: SelMunicipios,
          estado: SelEstados,
          mail: email
         
        },
        function(data, textStatus) {
          renderModalSucces(data);
          $('#indicator').hide();
        },
        "json"
      );
    }
      function renderModalSucces(jsonData) {
        var first;     
        var second;     
            $.each(jsonData, function (i, member) {
              first = member[0];
            });   

            $.each(jsonData, function (i, member) {
              second = member[1];
            });            

            var message = "";
                message = second+" " + first
          successAddCF(message);          
      }
