<?php

    class Animal{
        private $vive;
        private $sexo;
        private $alimentacion;

        function __construct($sexo){
            $vive = true;
            $this->sexo = $sexo;
        }

        function estaVivo($estado){
            $vive = $estado;
            if (!$estado) {
                echo "Ha muerto";
            }
        }

        function queCome($alimentacion){
            $this->alimentacion = $alimentacion;
            echo "Come $alimentacion";
        }
    }

    class Mamifero extends Animal{
        private $pelo;
        private $gestacion;

        function __construct($sexo){
            parent::__construct($sexo);
        }

        function pierdePelo ($pelo){
            $this->pelo = $pelo;
            if (!$pelo){
                echo "Se le ha caido el pelo";
            }
        }

        function mantieneRelaciones(){
            if(rand(0,1) === 0) {
                echo "Esta preñada";
            }else {
                echo "No esta preñada";
            }
        }
    }

    class Ave extends Animal{
        private $plumas;
        private $vuela;

        function __construct(){

        }
    }

    class Gato extends Mamifero{
        private $vidas;
    }

    class Perro extends Mamifero{
        private $ladra;
    }

    class Canario extends Ave{
        private $canta;
    }

    class Pinguino extends Ave{
        private $pesca;
    }

    class Lagarto extends Animal{
        private $engulle;
    }
