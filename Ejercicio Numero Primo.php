<?php
function esPrimo($n){

    //Condicionando una primera instancia, en la cual los numeros que sean menores o iguales a 1 son considerados por default no primos 

    if($n<=1){
        print("El numero no es primo");
        return; }
       
    //Realizando un ciclo en el que el indice comience en 2, y cuyo valor maximo sea el numero ingresado menos 1, eso ya que  se hará una comparación con cada valor de i hasta llegar al numero ingresado menos 1, esta condición n-1, quiere decir que el numero ingresado se toma por default que es divisible entre el mismo, siguiendo la regla de los núnermos primos, la cual es que son divisibles por ellos mismos y por la unidad.

    
    for($i=2;$i<=$n-1;$i++){
          if($n%$i==0){
        print("El valor no es primo");
        return;
          }
    }
        print("El valor es primo");
    



}

esPrimo(8);
?>