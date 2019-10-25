<?php
	class MiCuenta {
			function get_datos()
			{
				$sentencia = array('datos' => array('Carlos','Bolaños','Montes','Manantiales de Tehuacán','704','El riego','75763','2383824706','2383824706','clientes@recargalos.com.mx'));
				return json_encode($sentencia);
			}

			function get_operador()
			{
				$sentencia2 = array( 'Opers_tbl' =>array(array('2208921','CARLOS','0')), 'Msportada' => array('MsSistema' => array('T'=>'INSTALA/ACTUALIZA TU DESKTOP APP','L' => array('Actualiza Vigencias de Paquetes SinLimite','Y Vigencias Paquetes de Internet','Nueva Recarga Entretenimiento','<a href="http://www.recargalos.com.mx/install/WindowsApp_v4.9.exe">Descarga la version 4.9</a>')),'VCTtmac' => '1'));
				return json_encode($sentencia2);
			}
			function get_passwd()
			{
				$sentencia1 = array('Mensaje' => array('La Contraseña Nueva NO puede ser igual a la Actual'),'TB_Ultimas' => array( array('0','NO TIENE RECARGAS PROCESADAS EN ESTE DIA' )),'Region' => '7','Canal' => '1','Sha' => '3a417590bf3f0bd360c875008d6d2e28','Msportada' => array('MsSistema' => array('T'=>'INSTALA/ACTUALIZA TU DESKTOP APP','L' => array('Actualiza Vigencias de Paquetes SinLimite','Y Vigencias Paquetes de Internet','Nueva Recarga Entretenimiento','<a href="http://www.recargalos.com.mx/install/WindowsApp_v4.9.exe">Descarga la version 4.9</a>')),'VCTtmac' => '1'));
				return json_encode($sentencia1);
			}
			function get_wml()
			{
				$sentencia3 = array( 'AcWml' =>array('0','wap.recargalos.mx'), 'Msportada' => array('MsSistema' => array('T'=>'INSTALA/ACTUALIZA TU DESKTOP APP','L' => array('Actualiza Vigencias de Paquetes SinLimite','Y Vigencias Paquetes de Internet','Nueva Recarga Entretenimiento','<a href="http://www.recargalos.com.mx/install/WindowsApp_v4.9.exe">Descarga la version 4.9</a>')),'VCTtmac' => '1'));
				return json_encode($sentencia3);
			}
	}
?>
