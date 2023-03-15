<?php
    //Luis Enrique Ballesteros Soriano  a 15 de Marzo de 2023
    class GenerarArray {
        public $array =[];

        public function __construct($filas){
            $this->array = [];
            for($i = 0; $i <= $filas -1; $i++ ) {
                $this->array[$i] = rand(1, 1500);
            }
        }

        public function getArray():array{
            return $this->array;
        }
    }

