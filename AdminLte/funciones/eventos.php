<?php
include_once('funciones/funciones.php');
function Eventos($fecha){
    // $user = 'b14fa1a2e46d45';
    // $password = '116b8057';
    // $db = 'heroku_15cf40b5956ac06';
    // $host = 'us-cdbr-east-02.cleardb.com';
    
    // $link = mysqli_connect($host, $user, $password, $db);
        $sql = "CALL `getEventos`('$fecha')";
        $resultado = $link->query($sql);
        $dia = array();
        $categoria = array();
        while($eventos = $resultado->fetch_assoc()){

            $d = $eventos['fecha_evento'];
            $tipo = $eventos['cat_evento'];
            $evt = array(
                'cat' => $eventos['cat_evento'],
                'nombre' => $eventos['nombre_evento'],
                'hora' => $eventos['hora_evento'],
                'clave' => $eventos['clave'],
            );
            $categoria[$tipo][] = $evt;
            $dia[$d] = $categoria;                    
        }
        foreach($categoria as $cat){

            echo '<div>';
            echo "<p>". $cat[0]['cat']. "</p>";

            foreach($cat as $data){
                echo '<label><input type="checkbox" name="registro[]" id="';
                echo $data['clave'];
                echo '"value="';
                echo $data['clave'];
                echo '"><time> ';
                echo $data['hora'];
                echo '</time> ';
                echo $data['nombre'];
                echo '</label><br>';
            }                               
            echo '</div>';                         
        }
        $link->close();
}

function dashBoardInfo($input){
    global $link;
    if($input == "all"){
        $sql = 'SELECT COUNT(*) as "res" FROM invitados';
    }
    if($input == "confirmado"){
        $sql = 'SELECT COUNT(*) as "res" from invitados where asistencia = 1 or asistencia_manual = 1';
    }
    if($input == "confirmado_total"){
        $sql = 'SELECT COUNT(*) as "res" from invitados where asistencia = 1 and asistencia_manual = 1';
    }
    if($input == "visto"){
        $sql = 'SELECT COUNT(*) as "res" from invitados where visto = 1';
    }
    if($input == "rechazado"){
        $sql = 'SELECT COUNT(*) as "res" from invitados where asistencia = 2 or asistencia_manual = 2';
    }
    if($input == "rechazado_total"){
        $sql = 'SELECT COUNT(*) as "res" from invitados where asistencia = 2 and asistencia_manual = 2';
    }
        $resultado = $link->query($sql);
        $cant = $resultado->fetch_assoc();
        $cantidad = $cant['res'];


        //$link->close();
        return $cantidad;
}
?>