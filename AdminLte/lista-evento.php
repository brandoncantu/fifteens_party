<?php 
  include_once('funciones/sesiones.php');

  include_once('templates/header.php');

  include_once('templates/barra.php');

  include_once('templates/sidenav.php');

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Eventos
        <small>Lista de eventos</small>
      </h1>
    </section>

    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mantenimiento de invitados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body contenedor-tabla">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Invitado</th>
                  <th>No Invitados</th>
                  <th>Codigo</th>
                  <th>Visto</th>
                  <th>Asist Auto</th>
                  <th>Asist Manual</th>
                  <th>Telefono</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('funciones/funciones.php');
                        try{
                            $sql = 'SELECT  * FROM invitados';
                            $res = $link->query($sql);

                        }catch(Exception $e){
                            echo $e->getMessage();
                        }

                        while($invitado = $res->fetch_assoc()){ ?>
                            <tr>
                                <td><?php echo $invitado['invitado_id']; ?></td>
                                <td><?php echo $invitado['nombre_familiar']; ?></td>
                                <td><?php echo $invitado['invitados']; ?></td>
                                <td><?php echo $invitado['codigo_inv']; ?></td>
                                <td <?php if($invitado['visto']=='1'){echo "style='background:#c5e9f0'";} ?>><?php echo $invitado['visto']; ?></td>
                                <td 
                                  <?php
                                    if($invitado['asistencia']=='2'){echo "style='background:#f0c5c5'";}
                                    else if($invitado['asistencia']=='1'){echo "style='background:#c5f0c8'";} 
                                  ?>>
                                  <?php echo $invitado['asistencia']; ?>
                                </td>
                                <td 
                                  <?php
                                    if($invitado['asistencia_manual']=='1'){echo "style='background:#c5f0c8'";}
                                    else if($invitado['asistencia_manual']=='2'){echo "style='background:#f0c5c5'";} 
                                  ?>>
                                  <?php echo $invitado['asistencia_manual']; ?>
                                </td>
                                <td><?php echo $invitado['telefono']; ?></td>
                                <td>
                                    <a href="editar-evento.php?id=<?php echo $invitado['invitado_id'];?>" class="btn bg-orange btn-flat margin">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a href="#" data-id="<?php echo $invitado['invitado_id']; ?>" data-tipo="evento" class="btn bg-maroon btn-flat margin borrar-registro">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                                
                            </tr>

                        <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Invitado</th>
                  <th>No Invitados</th>
                  <th>Codigo</th>
                  <th>Visto</th>
                  <th>Asist Auto</th>
                  <th>Asist Manual</th>
                  <th>Telefono</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  <!-- /.content-wrapper -->

  <?php 
    include_once('templates/footer.php');
?>
