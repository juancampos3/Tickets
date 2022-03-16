<?php

require('class.phpmailer.php');
include("class.smtp.php");
require_once("../config/conexion.php");
require_once("../Models/Ticket.php");

class Email extends PHPMailer{
    protected $gCorreo = 'jujocamen@gmail.com';
    protected $gContrasena = 'juanjose1913';

    public function ticket_abierto($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $descrip = $row["tick_descrip"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }
        $this->IsSMTP();
        $this->Host = 'smtp.gmail.com';//Aqui el server
        $this->Port = 587;//Aqui el puerto
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->SMTPSecure = 'tls';
        $this->FromName = $this->tu_nombre = "Ticket Abierto ".$id;
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->addAddress($_SESSION["usu_correo"]);
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Ticket Abierto";
        $cuerpo = file_get_contents('../public/NuevoTicket.html'); 
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCate", $categoria, $cuerpo);
        $cuerpo = str_replace("lblDescrip", $descrip, $cuerpo);
        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Abierto");
        return $this->Send();
    }

    public function ticket_abierto_copia($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $descrip = $row["tick_descrip"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }
        $this->IsSMTP();
        $this->Host = 'smtp.gmail.com';//Aqui el server
        $this->Port = 587;//Aqui el puerto
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->SMTPSecure = 'tls';
        $this->FromName = $this->tu_nombre = "Ticket Abierto ".$id;
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->addAddress('jujocamen@gmail.com');
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Ticket Abierto";
        $cuerpo = file_get_contents('../public/NuevoTicket.html'); 
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCate", $categoria, $cuerpo);
        $cuerpo = str_replace("lblDescrip", $descrip, $cuerpo);
        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Abierto");
        return $this->Send();
    }

    public function ticket_cerrado($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $descrip = $row["tick_descrip"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }

        $this->IsSMTP();
        $this->Host = 'smtp.gmail.com';
        $this->Port = 587;
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->SMTPSecure = 'tls';
        $this->FromName = $this->tu_nombre = "Ticket Cerrado ".$id;
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->addAddress($_SESSION["usu_correo"]);
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Ticket Cerrado";
        $cuerpo = file_get_contents('../public/CerradoTicket.html'); 
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCate", $categoria, $cuerpo);
        $cuerpo = str_replace("lblDescrip", $descrip, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Cerrado");
        return $this->Send();
    }

    public function ticket_cerrado_copia($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $descrip = $row["tick_descrip"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }

        $this->IsSMTP();
        $this->Host = 'smtp.gmail.com';
        $this->Port = 587;
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->SMTPSecure = 'tls';
        $this->FromName = $this->tu_nombre = "Ticket Cerrado ".$id;
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->addAddress('jujocamen@gmail.com');
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Ticket Cerrado";

        $cuerpo = file_get_contents('../public/CerradoTicket.html'); 
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCate", $categoria, $cuerpo);
        $cuerpo = str_replace("lblDescrip", $descrip, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Cerrado");
        return $this->Send();
    }
    
    public function ticket_asignado($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $descrip = $row["tick_descrip"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }
        
        $this->IsSMTP();
        $this->Host = 'smtp.gmail.com';
        $this->Port = 587;
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->SMTPSecure = 'tls';
        $this->FromName = $this->tu_nombre = "Ticket Asignado ".$id;
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->addAddress($_SESSION["usu_correo"]);
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Ticket Asignado";
        $cuerpo = file_get_contents('../public/AsignarTicket.html');
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCate", $categoria, $cuerpo);
        $cuerpo = str_replace("lblDescrip", $descrip, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Asignado");
        return $this->Send();
    }

    public function ticket_asignado_copia($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $usu = $row["usu_nom"];
            $titulo = $row["tick_titulo"];
            $descrip = $row["tick_descrip"];
            $categoria = $row["cat_nom"];
            $correo = $row["usu_correo"];
        }
        
        $this->IsSMTP();
        $this->Host = 'smtp.gmail.com';
        $this->Port = 587;
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->SMTPSecure = 'tls';
        $this->FromName = $this->tu_nombre = "Ticket Asignado ".$id;
        $this->CharSet = 'UTF8';
        $this->addAddress($correo);
        $this->addAddress('jujocamen@gmail.com');
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Ticket Asignado";
        $cuerpo = file_get_contents('../public/AsignarTicket.html');
        $cuerpo = str_replace("xnroticket", $id, $cuerpo);
        $cuerpo = str_replace("lblNomUsu", $usu, $cuerpo);
        $cuerpo = str_replace("lblTitu", $titulo, $cuerpo);
        $cuerpo = str_replace("lblCate", $categoria, $cuerpo);
        $cuerpo = str_replace("lblDescrip", $descrip, $cuerpo);

        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Ticket Asignado");
        return $this->Send();
    }

}

?>

