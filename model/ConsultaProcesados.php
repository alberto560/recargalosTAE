
<?php

	class ConsultaProcesados {
			function get_Recargas()
			{
				//$sentencia = array('user' => array( array('firstName' => 'Vignesh'), array('firstName' => 'Vaibhav') ));
				$sentencia = array('Operadores' => array( array('TMAC PV'), array('CARLOS' )));
				//$sentencia2 =array('Msportada'=> array('MsSistema' => array('T'=> 'INSTALA/ACTUALIZA TU DESKTOP APP' ) ));
				return json_encode($sentencia);
			/*	{"Operadores":[["TMAC PV"],["CARLOS"]],"Msportada":{"MsSistema":{"T":"INSTALA\/ACTUALIZA TU DESKTOP APP","L":["Actualiza Vigencias de Paquetes SinLimite","Y Vigencias Paquetes de Internet","Nueva Recarga Entretenimiento","Descarga la version 4.9<\/a>"]},"VCTtmac":"1"}}*/
			}
			function get_All(){
				$sentencia = array('TB_Recargas' => array( array('0','NO SE ENCONTRARON REGISTROS EN ESTA FECHA' ),array('T','0')));
				return json_encode($sentencia);
			}
	}
?>
