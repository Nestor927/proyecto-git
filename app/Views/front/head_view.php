<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo($titulo);?></title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
<!--estilo propio <link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet"> -->

  </head>
  <section class="contain">
  <header style="background-color:#474747;">
  <br></br>
<!--jumbotron-->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4" style="color:#FFFFFF";>¡Aprende a cocinar con nuestros cursos online!</h1>
    <p class="lead" style="color:#FFFFFF";>Fácil, rápido, divertido y desde cualquier parte del mundo.</p>
<!--boton-->
    <p style="text-align:right">
      <a class="btn btn-success" href="<?php echo base_url('/login');?>" role="button"><strong>MI CUENTA</strong></a>
   </p>
  </div>
</div>
<!--fin jumbotron-->
  </header>
</section>

<!--modal
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #C3C3C3;">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">¡Ingresá!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: #DBDBDB;">
         formulario
          <form>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Usuario</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">ejemplo@algo.com</div>
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
              </div>
              <div class="form-text">¿Todavía no te registraste?<a class="link-success" href="registrarse"> Haz click aquí</a></div>
          </form>
        fin formulario
      </div>
      <div class="modal-footer" style="background-color: #C3C3C3;">
           <p><button type="submit" class="btn btn-success">Ingresar</button>
           <a href="principal" class="btn btn-outline-success">Cancelar</a></p>
      </div>
    </div>
  </div>
</div>
fin modal-->

  <body style="background-color:#474747;">