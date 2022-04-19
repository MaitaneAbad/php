<?php
// !VARIABLES

// *CONCATENACIÓN STRINGS
// $variable1 = 'Mai Abad';
// $variable2 = 'Conde';

// echo $variable1 . ' ' . $variable2;


// *OPERACIONES NÚMERICAS
// $variable3 = 3;
// $variable4 = 4;

// $suma = $variable3 + $variable4;
// echo $suma;

// !CONSTANTES

// define("numero1", 5);
// define("numero2", 8);

// $suma = numero1 + numero2;
// echo $suma;

// !BUCLE FOR Y FOREACH

// *FOR
//  $nombre = "Mai";
//  $array = array(1, 2, 3, "casa", $nombre);

//  //saco el numero de elementos
//  $longitud = count($array);

//  //Recorro todos los elementos
//  for($i=0; $i<$longitud; $i++){
//      //saco el valor de cada elemento  
//     echo $array[$i]."<br>";

//  }


// *FOREACH
// $array2 = array('uno', 'dos', 'tres');

// foreach($array2 as $key => $value){
//     echo $value;
//     echo "<br>";
// }

// !FUNCIONES

// *FUNCION BÁSICA
// function bucleFor(){
// $array2 = array('uno', 'dos', 'tres');

//     foreach($array2 as $key => $value){
//         echo $value;
//         echo "<br>";
//     }
// }

// bucleFor();

// *FUNCION CON PARÁMETROS
// function suma($a, $b){
//     $total = $a + $b;
//     echo $total;
// }
// suma(6,8);

// !ESTRUCTURAS DE CONTROL

// *IF - ELSE
// $user="mai";
// $pass= "mai";
// if($user== $pass){
// echo "Si coinciden";
// }else{
//     echo "No coindiden";
// }

// *WHILE 1
// $a=0;
// $fruits = array('mango', 'pera', 'manzana');
// while ($a < count($fruits)) {
//     echo $fruits[$a]. "<br>";
//     $a++; 
// }

// *DO-WHILE
// $x=0;
// do {
//     echo "The number  is: $x <br>";
//     $x++;
// } while ($x <= 10);

// *SWITCH-CASE
// $variable = 3;
// switch ($variable) {
//     case 1:
//         echo "Es igual a 1";
//         break;
//     case 2:
//         echo "Es igual a 2";
//         break;
//     case 3:
//         echo "Es igual a 3";
//         break;
    
//     default:
//         # code...
//         break;
// }

?>