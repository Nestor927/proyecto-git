<br></br>
<section class="container">
<!--tarjeta-->
  <div class="card text-bg-dark w-100 mb-3">
    <div class="card-body">
    <h5 class="card-title">¡Sumate a esta comunidad!</h5>
    <p class="card-text">

<!--validaciones-->
<?php $validation = \Config\Services::validation(); ?>

<form method="post" action="<?php echo base_url('/enviar-form') ?>">
    <?=csrf_field();?>
    <?=csrf_field();?>
    <?php if(!empty (session()->getFlashdata('fail'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
    <?php endif?>
    <?php if(!empty (session()->getFlashdata('success'))):?>
    <div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
    <?php endif?>

<!--formulario-->
<div class="row g-3">
  <div class="col">
    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control" placeholder="">

<!--error-->
  <?php if($validation->getError('nombre')) {?>
  <div class="alert alert-danger mt-2">
      <?= $error = $validation->getError('nombre'); ?></div>
  <?php }?>

  </div>

  <div class="col">
    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
    <input name="apellido" type="text" class="form-control" placeholder="">

<!--error-->
  <?php if($validation->getError('apellido')) {?>
  <div class="alert alert-danger mt-2">
      <?= $error = $validation->getError('apellido'); ?></div>
  <?php }?>

  </div>
</div>
<p></p>
<div class="row g-3">
   <div class="col">
    <label for="exampleFormControlInput1" class="form-label">Usuario</label>
    <input name="usuario" type="text" class="form-control" placeholder="">

<!--error-->
  <?php if($validation->getError('usuario')) {?>
  <div class="alert alert-danger mt-2">
      <?= $error = $validation->getError('usuario'); ?></div>
  <?php }?>

  </div>


  <div class="col">
  <label for="exampleFormControlInput1" class="form-label">E-mail</label>
  <input name="email" type="email" class="form-control" placeholder="nombre@ejemplo.com">

<!--error-->
  <?php if($validation->getError('email')) {?>
  <div class="alert alert-danger mt-2">
      <?= $error = $validation->getError('email'); ?></div>
  <?php }?>

</div>
<div class="col">
  <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
  <input name="pass" type="password" class="form-control" placeholder="">
  <div id="passwordHelpBlock" class="form-text" style="color: #C3C3C3">
  Debe contener entre 8 y 20 caracteres.

<!--error-->
  <?php if($validation->getError('pass')) {?>
  <div class="alert alert-danger mt-2">
      <?= $error = $validation->getError('pass'); ?></div>
  <?php }?>

</div>
</div>
<div class="form-floating"></div></p>
<!--fin formulario-->

<div class="mb-3">
<!--chek
  <label for="floatingInputDisabled">¿Que te interesa?</label>
  <p><div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
    <label class="form-check-label" for="inlineCheckbox1">Platos principales</label>
  </div></p>
  <p><div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
    <label class="form-check-label" for="inlineCheckbox2">Postres</label>
  </div></p>
  <p><div class="form-check form-check-inline">
   <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
   <label class="form-check-label" for="inlineCheckbox2">Panificados</label>
  </div></p>
  <p><div class="form-check form-switch">
   <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
   <label class="form-check-label" for="flexSwitchCheckChecked">Recibir las novedades por mail</label>
  </div></p>
fin check-->
    <input type="submit" class="btn btn-success" value="Registrarme">
    <a href="<?php echo base_url('/principal'); ?>" class="btn btn-outline-success">Cancelar</a>
</div>
</div>
<!--fin tarjeta-->
</form>
</section>
<br></br>