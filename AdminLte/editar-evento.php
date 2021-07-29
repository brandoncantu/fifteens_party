<?php 
  include_once('funciones/sesiones.php');

  include_once('funciones/funciones.php');

  $id = $_GET['id'];

  if(!filter_var($id, FILTER_VALIDATE_INT)){
      die('Error!');
  }

  include_once('templates/header.php');

  include_once('templates/barra.php');

  include_once('templates/sidenav.php');

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Invitado
        <small>LLene el formulario para dar editar el invitado</small>
      </h1>
    </section>

    <div class="row">
        <div class="col-md-8">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Invitado</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>

        <?php
            $sql = "SELECT * FROM invitados WHERE invitado_id = $id";
            $res = $link->query($sql);
            $invitado = $res->fetch_assoc();
        ?>

        <div class="box-body">
        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-evento.php" enctype="multipart/form-data">
              <div class="box-body">
                <!-- nombre-->  
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" value="<?php echo $invitado['nombre_familiar']; ?>">
                </div>
                <!-- Invitados-->
                <div class="form-group">
                  <label for="invitados">Invitados:</label>
                  <input type="number" class="form-control" id="invitados" name="invitados" placeholder="Ingrese numero de invitados" value="<?php echo $invitado['invitados']; ?>">             
                </div>

                <!-- codigo-->  
                <div class="form-group">
                  <label for="codigo">Codigo:</label>
                  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese codigo" value="<?php echo $invitado['codigo_inv']; ?>">
                </div>

                <!-- correo-->  
                <div class="form-group">
                  <label for="correo">Correo:</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese correo (opcional)" value="<?php echo $invitado['correo']; ?>">
                </div>

                <!-- telefono-->  
                <div class="form-group">
                  <label for="telefono">Telefono:</label>
                  <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono (opcional)" value="<?php echo $invitado['telefono']; ?>">
                </div>

                <!-- asistencia 1-->
                <div class="form-group">
                  <label for="asistencia">Asistencia:</label>
                  <select class="form-control" name="asistencia" id="asistencia">
                      <option id="status_asistencia" name="asistencia" value="0" <?php if($invitado['asistencia'] == 0){echo "selected";}?>>Sin confirmar</option>
                      <option id="status_asistencia" name="asistencia" value="1" <?php if($invitado['asistencia'] == 1){echo "selected";}?>>Confirmado</option>     
                      <option id="status_asistencia" name="asistencia" value="2" <?php if($invitado['asistencia'] == 2){echo "selected";}?>>Rechazado</option>                  
                  </select>
                </div>

                <!-- asistencia 1-->
                <div class="form-group">
                  <label for="asistencia_manual">Asistencia Manual:</label>
                  <select class="form-control" name="asistencia_manual" id="asistencia_manual">
                      <option id="status_asistencia_manual" name="asistencia_manual" value="0" <?php if($invitado['asistencia_manual'] == 0){echo "selected";}?>>Sin confirmar</option>
                      <option id="status_asistencia_manual" name="asistencia_manual" value="1" <?php if($invitado['asistencia_manual'] == 1){echo "selected";}?>>Confirmado</option>     
                      <option id="status_asistencia_manual" name="asistencia_manual" value="2" <?php if($invitado['asistencia_manual'] == 2){echo "selected";}?>>Rechazado</option>                  
                  </select>
                </div>


              </div>     
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="editar">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" class="btn btn-primary" >Guardar</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>

        </div>
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
    include_once('templates/footer.php');
?>