<?php
	include_once("../model/ConsultaProcesados.php");
/**
 *
 */
	//Estado de cuenta
	class ajax_web1
	{
		private $model;
		function __construct()
		{
			$this->model = new EstadoCuenta();
		}
		public function consultar1(){
			$consulta1=$this->model->get_Locales();
			echo $consulta1;
		}
		public function consultar_all1(){
			$consulta1=$this->model->get_All1();
			echo $consulta1;
		}
	}
  $consulta_Store1 = new ajax_web1();


	//Fin de estado de cuenta

	if(!isset($_POST['P'])) {
		print json_encode(0);
		return;
	}

	switch($_POST['P']) {
		case 'ESTADOCTA_APP':
					$consulta_Store1->consultar1();
		        break;
		case 'ESTADOCTA_APP_New':
					$consulta_Store1->consultar_all1();
		        break;
	}
?>
