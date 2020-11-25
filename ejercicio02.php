<?php
    class Recurso {
        public $nRegistro;
        public $titulo;
        public $anio;
        public $idioma;

        function __construct($nRegistro, $titulo, $anio, $idioma){
            $this->nRegistro = $nRegistro;
            $this->titulo = $titulo;
            $this->anio = $anio;
            $this->idioma = $idioma;
        }
    }

    class Libro extends Recurso {
        public $isbn;
        public $autor;
        public $editorial;
        public $prestado = 0;
        public $reserva = false;

        function __construct($nRegistro, $titulo, $anio, $idioma, $isbn, $autor, $editorial){
            parent::__construct($nRegistro, $titulo, $anio, $idioma);
            $this->isbn = $isbn;
            $this->autor = $autor;
            $this->editorial = $editorial;
        }

        function __toString(){
            return "Numero de Registro: $this->nRegistro<br>Titulo: $this->titulo<br>Año: $this->anio<br>Idioma: $this->idioma<br>ISBN: $this->isbn<br>Autor: $this->autor<br>Editorial: $this->editorial<br>";
        }

        function devolver(){
            if($this->prestado === 0){
                echo "Este libro no a sido prestado<br>";
            }else {
                echo "El libro a sido devuelto<br>";
                $this->prestado -= 1;
            }
        }

        function prestar(){
            if($this->reserva){
                if($this->prestado === 2){
                    echo "El libro ya no se puede prestar más hasta nueva orden<br>";
                }else{
                    echo "Aquí tiene su libro<br>";
                    $this->prestado += 1;
                    $this->reserva = false;
                }
            }else {
                echo "Antes de reclamar el libro tienes que haberlo reservado<br>";
            }
            
        }
        function reservar(){
            if($this->prestado === 2){
                echo "El libro ha llegado al limite de reservas<br>";
            }else{
                $this->reserva = true;
                echo "Se ha reservado correctamente<br>";
            }
        }

    }

    $libro = new Libro('122','Un titulo','1998','ES','9788425223280','Jorge','Garceta');
    echo $libro;
    $libro -> devolver();
    $libro -> prestar();
    $libro -> reservar();
    $libro -> prestar();
    $libro -> devolver();
    $libro -> reservar();
    $libro -> prestar();
    $libro -> reservar();
    $libro -> prestar();
    $libro -> reservar();

