<?php
	class MiCuenta {
			function get_datos()
			{
				$sentencia = array('datos' => array('Carlos','Bolaños','Montes','Manantiales de Tehuacán','704','El riego','75763','2383824706','2383824706','clientes@recargalos.com.mx'));
				return json_encode($sentencia);
			}
	}
?>
