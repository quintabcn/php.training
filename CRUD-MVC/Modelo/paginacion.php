<?php
    
    require_once("conectar.php");
    $base=Conectar::conexion();

    $tamany=5;    

    if(isset($_GET['pagina'])){ 
        if($_GET['pagina']==1){
            header("Location:index.php");
        }else{
            $pag=$_GET['pagina'];
        }
    }else{
        $pag=1;
    }

    $start=($pag-1)*$tamany;

    $sql_total="SELECT * FROM ingredients";

    $resultado=$base->prepare($sql_total);
    $resultado->execute(array());

    $numfilas=$resultado->rowCount();

    $tot_pag=ceil($numfilas/$tamany);

?>