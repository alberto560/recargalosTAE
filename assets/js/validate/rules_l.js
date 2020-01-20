function validate_CTA(form,btnEnable){
  $(form).validate({
       rules:
         {
             contraseñaOp:
             {
                  required: true,
                  minlength: 6,
                  maxlength: 10,
             },
             contraseñaCfm:
             {
                   equalTo: "#contraseñaOp",
                   minlength: 6,
                   maxlength: 10
             }
          },
          messages:
          {
              contraseñaOp:
              {
                    required:"Password Requerido",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
              },
              contraseñaCfm:
              {
                    equalTo: "La contraseña debe ser igual a la anterior",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
              }
          },
          // Called when the element is invalid:
          highlight: function(element) {
              $(contraseñaCfm).css('background', '#ffdddd');
              $(contraseñaOp).css('background', '#ffdddd');
          },
          // Called when the element is valid:
          unhighlight: function(element) {
              $(contraseñaOp).css('background', '#ffffff');
              $(contraseñaCfm).css('background', '#ffffff');
          }
     }
  );
  endisBtn(form,btnEnable);
}
/*function validapwd(form){
  $(form).validate({
       rules:
         {
             pwdN:
             {
               required: true,
                  minlength: 6,
                  maxlength: 10,
             } ,
             pwdC:
             {
                  equalTo: "#pwdN",
                   minlength: 6,
                   maxlength: 10
             }
          },
          messages:
          {
              pwdN:
              {
                    required:"Ingrese Contraseña",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
              },
              pwdC:
              {
                    equalTo: "La contraseña debe ser igual al anterior",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
               }
          },
          // Called when the element is invalid:
          highlight: function(element) {
              $(pwdC).css('background', '#ffdddd');
              $(pwdN).css('background', '#ffdddd');
          },
          // Called when the element is valid:
          unhighlight: function(element) {
              $(pwdN).css('background', '#ffffff');
              $(pwdC).css('background', '#ffffff');
          }
     }//
  );

  $(form).bind('change keyup', function() {
     if($(this).validate().checkForm()) {
         $('#guardar').attr('disabled', false);
     } else {
         $('#guardar').attr('disabled', true);
   } });

}*/
/*function validate_tel(form,btnEnable){
  $(form).validate({
       rules:
         {
             inpPaq:
             {
               required: true,
                minlength: 10,
                maxlength: 10,
             }
          },
          messages:
          {
              inpPaq:
              {
                    required:"Ingrese su No. de Teléfono",
                    maxlength: "Maximo 10 caracteres"
              }
          },
          // Called when the element is invalid:
          highlight: function(element) {
              $(inpPaq).css('background', '#ffdddd');
          },
          // Called when the element is valid:
          unhighlight: function(element) {
              $(inpPaq).css('background', '#ffffff');
          }
     }//
  );
  $(form).bind('change keyup', function() {
     if($(this).validate().checkForm()) {
         $(btnEnable).attr('disabled', false);
     } else {
         $(btnEnable).attr('disabled', true);
   } });

}*/
/*function validamodal(form){
  $(form).validate({
       rules:
         {
             contraseñaOp:
             {
               required: true,
                  minlength: 6,
                  maxlength: 10,
             } ,
             pwdC:
             {
                  equalTo: "#contraseñaOp",
                   minlength: 6,
                   maxlength: 10
             }
          },
          messages:
          {
              contraseñaOp:
              {
                    required:"Ingrese Contraseña",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
              },
              contraseñaCfm:
              {
                    equalTo: "La contraseña debe ser igual al anterior",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
               }
          },
          // Called when the element is invalid:
          highlight: function(element) {
              $(contraseñaCfm).css('background', '#ffdddd');
              $(contraseñaOp).css('background', '#ffdddd');
          },
          // Called when the element is valid:
          unhighlight: function(element) {
              $(contraseñaOp).css('background', '#ffffff');
              $(contraseñaCfm).css('background', '#ffffff');
          }
     }//
  );

  $(form).bind('change keyup', function() {
     if($(this).validate().checkForm()) {
         $('#save').attr('disabled', false);
     } else {
         $('#save').attr('disabled', true);
   } });

}*/
function validate_tel(form,btnEnable){
  $(form).validate({
       rules:
         {
             inpPaq:
             {
                  required: true,
                  minlength: 10,
                  maxlength: 10,
             },
             inpPaqCmx:
             {
                   equalTo: "#inpPaq",
                   minlength: 6,
                   maxlength: 10
             }
          },
          messages:
          {
              inpPaq:
              {
                    required:"Ingrese su No. de Teléfono",
                    maxlength: "Maximo 10 caracteres"
              },
              inpPaqCmx:
              {
                    equalTo: "Este número no coincide con el anterior",
                    maxlength: "Maximo 10 caracteres"
              }
          },
          // Called when the element is invalid:
          highlight: function(element) {
              $(inpPaqCmx).css('background', '#ffdddd');
              $(inpPaq).css('background', '#ffdddd');
          },
          // Called when the element is valid:
          unhighlight: function(element) {
              $(inpPaq).css('background', '#ffffff');
              $(inpPaqCmx).css('background', '#ffffff');
          }
     });

     /*Funcion activar o deshabilitar boton confirmar*/
     $(form).bind('change keyup', function() {
        if($(this).validate().checkForm()) {
            $(btnEnable).attr('disabled', false);
        } else {
            $(btnEnable).attr('disabled', true);
      } });
}
