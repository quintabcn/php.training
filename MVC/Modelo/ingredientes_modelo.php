<?php
    class ingredientes_modelo{

        private $db;
        private $ingredientes;

        public function __construct(){

            require_once("Modelo/conectar.php");

            $this->db=Conectar::conexion();
            $this->ingredientes=array();

        }

        public function get_ingredientes(){

            $consulta=$this->db->query("SELECT * FROM ingredients");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->ingredientes[]=$filas;
            }

            return $this->ingredientes;

        }
        
            
    }

?>