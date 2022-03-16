<?php
    require_once("../../config/conexion.php");
    session_destroy();
    header("Location:".conectar::ruta()."/ticket.php");
    exit();
?>