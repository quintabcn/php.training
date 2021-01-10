<?php

    require_once ("Modelo/ingredientes_modelo.php");

    $ingrediente=new ingredientes_modelo();

    $matrizingredientes=$ingrediente->get_ingredientes();

    require_once ("Vista/ingredientes_vista.php");


?>