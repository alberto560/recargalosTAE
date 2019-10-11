function validate_PWD(form,btnEnable){
  $(form).validate({
       rules:
         {
             newpsw:
             {
                  required: true,
                  minlength: 6,
                  maxlength: 10,
             },
             confnewpwd:
             {
                   equalTo: "#newpsw",
                   minlength: 6,
                   maxlength: 10
             }
          },
          messages:
          {
              newpsw:
              {
                    required:"Password Requerido",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
              },
              confnewpwd:
              {
                    equalTo: "La contraseña debe ser igual a la anterior",
                    minlength: "Minimo 6 caracteres",
                    maxlength: "Maximo 10 caracteres"
              }
          },
          // Called when the element is invalid:
          highlight: function(element) {
              $(confnewpwd).css('background', '#ffdddd');
              $(newpsw).css('background', '#ffdddd');
          },
          // Called when the element is valid:
          unhighlight: function(element) {
              $(newpsw).css('background', '#ffffff');
              $(confnewpwd).css('background', '#ffffff');
          }
     }
  );
  endisBtn(form,btnEnable);
}
/*function validate_modal(form,btnEnable){
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
}*/
function validar_formulario(form,btnEnable) {
   jQuery.validator.messages.required = 'Este campo es obligatorio.';
   jQuery.validator.messages.number = 'Este campo debe ser num&eacute;rico.';
   jQuery.validator.messages.email = 'La direcci&oacute;n de correo es incorrecta.';
   jQuery.validator.addMethod("lettersonly", function(value, element) {
     return this.optional(element) || /^[a-z\s]+$/i.test(value);
   }, "Escriba un nombre valido");
   jQuery.validator.addMethod("phones", function(value, element) {
     return this.optional(element) || /^([0-9]{10})+$/i.test(value);
   }, "Escriba un número de telefono valido");
   $(form).validate();
   endisBtn(form,btnEnable);
}


function endisBtn(form,btnEnable){
  $(form).bind('change keyup', function() {
     if($(this).validate().checkForm()) {
         $(btnEnable).attr('disabled', false);
     } else {
         $(btnEnable).attr('disabled', true);
   } });
}
