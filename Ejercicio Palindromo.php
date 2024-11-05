<?php

function esPalindromo($palabra){
    $palabra = strtolower($palabra);
    $palabra = str_replace(' ', '', $palabra);
    $palabraInversa = strrev($palabra);
      
if($palabra === $palabraInversa){
    
    print("La palabra es Palindroma");
}else{
    print("La palabra no es PALINDROMA");
}
}

esPalindromo("Anita lava la tina");


?>