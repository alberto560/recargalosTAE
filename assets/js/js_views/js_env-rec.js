function agregardatos(numero,monto,conf_monto,compania){

	cadena = "numero="+numero + "&monto="+monto + "&conf_monto="+conf_monto + "&compania="+compania;
	cadena2 = "numero_movistar="+numero + "&monto_movistar="+monto + "&conf_monto_movistar="+conf_monto + "&compania_movistar="+compania;
	cadena3 = "numero_atnt="+numero + "&monto_atnt="+monto + "&conf_monto_atnt="+conf_monto + "&compania_atnt="+compania;
	cadena4 = "numero_unefon="+numero + "&monto_unefon="+monto + "&conf_monto_unefon="+conf_monto + "&compania_unefon="+compania;
	cadena5 = "numero_alo="+numero + "&monto_alo="+monto + "&conf_monto_alo="+conf_monto + "&compania_alo="+compania;
	cadena6 = "numero_cierto="+numero + "&monto_cierto="+monto + "&conf_monto_cierto="+conf_monto + "&compania_cierto="+compania;
	cadena7 = "numero_flashmobile="+numero + "&monto_flashmobile="+monto + "&conf_monto_flashmobile="+conf_monto + "&compania_flashmobile="+compania;
	cadena8 = "numero_maztiempo="+numero + "&monto_maztiempo="+monto + "&conf_monto_maztiempo="+conf_monto + "&compania_maztiempo="+compania;
	cadena9 = "numero_nextel="+numero + "&monto_nextel="+monto + "&conf_monto_nextel="+conf_monto + "&compania_nextel="+compania;
	cadena10 = "numero_tuenti="+numero + "&monto_tuenti="+monto + "&conf_monto_tuenti="+conf_monto + "&compania_tuenti="+compania;
	cadena11 = "numero_virgin="+numero + "&monto_virgin="+monto + "&conf_monto_tuenti="+conf_monto + "&compania_tuenti="+compania;

	$.ajax({
				type:"POST",
				url:"enviar.php",
				data:cadena,cadena2,cadena3,cadena4,cadena5,cadena6,cadena7,cadena8,cadena9,cadena10,cadena11,
				success:function(resp){
					if (resp==1){
						//alertify.success("agregado" + numero);
						 alertify.confirm('Recarga exitosa '+'<br>Numero: '+numero+ '<br>Monto: '+monto+ '<br>Compañia: '+compania).set('frameless', true);

 						$('#numero').val('');
 						$('#monto').val('');
 						$('#conf_monto').val('');

						$('#numero_movistar').val('');
 						$('#monto_movistar').val('');
 						$('#conf_monto_movistar').val('');

						$('#numero_atnt').val('');
						$('#monto_atnt').val('');
						$('#conf_monto_atnt').val('');
					}else{
						alertify.error("error");
					}

				}
					//$('#main-contact-form').trigger("reset");
			});
}
