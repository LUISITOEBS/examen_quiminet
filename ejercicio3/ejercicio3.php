<?php
    //Luis Enrique Ballesteros Soriano  a 15 de Marzo de 2023
    
    header('Access-Control-Allow-Origin: *');

    class GenerarArray {
        public $array =[];

        public function __construct($filas){
            $this->array = [];
            for($i = 0; $i <= $filas -1; $i++ ) {
                $this->array[$i] = rand(1, 15);
            }
        }

        public function getArray():array{
            return $this->array;
        }
    }

    $variable = $_GET['numeros'];
    $obj = new GenerarArray($variable);
    $array =   $obj->getArray();
    echo json_encode($array, true);
