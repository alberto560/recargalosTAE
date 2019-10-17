<?php
	class home {
			function get_saldo()
			{
				$sentencia = array('Mensaje' => array('2019-10-16 23:12:01<br/>$ 157.50','Saldo Tiempo Aire'));			
				return json_encode($sentencia);	
			}			
	}
?>