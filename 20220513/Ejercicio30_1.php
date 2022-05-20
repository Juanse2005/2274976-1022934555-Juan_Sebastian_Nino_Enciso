<?php
session_start();
if( isset($SESSION["usuario"])){
    echo "usuario: "["usuario"]." estatus: ".$_SESSION["estatus"];
}else{
    echo "No hay datos";
}
?>