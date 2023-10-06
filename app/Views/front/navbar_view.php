<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('id_perfil');
  ?>


<!--barra de navegación-->
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand ma me-auto barra" href="<?php echo base_url('principal')?>">
      <!--logo--> 
      <img src="<?php echo base_url('assets/img/logo.jpg')?>" alt="marca" width="75" height="75" class="img-fluid"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- NAVBAR para logueados como Admin -->

    <?php if(session()->id_perfil == 1): ?>
          <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">ADMIN: <?php echo session('nombre'); ?></a>
          </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inscripciones a cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="platos_principales">Platos principales</a></li>
            <li><a class="dropdown-item" href="postres">Postres</a></li>
            <li><a class="dropdown-item" href="panificados">Panificados<span class="badge text-bg-success">Nuevo</span></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/registro');?>" role="button">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" role="button">Cerrar Sesión</a>
        </li>
      </ul>
    </div>

    <!-- NAVBAR para logueados como Cliente -->

    <?php elseif(session()->id_perfil == 2): ?>
          <div class="btn btn-secondary active btnUser btn-sm">
            <a href="">CLIENTE: <?php echo session('nombre'); ?></a>
          </div>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="offcanvas" href="#presentacion" role="button">¿Quienes somos?</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inscripciones a cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="platos_principales">Platos principales</a></li>
            <li><a class="dropdown-item" href="postres">Postres</a></li>
            <li><a class="dropdown-item" href="panificados">Panificados<span class="badge text-bg-success">Nuevo</span></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" role="button">Cerrar Sesión</a>
        </li>
      </ul>
    <?php else: ?>
      <!-- NAVBAR para NO logueados -->
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="offcanvas" href="#presentacion" role="button">¿Quienes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="offcanvas" href="#acercade" role="button">Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inscripciones a cursos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="platos_principales">Platos principales</a></li>
            <li><a class="dropdown-item" href="postres">Postres</a></li>
            <li><a class="dropdown-item" href="panificados">Panificados<span class="badge text-bg-success">Nuevo</span></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro" role="button">Registrarse</a>
        </li>
      </ul>
       <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    <?php endif; ?>
    </div>
  </div>
</nav>
<!--fin barra de navegación-->

<!--offcanvas nosotros-->        
<div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" tabindex="-1" id="presentacion" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h4 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">NOSOTROS</h4>
    <div data-bs-theme="dark">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
  </div>
  <div class="offcanvas-body">
    <!--tarjeta--> 
    <div class="card text-bg-dark mb-3">
      <img src="assets/img/chef1.jpg" class="card-img" alt="cocinero1">
        <div class="card-img-overlay">
          <h5 class="card-title" style="color:#636363";>Esteban Ricci</h5>
          <br> </br>
          <p class="card-text" style="color:#636363";><strong>Chef profesional recibido en el Mausi Sebess de la ciudad de Buenos Aires con 8 años de experiencia trabajando en distintos restaurantes de Latinoamérica.</strong></p>
       </div>
    </div>
    <div class="card text-bg-dark mb-3">
      <img src="assets/img/chef2.jpg" class="card-img" alt="cocinero2">
        <div class="card-img-overlay">
          <h5 class="card-title" style="color:#636363";>Marta Ferrari</h5>
          <br> </br>
          <p class="card-text" style="color:#636363";><strong>Maestra pastelera recibida en el IGA Instituto Gastronómico Argentina, escritora del famoso libro "La cocina te sana".</strong></p>
       </div>
    </div>
    <div class="card text-bg-dark mb-3">
      <img src="assets/img/chef3.jpg" class="card-img" alt="cocinero3">
        <div class="card-img-overlay">
          <h5 class="card-title" style="color:#636363";>Santiago Conti</h5>
          <br> </br>
          <p class="card-text" style="color:#636363";><strong>Se recibió en la escuela de panaderia Gato Dumas, puso su propio negocio y hoy es dueño de la cadena "Costumbres Argentinas".</strong></p>
       </div>
    </div>
    <!--fin tarjeta--> 
  </div>
</div>
<!--fin de offcanvas nosotros-->  
<!--offcanvas acerca de-->        
<div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" tabindex="-1" id="acercade" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h4 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">COMIDA, FAMILIA & AMIGOS</h4>
    <div data-bs-theme="dark">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
  </div>
  <div class="offcanvas-body">
  <!--tarjeta-->   
    <div class="card text-bg-dark mb-3">
      <img src="assets/img/logo.jpg" class="card-img" alt="logo">
       <div class="card-body">
          <p class="card-text" style="color:#E0E0E0";>Somos The Fast Food y te ofrecemos nuestra experiencia de 5 años formando a cientos de alumnos que hoy cocinan junto a sus familias, amigos o han creado excelentes emprendimientos.</p>
          <p class="card-text" style="color:#E0E0E0";>Formá parte de este movimiento y cumplí el sueño de formarte como pastelero, panadero y cocinero con nuestros cursos en línea.</p>
          <p class="card-text" style="color:#E0E0E0";>Nos caracterizan los cursos cortos y 100% prácticos, sabemos que no queres perder tiempo y que queres poner en práctica lo aprendido desde el primer minuto.</p>
          <h5 class="card-text" style="color:#E0E0E0";>¡Anímate!</h5>
    <!--contacto--> 
          <br></br>
          <br></br>
          <p style="color:#CF854D"><img src="assets/img/tel.jpg" class="rounded float-left" alt="tel" width="30" height="30" class="img-fluid"/> <strong>011-555-3209</strong></p>
          <p style="color:#CF854D"><img src="assets/img/mail.jpg" class="rounded float-left" alt="tel" width="30" height="30" class="img-fluid"/> <strong>contacto@thefastfood.net</strong></p>
          <p style="color:#CF854D"><img src="assets/img/ig.jpg" class="rounded float-left" alt="tel" width="30" height="30" class="img-fluid"/> <strong>@thefastfood_academy</strong></p>
       </div>
    </div>
  <!--fin tarjeta--> 
   </div>
</div>
<!--fin de offcanvas nosotros-->  