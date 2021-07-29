<?php 
  session_start();
  if(isset($_GET['cerrar_sesion'])){
  $cerrar_sesion = $_GET['cerrar_sesion'];
  if($cerrar_sesion){
      session_destroy();
  }
}
  include_once('funciones/funciones.php');

  include_once('templates/header.php');

?>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>XV Karen</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Registrar admins</p>

    <form role="form" name="login-admin-form" id="login-admin" method="post" action="modelo-admin.php">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario">
        <span class="form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
        <span class="form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
            <input type="hidden" name="registro" value="nuevo">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>

<script>
  // window.onload = function() {
  //   alert("USER: demo\r\nPASSWORD: demo");
  // };
</script>

<?php 
    include_once('templates/footer.php');
?>
