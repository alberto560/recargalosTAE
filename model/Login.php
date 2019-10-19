<?php
	/**
	 * 
	 */
	class Login
	{
		
		function get_login()
		{
			$sentencia = array('login' => array('TMAC PV','1','5'),'TB_Ultimas' => array( array('0','NO TIENE RECARGAS PROCESADAS EN ESTE DIA' )),'Region' => '7','Canal' => '1','Sha' => '3a417590bf3f0bd360c875008d6d2e28','Msportada' => array('MsSistema' => array('T'=>'INSTALA/ACTUALIZA TU DESKTOP APP','L' => array('Actualiza Vigencias de Paquetes SinLimite','Y Vigencias Paquetes de Internet','Nueva Recarga Entretenimiento','<a href="http://www.recargalos.com.mx/install/WindowsApp_v4.9.exe">Descarga la version 4.9</a>')),'VCTtmac' => '1'));	
			return json_encode($sentencia);
		}

		//"TB_Ultimas":[["0","NO TIENE RECARGAS PROCESADAS EN ESTE DIA"]],"Region":7,"Canal":1,"Sha":"3a417590bf3f0bd360c875008d6d2e28",
	}
?>