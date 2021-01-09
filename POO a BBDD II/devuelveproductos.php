<?php

require "conexion.php";

class DevuelveProductos extends Conexion{

    public function DevuelveProductos(){

        parent::__construct();

    }

    public function get_productos($dato){

        $sql="SELECT * FROM perfumes WHERE genero='" .$dato. "'";

        $sentencia=$this->conexion_db->prepare($sql);

        $sentencia->execute(array());

        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);

        $sentencia->closeCursor ();

        return $resultado; 

        $this->conexion_db=NULL;

        /*$resultado=$this->conexion_db->query('SELECT * FROM perfumes WHERE "'.$dato.'"');

        $perfumes=$resultado->fetch_all(MYSQLI_ASSOC);

        return $perfumes;*/



    }
}
?>