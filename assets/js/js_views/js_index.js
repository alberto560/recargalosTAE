$("#btnLogin").click(function() {
	loguear('#inputUser','#inputPwd');
	redirect();
})



function redirect(){
  $.ajax({
      type: "POST",
      url: "home.php",
      success: function(response) {
          $('#toHome').html(response);
      }
  });
}

function loguear(element) {
	var user = $('#inputUser').val();
  	var pass = $('#inputPwd').val();
	$('#indicator').show();
  
  $.post('controller/Ajax_Web.php',
    {
      P: 'LOGIN_APP',
      usser:user,
      paswd:pass
    },
    function(data) {
     // renderInicioView(data);
      $('#indicator').hide();
    }, 
    "json"    
  );
}