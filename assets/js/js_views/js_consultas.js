  function get_Recargas(element){
      //$('#contenedorConsulta').show();
      var Recarga = new Object();
      Recarga.fechai = $('input#btnfechai').val();
      Recarga.fechaf = $('input#btnfechaf').val();
      Recarga.sucursal = $('input#btnStore').val();

      var recargaJson = JSON.stringify(Recarga);

      $.post('controller/recarga_controller.php',
          {
            action: 'get_recarga',
            parametros: recargaJson
          },
          function(data, textStatus) {
            renderUserList(data);
        //    $('#contenedorConsulta').hide();
          },
          "json"
      );
    }

    function get_RecargasToday(element){
        //$('#contenedorConsulta').show();
        var Dates = new Object();
        Dates.today_start = $('label#today_start').text();
        Dates.today_end = $('label#today_end').text();

        var DatesJson = JSON.stringify(Dates);

        $.post('controller/recarga_controller.php',
            {
              action: 'get_recarga_today',
              parametros: DatesJson
            },
            function(data, textStatus) {
              renderUserList(data);
          //    $('#contenedorConsulta').hide();
            },
            "json"
        );
      }


    function buscar_datos(element){
      $('#filtrar').keyup(function () {
          var rex = new RegExp($(this).val(), 'i');
          $('.buscar tr').hide();
          $('.buscar tr').filter(function () {
              return rex.test($(this).text());
          }).show();
      })
    }

  function renderUserList(jsonData) {
    var buttons = '<div class="row justify-content-md-center">        <div class="col-12 col-md-2 ">          <p />          <input id="filtrar" name="filtrar" class="form-control" type="text" placeholder="Filtrar por">        </div>        <div class="col-12 col-md-2 ">          <button  id="btnExport" name="btnExport" class="btn btn-outline-warning  btn-md">                Exportar <i class="mdi mdi-file-export"></i> </button>        </div></div>';
    var table = '<table cellspacing="0" width="100%" class="table table-striped table-bordered" id="recent-purchases-listing"><thead><tr><th scope="col">Fecha</th><th scope="col">Número</th><th scope="col">Monto</th><th scope="col">Folio</th><th scope="col">Compañia</th></tr></thead><tbody class="buscar">';

    $.each( jsonData, function( index,recarga){
      table += '<tr>';
      table += '<td>'+recarga.created_at+'</td>';
      table += '<td>'+recarga.numero+'</td>';
      table += '<td>'+'$'+recarga.monto+'.00'+'</td>';
      table += '<td>'+recarga.id+'</td>';
      table += '<td>'+recarga.compania+'</td>';

      table += '</tr>';
      });

    table += '</tbody></table>';

    $('div#prueba').html(buttons);
    $('div#contenedorConsulta').html(table);

    buscar_datos();
  }

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

  function selSucursal(select,resultado) {
    valor = $(select).val();
    $(resultado).val(valor);
  }


  function recibir4(){
    valor = $("select#selectStatus").val();
    $("input#btnStatus").val(valor);

    var opcion = $("input#btnStatus").val();
    switch (opcion) {
      case 'Fallidas':
          $("#btnStatus").css("background-color", "#ff4444");
      break;
      case 'Exitosas':
          $("#btnStatus").css("background-color", "#66bb6a");
      break;
      case 'Todas':
          $("#btnStatus").css("background-color", "#ffa040");
      break;
      default:

    }
  }

  //---Fin Funciones--//

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
