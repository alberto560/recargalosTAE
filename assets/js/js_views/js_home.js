function fecha_saldo(){
  var formattedDate = new Date();
  var d = formattedDate.getDate();
  var m =  formattedDate.getMonth();
      m += 1;  // JavaScript months are 0-11
  var y = formattedDate.getFullYear();
  var h = formattedDate.getHours();
  var min = formattedDate.getMinutes();
  if (min<10) {
    min = "0" + min;
  }
  if (m<10) {
    m ="0"+m;
  }
  $("#fechaH").text(d + "/" + m + "/" + y + " " + h + ":" + min);
}
function fechaLabelInicio(lblInicio) {
  var formattedDate = new Date();
  var d = formattedDate.getDate();
  var m =  formattedDate.getMonth();
      m += 1;  // JavaScript months are 0-11
  var y = formattedDate.getFullYear();
  if (m<10) {
    m ="0"+m;
  }
  $(lblInicio).text(y + "-" + m +"-" + d +" 00:00")
}
function fechaValInicio(lblInicio) {
  var formattedDate = new Date();
  var d = formattedDate.getDate();
  var m =  formattedDate.getMonth();
      m += 1;  // JavaScript months are 0-11
  var y = formattedDate.getFullYear();
  if (m<10) {
    m ="0"+m;
  }
  $(lblInicio).val(y + "-" + m +"-" + d +" 00:00")
}
function fechaLabelFin(lblFin) {
  var formattedDate = new Date();
  var d = formattedDate.getDate();
  var m =  formattedDate.getMonth();
      m += 1;  // JavaScript months are 0-11
  var y = formattedDate.getFullYear();
  if (m<10) {
    m ="0"+m;
  }
  $(lblFin).text(y + "-" + m +"-" + d +" 23:59")
}
function fechaValFin(lblFin) {
  var formattedDate = new Date();
  var d = formattedDate.getDate();
  var m =  formattedDate.getMonth();
      m += 1;  // JavaScript months are 0-11
  var y = formattedDate.getFullYear();
  if (m<10) {
    m ="0"+m;
  }
  $(lblFin).val(y + "-" + m +"-" + d +" 23:59")
}

//redireccionamiento a home por post usando ajax
function ret_vistas(url,div){
  $.ajax({
      type: "POST",
      url: url,
      success: function(response) {
          $(div).html(response);
      }
  });
}
// FIN redireccionamiento a home por post usando ajax
$(function () {
  //Method from get to date
  $('#misaldo').click(function(){
    fecha_saldo();
    get_saldo();
  });
  //Method from return the views with Jquery
  $('#return_consultas').click(function(){
      ret_vistas("views/recargas/consultas.php",'#result');
  });

  $('#return_paquete').click(function(){
      ret_vistas("views/recargas/paquetes.php",'#result');
  });

  $('#return_recarga').click(function(){
      ret_vistas("views/recargas/recarga.php",'#result');
  });

  $('#return_micuenta').click(function(){
    ret_vistas("views/recargas/micuenta.php",'#result');
  });

  $('#return_mclientes').click(function(){
      ret_vistas("views/mclientes.php",'#result');
  });


  $('#return_ps_pagos').click(function(){
      ret_vistas("views/pago_servicios/pagos.php",'#result');
  });

  $('#return_reportes').click(function(){
      ret_vistas("views/pago_servicios/reportes.php",'#result');
  });

  $('#return_edocuenta').click(function(){
      ret_vistas("views/recargas/edocuenta.php",'#result');
  });

  $('#return_depositos').click(function(){
      ret_vistas("views/depositos.php",'#result');
  });

  $('#return_cli_us').click(function(){
      ret_vistas("views/mclientes.php",'#result');
  });

});
//
//Retornar vistas recargas principales y pagos principales
//y obtención de la fecha y hora actual
$(document).ready(function(){
  ret_vistas("views/inicio_recargas.php",'#rec');
  ret_vistas("views/inicio_pagos.php",'#payments');
  fechaLabelInicio("#today_start");
  fechaLabelFin("#today_end");
  //get_RecargasToday(this);
});

//
//Inicio de inser5tar lineas
$(document).ready(function(){
  var counter = 2;
  $("#addButton").click(function () {
  if(counter>10){
          alert("Solo 10 campos permitidos");
          return false;
  }
  var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);
  newTextBoxDiv.after().html('<br>'+'<input type="text" class="form-control" name="textbox' + counter + '" id="textbox' + counter + '" value="" >');
  newTextBoxDiv.appendTo("#TextBoxesGroup");
  counter++;
  });
  $("#removeButton").click(function () {
  if(counter==1){
          alert("No hay mas campos que eliminar");
          return false;
      }
  counter--;
      $("#TextBoxDiv" + counter).remove();
  });


});
//Fin de insertar lineas
//
//Metodo para el boton Mensajes en el home
$(function(btnEnable) {
  $(btnEnable).click(function() {
      var tit =[$("#titulo_mensaje").val()];
      $("#labelTXT").text(tit);
      var mess =[$("#textbox1").val()];
      $("#labelMSG").text(mess);
  });
});
//
//
//Metodo para identificar la opcion activa del menu
//
  $(function() {
    // elementos de la lista
    var menues = $(".nav li");
    var sm = $(".mc"); //elementos que usan un collapse
    // manejador de click sobre todos los elementos
    menues.click(function() {
       // eliminamos active de todos los elementos
       menues.removeClass("active");
       sm.removeClass("show"); // al dar clic en la lista de nav li se deshabilita el collapse de los dropdown desplegados
       // activamos el elemento clicado.
       $(this).addClass("active");
    });
  });
