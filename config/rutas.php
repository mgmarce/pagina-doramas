<?php 

function sesionLogin(){
    if(isset($_SESSION['rol'])){
        header("location: ?path=".$_SESSION['rol']."&c=principal&a=inicio");
    }else{
        header("location: ?path=publico&c=principal&a=inicio");
    }
}




?>