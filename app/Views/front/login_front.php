<section class="container">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!--tarjeta-->
<div class="card bg-dark text-white p-3" style="margin: 10%;">
  <div class="card-body" media="(max-width:768px)">
    <h5 class="card-title">¡Ingresá!</h5>
    <p class="card-text">
<!--formulario-->
          <form>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Usuario</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text" style="color: #C3C3C3;">ejemplo@algo.com</div>
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Recordar usuario</label>
              </div>
              <div class="form-text"  style="color: #C3C3C3;">¿Todavía no te registraste?<a class="link-success" href="registrarse"> Haz click aquí</a></div>
          </form>
<!--fin formulario-->
  </div>

      <div class="modal-footer">
           <p><button type="submit" class="btn btn-success">Ingresar</button>
           <a href="principal" class="btn btn-outline-success">Cancelar</a></p>
           <br></br>
      </div>
</div>
</section>
