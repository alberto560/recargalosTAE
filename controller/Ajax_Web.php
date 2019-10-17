<?php
	include_once("../model/ConsultaProcesados.php");
	include_once("../model/home.php");
	include_once("../model/EstadoCuenta.php");
/**
 *
 */
	class ajax_web
	{
	private $model;
		function __construct()
		{
				$this->model = new ConsultaProcesados();
		}
		public function consultar(){
		 $consulta= $this->model->get_Recargas();
	   	 echo $consulta;
		}

		public function consultar_all(){
		 $consulta= $this->model->get_All();
	   	 echo $consulta;
		}
	}
	$consulta_Store= new ajax_web();

	if(!isset($_POST['P'])) {
		print json_encode(0);
		return;
	}

	switch($_POST['P']) {
		case 'OPERADORES_APP':
      		$consulta_Store->consultar();
		break;
		case 'RECARGAS-PR_APP':
      		$consulta_Store->consultar_all();
		break;
	}
	//****
	//****
	//home***
	class ajax_web_home
	{
	private $model;
		function __construct()
		{
				$this->model = new home();
		}
		public function consulta_saldo(){
		 $consulta= $this->model->get_saldo();
	   	 echo $consulta;
		}
	}
	$consulta_home= new ajax_web_home();

	if(!isset($_POST['P'])) {
		print json_encode(0);
		return;
	}

	switch($_POST['P']) {
		case 'SALDO_APP':
      		$consulta_home->consulta_saldo();
		break;
	}

	//****
	//****
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
	//Fin de estado de cuenta
?>
