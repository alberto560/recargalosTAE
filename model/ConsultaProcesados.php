
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


	//PARTE DE LA VISTA DE ESTADO DE CUENTA
	class EstadoCuenta {
		//LOCAL
		function get_Locales()
		{
			$sentencia1 = array('Locales' => array( array('Mi Estado De Cuenta'), array('GABRIELA FRANCO'), array('NBLANXA'), array('OPERADOR'), array('recargalos')) );
			return json_encode($sentencia1);
		}
		function get_All1(){
			$sentencia1 = array('TB_Estado' => array( array('0','NO SE ENCONTRARON REGISTROS EN ESTA FECHA edocue'), array('T','0') ));
			return json_encode($sentencia1);
		}
		//Bolsas
		function get_Bolsas()
		{
			$sentencia2 = array( 'Bolsas' => array( array('Bolsa TAE')) );
			return json_encode($sentencia2);
		}
		function get_All2(){
			$sentencia2 = array('TB_Estado' => array( array('0','NO SE ENCONTRARON REGISTROS EN ESTA FECHA edocue'), array('T','0') ));
			return json_encode($sentencia2);
		}
		//Cuenta
		function get_Cuentas()
		{
			$sentencia3 = array( 'Cuentas' => array( array('TODO'), array('ABONOS'), array('RECARGAS')) );
			return json_encode($sentencia3);
		}
		function get_All3(){
			$sentencia3 = array('TB_Estado' => array( array('0','NO SE ENCONTRARON REGISTROS EN ESTA FECHA edocue'), array('T','0') ));
			return json_encode($sentencia3);
		}
	}

	class EstadoCuenta2 {
	}
	class EstadoCuenta3 {
	}
	//FIN DE LA PARTE DE LA VISTA DE ESTADO DE CUENTA
?>
