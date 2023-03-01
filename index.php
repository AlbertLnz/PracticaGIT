<?php

include 'auto.php';

$autoList = array();
$cantidadAutos = readline('aaaa: ');

do{
  $p = readline("Ingrese la placa: ");
  $c = readline("Ingrese el color: ");
  $m = readline("Ingrese el modelo: ");

  $auto = new Auto($p, $c, $m);

  array_push($autoList, $auto);

  $cantidadAutos--;
}while($cantidadAutos>0);

var_dump($autoList);

//canvi per fer el 3r repositori
// // function pedirDatos($dato){
// //   return readlines("Dime el/la ".$dato.": ");
// // }



?>