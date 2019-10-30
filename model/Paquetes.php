<?php
class Paquetes {
  function get_Paquete()
  {
    $sentencia = array('Mensaje' => array('! Formato de Telefono invalido !'),'Msportada' => array('MsSistema' => array('T'=>'INSTALA/ACTUALIZA TU DESKTOP APP','L' => array('Actualiza Vigencias de Paquetes SinLimite','Y Vigencias Paquetes de Internet','Nueva Recarga Entretenimiento','<a href="http://www.recargalos.com.mx/install/WindowsApp_v4.9.exe">Descarga la version 4.9</a>')),'VCTtmac' => '1'));
    return json_encode($sentencia);
  }
}
?>
