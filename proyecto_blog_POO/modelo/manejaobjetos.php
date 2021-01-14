<?php

    include_once("objetoblog.php");

    class manejoObjetos{

        private $conexion;

        public function __construct($conexion){
            $this->setConexion ($conexion);
        }

        public function setConexion(PDO $conexion){
            $this->conexion=$conexion;

        }

        public function getContenidoPorFecha(){
            $matriz=array();
            $contador=0;
            
            $resultado=$this->conexion->query("SELECT * FROM contenido ORDER BY fecha DESC LIMIT 3");

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                $blog=new ObjetoBlog();
                $blog->setId($registro['id']);
                $blog->setTitulo($registro['titulo']);
                $blog->setFecha($registro['fecha']);
                $blog->setComentario($registro['comentario']);
                $blog->setImagen($registro['imagen']);

                $matriz[$contador]=$blog;
                $contador++;
            }

            return $matriz;
        }

        public function insertaContenido (objetoBlog $blog){

            $sql="INSERT INTO 
                  contenido (titulo, 
                             fecha, 
                             comentario, 
                             imagen) 
                  VALUES ('". $blog->getTitulo()."',
                          '". $blog->getFecha()."',
                          '". $blog->getComentario()."',
                          '". $blog->getImagen()."')";

            $this->conexion->exec($sql);

        }

    }

?>