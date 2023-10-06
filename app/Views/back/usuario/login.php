<div class="container mt-5 mb-5 d-flex justify-content-center">
<div class="card bg-dark text-white p-3" style="width:50%;">
  <div class="card-body" media="(max-width:768px)">
    <h5 class="card-title">¡Ingresá!</h5>
    <p class="card-text">

  </div>
  <!-- Mensaje de Error -->
<?php if (session()->getFlashdata('msg')):?>
        <div class="alert alert-danger">
            <?=(session()->getFlashdata('msg'))?>
        </div>
    <?php endif;?>

  <!-- Inicio del formulario de login -->
  <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
     <div class="card-body" media="(max-width:768px)">

      <div class="mb-2">
    <label for="exampleFormControlInput1" class="form-label">Usuario</label>
    <input name="email" type="email" class="form-control" placeholder="">
    <div id="emailHelp" class="form-text" style="color: #C3C3C3;">ejemplo@algo.com</div>
      </div>

      <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
    <input name="pass" type="password" class="form-control" placeholder="">
      </div>

      <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
      </div>


      <input type="submit" value="Ingresar" class="btn btn-success" href="<?php echo base_url('login'); ?>" >
      <a class="btn btn-outline-success" href="<?php echo base_url('principal'); ?>">Cancelar</a>

      <br></br>
      <span style="color: #C3C3C3;">¿Todavía no te registraste? <a class="link-success" href="<?php echo base_url ('/registro');?>">
    Haz click aquí</a></span>
      </div>
  </form>
    </div>
  </div>
