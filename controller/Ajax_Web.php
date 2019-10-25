<?php
	include_once("../model/ConsultaProcesados.php");
	include_once("../model/Home.php");
	include_once("../model/EstadoCuenta.php");
	include_once("../model/MiCuenta.php");
	include_once("../model/Login.php");
	include_once("../model/Recarga.php");
<<<<<<< HEAD
	include_once("../model/Paquetes.php");
=======
	include_once("../model/Depositos.php");
>>>>>>> de208f736430d5a0593ff63b8fbffa47e44a62e2
/**
 *
 */
	//****
	//****
	//Consulta procesados
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

	//****
	//****
	//Mi cuenta
	class ajax_web_cuenta
	{
	private $model;
		function __construct()
		{
				$this->model = new MiCuenta();
		}
		public function consulta_datos(){
		 $consultac= $this->model->get_datos();
	   	 echo $consultac;
		}
	}
	$consulta_cuenta= new ajax_web_cuenta();

	if(!isset($_POST['P'])) {
		print json_encode(0);
		return;
	}

	switch($_POST['P']) {
		case 'USUARIO_FORM':
      		$consulta_cuenta->consulta_datos();
		break;
	}

	//Consulta Operadores
	class ajax_web_cuenta1
	{
		private $model;
		function __construct()
		{
			$this->model = new MiCuenta();
		}
		public function consulta_op(){
		 $consultao= $this->model->get_operador();
	   	 echo $consultao;
		}
	}
	$consulta_operador= new ajax_web_cuenta1();

	if(!isset($_POST['P'])) {
		print json_encode(0);
		return;
	}

	switch($_POST['P']) {
		case 'OPERADORES_TBL':
      		$consulta_operador->consulta_op();
		break;
	}

	//****

	//****
	//****
	//Login
	class ajax_web_login
	{
		private $model;
		function __construct()
		{
			$this->model = new Login();
		}
		public function get_log(){
		 $consulta= $this->model->get_login();
	   	 echo $consulta;
		}
	}
	$consulta_login= new ajax_web_login();

	if(!isset($_POST['P'])) {
		print json_encode(0);
		return;
	}

	switch($_POST['P']) {
		case 'LOGIN_APP':
      		$consulta_login->get_log();
		break;
	}

	//****
	//****
	//Recargas
	class ajax_web_recarga
	{
		private $model;
				function __construct()
				{
					$this->model = new Recarga();
				}
				public function consultar1(){
					$consulta1=$this->model->get_Compania();
					echo $consulta1;
				}
				public function consultar_all1(){
					$consulta1=$this->model->get_All1();
					echo $consulta1;
				}
			}
		  $consulta_Recarga = new ajax_web_recarga();

			if(!isset($_POST['P'])) {
				print json_encode(0);
				return;
			}

	switch($_POST['P']) {
		case 'RECARGA_APP':
					$consulta_Recarga->consultar1();
		        break;
		case 'RECARGA_APP_New':
					$consulta_Recarga->consultar_all1();
		        break;
	}
	// Fin Recargas
<<<<<<< HEAD

	//****
	//****
	//Paquetes
	class ajax_web_paquetes
	{
		private $model;
				function __construct()
				{
					$this->model = new Paquetes();
				}
				public function consultar(){
					$consulta=$this->model->get_Paquete();
					echo $consulta;
				}
				public function consultar_all(){
					$consulta=$this->model->get_All2();
					echo $consulta;
				}
			}
		  $consulta_Paquete = new ajax_web_paquetes();

			if(!isset($_POST['P'])) {
				print json_encode(0);
				return;
			}

	switch($_POST['P']) {
		case 'RECARGA_APP1':
					$consulta_Paquete->consultar();
		        break;
		case 'RECARGA_APP_New':
					$consulta_Paquete->consultar_all();
		        break;
	}
	// Fin Paquetes

=======
	//****
	//****
	//Login
	class ajax_web_depositos
	{
		private $model;
		function __construct()
		{
			$this->model = new Depositos();
		}
		public function get_fact(){
		 $consulta= $this->model->get_factura();
	   	 echo $consulta;
		}
	}
	$consulta_depositos= new ajax_web_depositos();

	if(!isset($_POST['P'])) {
		print json_encode(0);
		return;
	}

	switch($_POST['P']) {
		case 'REPORTES':
      		$consulta_depositos->get_fact();
		break;
	}

	//****
	//****
>>>>>>> de208f736430d5a0593ff63b8fbffa47e44a62e2

?>
