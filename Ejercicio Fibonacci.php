<?php
 
 function generarFibonacci($n){

//Declarando el array donde ira la serie:
     $fibonacci = [];
  
$a=0;  
$b=1;

//Haciendo un ciclo en el que  se tome en cuenta como valor base a y b y c sea la suma de los dos numeros anteriores a el.

  for($i=0; $i<$n; $i++){
      
     $fibonacci[$i] = $a;
     $c=$a+$b;
     $a=$b;
     $b=$c;
     
  }
  
  return $fibonacci;
     
 }
 
 print_r(generarFibonacci(15));
?>