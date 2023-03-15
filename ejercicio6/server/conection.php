<?php
    //Luis Enrique Ballesteros Soriano  a 15 de Marzo de 2023
    function conectar(){
        $__servername = "localhost";
        $__username = "root";
        $__password = "";
        $__dbname = "ejercicio6";
        $__conexion = mysqli_connect($__servername, $__username, $__password, $__dbname);
        if(!$__conexion){
            die("La conecion falló: " . mysqli_connect_error());
        }
        return $__conexion;
    }