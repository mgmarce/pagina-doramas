<?php 

session_start();
require_once "config/rutas.php";
//require_once "Config/Conexion.php";

if(isset($_GET['c']) ){   
    if(file_exists("controllers/".$_GET['path']."/".$_GET['c']."Controllers.php")){
        require_once("controllers/".$_GET['path']."/".$_GET['c']."Controllers.php");
    }else{
        sesionLogin();
    }

}else{
    sesionLogin();
}



?>