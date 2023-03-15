<?php
    //Luis Enrique Ballesteros Soriano  a 15 de Marzo de 2023
    $A = true;
    $B = false;
    $C = false;

    if( !$A && ($B || $C)) { 
        echo "funcion1();";
    } 
    else { 
        echo "funcion2();";
        echo "funcion3();";
        echo "funcion4();";
    }

