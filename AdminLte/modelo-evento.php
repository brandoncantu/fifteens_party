<?php
include_once('funciones/funciones.php');
if(isset($_POST['codigo'])){
    $nombre = $_POST['nombre'];
    $invitados = (int) $_POST['invitados'];
    $codigo = $_POST['codigo'];
    if(isset($_POST['correo'])){$correo = $_POST['correo'];}else{$correo = "";}
    if(isset($_POST['telefono'])){$telefono = $_POST['telefono'];}else{$telefono = "";}
    if(isset($_POST['asistencia'])){$asistencia = $_POST['asistencia'];}else{$asistencia = "";}
    if(isset($_POST['asistencia_manual'])){$asistencia_manual = $_POST['asistencia_manual'];}else{$asistencia_manual = "";}
}

function check(){
    if(empty($_POST['codigo']) || empty($_POST['nombre']) || empty($_POST['invitados']) || empty($_POST['codigo'])){
        $respuesta = array(
            'respuesta' => 'error',
            'message' => 'Error al insertar! Datos vacios'
        );
        die(json_encode($_POST));
    }
}

function validaCodigo($cod){
    try{
        global $link;
        $sql = "SELECT invitado_id FROM invitados WHERE codigo_inv = ?";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("s", $cod);
        $stmt->execute();
        $stmt->bind_result($exists);
        $stmt->fetch();
        if($exists){
            return false;
        }else{
            return true;
        }
        $stmt->close();
    }catch(Exception $e){
       return false;
    }
}

if(isset($_POST['registro'])){
    if($_POST['registro'] == 'nuevo'){
        check();
        $validado = validaCodigo($codigo);
        //die(json_encode($fecha));
        try{
            if($validado){
                $sql = "INSERT INTO invitados (nombre_familiar, invitados, codigo_inv, correo, telefono) values (?,?,?,?,?)";
                $stmt = $link->prepare($sql);
                $stmt->bind_param("sssss", $nombre, $invitados, $codigo, $correo, $telefono);
                $stmt->execute();
                $id_registro = $stmt->insert_id;
                if($id_registro > 0){
                    $respuesta = array(
                        'respuesta' => 'exito',
                        'id_inv' => $id_registro,
                        'message' => 'Invitado dado de alta!'
                    );
                }else{
                    $respuesta = array(
                        'respuesta' => 'error',
                        'message' => 'Error al insertar! Invitado ya existe'
                    );
                }
                $stmt->close();
                $link->close();
            }else{
                $respuesta = array(
                    'respuesta' => 'error',
                    'message' => 'Error al insertar! Codigo ya existe'
                );
            }
        }catch(Exception $e){
            $respuesta = array(
                'respuesta' => 'error',
                'message' => 'Error: ' . $e->getMessage()
            );
        }

        die(json_encode($respuesta));
    }
    /////////////
    if($_POST['registro'] == 'editar'){
        check();
        try{
            $sql = "UPDATE invitados SET nombre_familiar = ?, invitados  = ?, codigo_inv  = ?, 
                                        correo  = ?, telefono  = ?, asistencia  = ?, asistencia_manual = ? 
                                        WHERE invitado_id = ?";
            $stmt = $link->prepare($sql);
            $stmt->bind_param("sisssiii", $nombre, $invitados, $codigo, $correo, $telefono, $asistencia, $asistencia_manual,$_POST['id']);
            $stmt->execute();
            if($stmt->affected_rows){
                $respuesta = array(
                    'respuesta' => 'exito',
                    'message' => 'Se actualizaron los datos'
                );
            }else{
                $respuesta = array(
                    'respuesta' => 'error',
                    'message' => 'Error al actualizar! Los datos son los mismos'
                );
            }
            $stmt->close();
            $link->close();
        }catch(Exception $e){
            $respuesta = array(
                'respuesta' => 'error',
                'message' => 'Error: ' . $e->getMessage()
            );
        }

        die(json_encode($respuesta));
    }
    /////////////
    if($_POST['registro'] == 'borrar'){
        $id = $_POST['id'];
        try{

            $sql = "DELETE FROM invitados WHERE invitado_id = ?";
            $stmt = $link->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            if($stmt->affected_rows){
                $respuesta = array(
                    'respuesta' => 'exito',
                    'message' => 'Se borro el registro'
                );
            }else{
                $respuesta = array(
                    'respuesta' => 'error',
                    'message' => 'Error al borrar! Hubo un problema'
                );
            }
            $stmt->close();
            $link->close();
        }catch(Exception $e){
            $respuesta = array(
                'respuesta' => 'error',
                'message' => 'Error: ' . $e->getMessage()
            );
        }

        die(json_encode($respuesta));
    }
}

?>