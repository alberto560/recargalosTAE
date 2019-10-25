<?php
	class Depositos{
		function get_factura()
		{
			$sentencia = array('Rfcs' => '0');			
			return json_encode($sentencia);
		}
	}
?>