<?php
	class home {
			function get_saldo()
			{
				//$sentencia = array('user' => array( array('firstName' => 'Vignesh'), array('firstName' => 'Vaibhav') ));		
				$sentencia = array('Mensaje' => array('2019-10-15 22:34:03<br/>$ 157.50','Saldo Tiempo Aire'));
				//$sentencia2 =array('Msportada'=> array('MsSistema' => array('T'=> 'INSTALA/ACTUALIZA TU DESKTOP APP' ) ));
				return json_encode($sentencia);
			/*	{"Operadores":[["TMAC PV"],["CARLOS"]],"Msportada":{"MsSistema":{"T":"INSTALA\/ACTUALIZA TU DESKTOP APP","L":["Actualiza Vigencias de Paquetes SinLimite","Y Vigencias Paquetes de Internet","Nueva Recarga Entretenimiento","Descarga la version 4.9<\/a>"]},"VCTtmac":"1"}}*/
			}			
	}
?>