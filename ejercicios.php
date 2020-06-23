<?php
// $valor = 6;
// $condicion = [
//    0 => ' es mayor que 5 pero menor que 1',
//    1 => ' es mayor o igual a 0 pero menor o igual a 20',
//    2 => ' es igual a “10” y el tipo de dato es cadena',
//    3 => ' es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15'
// ];


//     if($valor > 5 and $valor < 10) {
//         echo $valor . $condicion[0];
//     } 
//     else if($valor === "10") {
//         echo $valor . $condicion[2],
//     }
//     else if($valor > 0 and $valor < 5 or $valor > 10 and $valor < 15) {
//         echo $valor . $condicion[3],
//     } else if($valor >= 0 and $valor <= 20) {
//         echo $valor . $condicion[1],
    // }
$numero = 7
if($numero > 5 && $numero < 10) {
    echo "$numero es mayor que 5 pero menor que 10.";
  } elseif (($numero > 0 and $numero < 5) or ($numero > 10 && $numero < 15)) {

    echo "$numero es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15.";
  } elseif ($numero === "10") {
    
    echo 'El valor es igual a "10" y es un dato de tipo cadena.';
  } elseif ($numero >= 0 && $numero <= 20) {
    
    echo "$numero es mayor o igual a 0 pero menor que o igual a 20.";
  }
    }

?>