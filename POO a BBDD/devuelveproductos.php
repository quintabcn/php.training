<?php

require "conexion.php";

class DevuelveProductos extends Conexion{

    public function DevuelveProductos(){

        parent::__construct();

    }

    public function get_productos(){

        $resultado=$this->conexion_db->query('SELECT * FROM perfumes');

        $perfumes=$resultado->fetch_all(MYSQLI_ASSOC);

        return $perfumes;

    }
}
?>