//Metodo para identificar la opcion activa en el submenu
  $(function() {
    var menues = $(".fl");
    menues.click(function() {
       menues.removeClass("text-body font-weight-bold animated shake ");
       $(this).addClass("text-body font-weight-bold animated shake ");
    });
  });

//Metodo para ocultar el navbar
$(function(){
  var menues = $(".ocultar");
  menues.click(function(){
    $("#sidebar").removeClass("active");
  });
});

// Metodo Para mostrar ejemplo Combio de Logo
function mostrar1(){
      var archivo = document.getElementById("file").files[0];
      var reader = new FileReader();
      if (file) {
        reader.readAsDataURL(archivo );
        reader.onloadend = function () {
          document.getElementById("img").src = reader.result;
        }
      }
    }
function mostrar(){
      var archivo = document.getElementById("perf").files[0];
      var reader = new FileReader();
      if (file) {
        reader.readAsDataURL(archivo );
        reader.onloadend = function () {
          document.getElementById("imgP").src = reader.result;
        }
      }
    }

    $(function() {
       validate_PWD("#pass","#btnPWD");
    });

    $(function () {
      // body...
      requestPermission();
    });



///////////////////////////////////////////////////
///////////////////////////////////////////////////
///////////////////////////////////////////////////



$(function() {
  $("#result").click(function() {
    $("#sidebar").removeClass("active");
  });
});

//******************
//******************
//******************
//******************
//Guardar imagenes en cache
//Imagen de perfil
function profileLogoAdd() {
  //You might want to do if check to see if localstorage set for theImage here
  var img = new Image();
  img.src = localStorage.theImage2;

  $('.imagearea2').html(img);

  $("body").on("change",".classhere2",function(){
    //Equivalent of getElementById
    var fileInput = $(this)[0];//returns a HTML DOM object by putting the [0] since it's really an associative array.
    var file = fileInput.files[0]; //there is only '1' file since they are not multiple type.

    var reader = new FileReader();
    reader.onload = function(e) {
         // Create a new image.
         var img = new Image();

         img.src = reader.result;
         localStorage.theImage2 = reader.result; //stores the image to localStorage
         $(".imagearea2").html(img);
     }
     reader.readAsDataURL(file);//attempts to read the file in question.
  });
}
  //Logo
function logoAdd() {
  //You might want to do if check to see if localstorage set for theImage here
    var img = new Image();
    img.src = localStorage.theImage;

    $('.imagearea').html(img);

    $("body").on("change",".classhere",function(){
      //Equivalent of getElementById
      var fileInput = $(this)[0];//returns a HTML DOM object by putting the [0] since it's really an associative array.
      var file = fileInput.files[0]; //there is only '1' file since they are not multiple type.

      var reader = new FileReader();
      reader.onload = function(e) {
           // Create a new image.
           var img = new Image();

           img.src = reader.result;
           localStorage.theImage = reader.result; //stores the image to localStorage
           $(".imagearea").html(img);
       }

       reader.readAsDataURL(file);//attempts to read the file in question.
    });
}
//**********
//**********
//**********
//**********

function count_settings(){
      // Si NO existe contador se inicializa
      if ((localStorage.logo == null)) {
       localStorage.logo = 1;
      }

      if ((localStorage.profileLogo == null)) {
        localStorage.profileLogo = 1;
      }
  }

$(function() {
  $("#logo").click(function() {
    $("#logoAdd").addClass("imagearea");
    $("#logoAdd_resp").addClass("imagearea");
    localStorage.setItem('logo', '2');
    logoAdd();
  });

  $("#logo2").click(function() {
    $("#profileDropdown").addClass("imagearea2");
    localStorage.setItem('profileLogo', '2');
    profileLogoAdd();
  });
});

$(function() {
  $("#btnPWD").click(function() {
    //localStorage.setItem('logo', '2');
    //localStorage.setItem('profileLogo', '2');
  });
});

$(document).ready(function() {
  count_settings();
    //funcion para iniciar la aplicacion con un logo por default
  if ((localStorage.logo == 1)) {
    //$("#img").removeClass("imagearea");
    $("#logoAdd").removeClass("imagearea");
    $("#logoAdd_resp").removeClass("imagearea");
    $('#logoHome').replaceWith('<img id="img" src="assets/images/recargalos.png" alt="logo">');
    $('#logoHome_resp').replaceWith('<img id="img" src="assets/images/recargalos.png" alt="logo">');
  }else{
    if ((localStorage.logo == 2)) {
      logoAdd();
    }
  }

  //funcion para iniciar la aplicacion con una imagen de perfil por default
  if ((localStorage.profileLogo == 1)) {
    //$("#img").removeClass("imagearea");
    $("#profileDropdown").removeClass("imagearea2");
    $('#profile_logo').replaceWith('<img id="profile_logo" src="assets/images/perfil_logo.png" alt="logo">');
  }else{
    if ((localStorage.profileLogo == 2)) {
      profileLogoAdd();
    }
  }
});
//***
//***
//***
//***
//******


function get_saldo() {  

  $('#indicator').show();
  
  $.post('controller/Ajax_Web.php',
    {
      P: 'SALDO_APP'       
    },
    function(data, textStatus) {
      //renderSaldoModal(data);
      $('#indicator').hide();
    }, 
    "json"    
  );
}