<?php
   
    require_once("../config/conexion.php");
    require_once("../models/Email.php");
    $email = new Email();

    switch ($_GET["op"]) {
       
        case "ticket_abierto":
            $email->ticket_abierto($_POST["tick_id"]);
            break;

            case "ticket_abierto_copia":
                $email->ticket_abierto_copia($_POST["tick_id"]);
                break;

        case "ticket_cerrado":
            $email->ticket_cerrado($_POST["tick_id"]);
            break;

        case "ticket_cerrado_copia":
            $email->ticket_cerrado_copia($_POST["tick_id"]);
            break;

        case "ticket_asignado":
            $email->ticket_asignado($_POST["tick_id"]);
            break;

        case "ticket_asignado_copia":
            $email->ticket_asignado_copia($_POST["tick_id"]);
            break;
    }
?>