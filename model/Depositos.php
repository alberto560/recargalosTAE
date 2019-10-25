<?php
	class Depositos{

		function get_CompraTarjeta()
		{
			$sentenci = array('Mensaje' => array('Santander Tiene problema para abonarnos las compras con tarjeta, de momento cerraremos este medio de compra'));			
			return json_encode($sentenci);
		}

		function get_factura()
		{
			$sentencia = array('Rfcs' => '0');			
			return json_encode($sentencia);
		}

		function get_CuentasFiscal()
		{
			$sentencia = array('C_rfcs' => '0');			
			return json_encode($sentencia);
		}
		function AddCF()
		{
			$sentenci = array('Mensaje' => array('Guardado Con Exito','La cuenta fiscal se ha','close'));		
			return json_encode($sentenci);
		}
		
	}
?>