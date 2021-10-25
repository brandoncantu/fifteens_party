<?php
if(isset($_POST['codigo_inv'])){
    
    $codigo_inv = $_POST['codigo_inv'];  
    $accion = $_POST['action'];
    
    if($accion == 'login'){
        try{
            include_once('config.php');
            $sql = "SELECT nombre_familiar, invitados, codigo_inv, asistencia FROM invitados where codigo_inv = ?";
            $stmt = $link->prepare($sql);
            $stmt->bind_param('s', $codigo_inv);
            $stmt->execute();
            $stmt->bind_result($nombre_familiar, $invitados, $codigo, $asistencia);
            $stmt->fetch();
            include_once('inv_html.php');
            if($codigo){
                $respuesta = array(
                    'respuesta' => 'exito',
                    'nombre' => $nombre_familiar,
                    'invitados' => $invitados,
                    'codigo' => $codigo,
                    'asistencia' => $asistencia,
                    'html' => retrievehtml($nombre_familiar, $invitados, $codigo, $asistencia)
                );
            }else{
                $respuesta = array(
                    'respuesta' => 'error',
                    'error' => 'Invitado inexistente'
                );
            }
            $stmt->close();
            //$link->close();
            //Cambiamos estado a visto
            include_once('config.php');
            $sql2 = "UPDATE invitados set visto = 1 where codigo_inv = ? ";
            $stmt2 = $link->prepare($sql2);
            $stmt2->bind_param('s', $codigo_inv);
            $stmt2->execute();
            if($stmt2->affected_rows > 0){
                // $respsuesta = array(
                //     'respuesta' => 'correcto',
                //     'tipo' => $accion,
                //     'tarea' => $id,
                //     'estado' => $tarea
                // );
            }else{
                // $respsuesta = array(
                //     'respuesta' => 'error'
                // );
            }
            $stmt2->close();
            $link->close();
        }catch(Exception $e){
            $respuesta = array(
                'respuesta' => 'error',
                'error' => $e-getMessage()
             );
        }
        die(json_encode($respuesta));
    }

    else if($accion == 'confirm'){
        try{

            if(isset($_POST['confirmation'])){
                $confirm = (int) $_POST['confirmation'];
            }else{
                $respuesta = array(
                    'respuesta' => 'error',
                    'error' => 'Confirmacion no recibida'
                );
                die(json_encode($respuesta));
            }
            include_once('config.php');
            $sql = "UPDATE invitados SET asistencia = ? where codigo_inv = ?";
            $stmt = $link->prepare($sql);
            $stmt->bind_param('is', $confirm, $codigo_inv);
            $stmt->execute();
            if($stmt->affected_rows){
                if($confirm == 1 || $confirm == '1'){
                    $respuesta = array(
                        'respuesta' => 'exito',
                        'message' => 'Gracias por confirmar! Te esperamos el 18 de octubre!'
                    );
                }else if($confirm == 2 || $confirm == '2'){
                    $respuesta = array(
                        'respuesta' => 'exito',
                        'message' => 'Gracias por notificarnos'
                    );
                }
            }else{
                $respuesta = array(
                    'respuesta' => 'error',
                    'message' => 'Error al recibir tu respuesta'
                );
            }
            $stmt->close();
            $link->close();
        }catch(Exception $e){
            $respuesta = array(
                'respuesta' => 'error',
                'error' => $e-getMessage()
             );
        }
        die(json_encode($respuesta));
    }
    
}else{
    $respuesta = array(
        'respuesta' => 'error',
        'error' => 'Código no recibido'
    );
    die(json_encode($respuesta));
}