<?php 
  include_once('funciones/sesiones.php');

  include_once('funciones/funciones.php');

  include_once('templates/header.php');

  include_once('templates/barra.php');

  include_once('templates/sidenav.php');

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nuevo Invitado
        <small>LLena el formulario para dar de alta nuevos invitados</small>
      </h1>
    </section>

    <div class="row">
        <div class="col-md-8">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Invitado</h3>

        </div>
        <div class="box-body">
        <form role="form" name="guardar-registro" id="guardar-registro" method="post" action="modelo-evento.php">
              <div class="box-body">
                <!-- nombre-->  
                <div class="form-group">
                  <label for="nombre">Nombre*:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre de invitacion" required>
                </div>

                <!-- invitados-->
                <div class="form-group">
                  <label for="invitados">Invitados*:</label>
                  <input type="number" class="form-control" id="invitados" name="invitados" placeholder="Ingrese numero de invitados" required>             
                </div>

                <!-- codigo-->  
                <div class="form-group">
                  <label for="codigo">Codigo*:</label>
                  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese codigo" required>
                </div>

                <!-- correo-->  
                <div class="form-group">
                  <label for="correo">Correo:</label>
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese correo (opcional)">
                </div>

                <!-- telefono-->  
                <div class="form-group">
                  <label for="telefono">Telefono:</label>
                  <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese telefono (opcional)">
                </div>

              </div>     
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="nuevo">
                <button type="submit" class="btn btn-primary" >Crear</button>
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