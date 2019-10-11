/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function CleanModal(btnClose,formClean) {
  $(btnClose).click(function(event) {
      //alert("todo esto se ejecuta antes de borrar el form");
     $(formClean)[0].reset();
  });
  /*$(formClean).on('hidden.bs.modal', function(){
    $(':input', this).val('');
    alert("Hello World!");
  });*/
}
function CleanModal2(modalClean,formClean) {
  $(modalClean).on('hidden.bs.modal', function(){
  //  $(':input', this).val('');
    $(formClean)[0].reset();
  });
}
