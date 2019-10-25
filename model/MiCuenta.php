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
	}
?>
