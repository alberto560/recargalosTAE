$(function() {
   validate_PWD("#form_pwd","#btnPWD");

   CleanModal("#CancelAddClient","#form_add_client");
   CleanModal2("#modalAddClient","#form_add_client");
});
$(document).ready(function() {
  validar_formulario("#form_add_client","#btnAdd_client");
  validar_formulario("#form_data_client","#btnSaveChanges");

  //metodos para mostrar estados, municipios, y colonias a a partir del Codigo postal
    $("#AddCodigo_postal").keyup(function(){
      var cp0 = $("#AddCodigo_postal").val();
      getData(cp0,"#AddEstado","#AddMunicipio","#AddColonia");
    });

    $("#codigo_postal").keyup(function() {
      var cp1 = $("#codigo_postal").val();
      getData(cp1,"#estado","#municipio","#colonia");
      //
    });

});
