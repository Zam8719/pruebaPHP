<?php
    abstract class Empleado{
        protected $nombre;
        protected $edad;
        protected $salario;
        protected const PLUS = 300;

        abstract function plus();
    }

    class Repartidor{
        protected $zona;

        function __construct($nombre, $edad, $salario, $zona){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->salario = $salario;
            $this->zona = $zona;
        }

        function plus(){
            
        }
    }