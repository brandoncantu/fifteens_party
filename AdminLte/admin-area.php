<?php 
  include_once('funciones/sesiones.php');

  include_once('templates/header.php');

  include_once('templates/barra.php');

  include_once('templates/sidenav.php');

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper dashboard">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Resumen Evento</small>
      </h1>
    </section>

       <!-- Main content -->
      <?php require_once('funciones/eventos.php'); ?>
      <section class="content">  
        <!-- Small boxes (Stat box) -->
        <h2 class="page-header">Resumen Registros</h3>
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                <h3><?php echo dashBoardInfo('all'); ?></h3>

                <p>Invitados</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="lista-evento.php" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo dashBoardInfo('visto'); ?></h3>

                <p>Vistos</p>
              </div>
              <div class="icon">
                <i class="fa fa-check"></i>
              </div>
              <a href="lista-evento.php" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo dashBoardInfo('confirmado'); ?></h3>

                <p>Confirmados</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-plus"></i>
              </div>
              <a href="lista-evento.php" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo dashBoardInfo('rechazado'); ?></h3>

                <p>Rechazados</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-times"></i>
              </div>
              <a href="lista-evento.php" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->



        <!-- Small boxes (Stat box) -->
        <h2 class="page-header">Mas info</h3>
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-maroon">
              <div class="inner">
                <h3><?php echo dashBoardInfo('confirmado_total'); ?></h3>

                <p>Confirmados Por Ambas Partes</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-plus"></i>
              </div>
              <a href="lista-evento.php" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo dashBoardInfo('rechazado_total'); ?></h3>

                <p>Rechazados Por Ambas Partes</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-times"></i>
              </div>
              <a href="lista-evento.php" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </section>

      

      

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
    include_once('templates/footer.php');
  ?>

