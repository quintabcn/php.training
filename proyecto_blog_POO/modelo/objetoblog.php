<?php

    class objetoblog{

        //----- Propiedades del objeto blog -----

        private $id;
        private $titulo;
        private $fecha;
        private $comentario;
        private $imagen;

        //------ Métodos de Acceso get-set ------

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id=$id;
        } 

        //------ Métodos de Acceso get-set ------

        public function getTitulo(){
            return $this->titulo;
        }
        public function setTitulo($titulo){
            $this->titulo=$titulo;
        }

        //------ Métodos de Acceso get-set ------

        public function getFecha(){
            return $this->fecha;
        }
        public function setFecha($fecha){
            $this->fecha=$fecha;
        } 

        //------ Métodos de Acceso get-set ------

        public function getComentario(){
            return $this->comentario;
        }
        public function setComentario($comentario){
            $this->comentario=$comentario;
        } 

        //------ Métodos de Acceso get-set ------

        public function getImagen(){
            return $this->imagen;
        }
        public function setImagen($imagen){
            $this->imagen=$imagen;
        }         
    }

?>