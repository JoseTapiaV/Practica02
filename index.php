<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Practica 02</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/product/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="CSS/product.css" rel="stylesheet">
  </head>
  <body>
<!-- Botones superiores -->
<header class="site-header sticky-top py-1">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="#"></a>
    <a class="py-2 d-none d-md-inline-block" href="Registrarse/Registro.php">Registrarse</a>
    <a class="py-2 d-none d-md-inline-block" href="SignIn/SigIn.php">Iniciar Sesión</a>
  </nav>
</header>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Tu catálogo de restaurantes</h1>
      <p class="lead fw-normal">En esta página se te mostrará un catálogo. de varios productos que pueden ofreceer los restaurantes.</p>
      <p class="lead fw-normal">Incluso, si deseas puedes registrarte así seas un cliente o dueño de un restaurante!!!</p>
      <a class="btn btn-outline-secondary" href="Registrarse/Registro.php">Regístrate</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <!-- Espacio para el primer restaurante -->
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>

    <!-- Espacio para el segundo restaurante -->
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Another headline</h2>
        <p class="lead">And an even wittier subheading.</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
    </div>
  </div>

  <!-- Botón para mostrar el menú completo-->
  <div class=" text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <p >¿No encuentras todo loque buscas? No te preocupes, puedes seguir buscándolo desde nuestra sección de búsqueda. Incluso, si te gusta algo del menú, puedes comprarlo.</p>
      <a class="btn btn-outline-secondary" href="MenuCompra/MenuCompra.php">Búsqueda y Compra</a>
    </div>
  </div>

  <!-- Botón para el CRUD de los productos-->
  <div class=" text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <p >¿Quieres actualizar o manipular tus productos? En el siguiente botón lo encontrarás.</p>
      <a class="btn btn-outline-secondary" href="CRUDProducto/CrearActualizarEliminar.php">Actualizar productos</a>
    </div>
  </div>

  <!-- Botón para el CRUD de la compra -->
  <div class=" text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <p >¿Quieres actualizar o manipular tus compras? En el siguiente botón lo encontrarás.</p>
      <a class="btn btn-outline-secondary" href="CRUDCompra/CRUDCompra.php">Actualizar compra</a>
    </div>
  </div>


<!-- Botones inferiores -->
<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
    </div>
    <div class="col-6 col-md">
      <h5>Features</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Cool stuff</a></li>
        <li><a class="link-secondary" href="#">Random feature</a></li>
        <li><a class="link-secondary" href="#">Team feature</a></li>
        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
        <li><a class="link-secondary" href="#">Another one</a></li>
        <li><a class="link-secondary" href="#">Last time</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Resource name</a></li>
        <li><a class="link-secondary" href="#">Resource</a></li>
        <li><a class="link-secondary" href="#">Another resource</a></li>
        <li><a class="link-secondary" href="#">Final resource</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>Resources</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Business</a></li>
        <li><a class="link-secondary" href="#">Education</a></li>
        <li><a class="link-secondary" href="#">Government</a></li>
        <li><a class="link-secondary" href="#">Gaming</a></li>
      </ul>
    </div>
    <div class="col-6 col-md">
      <h5>About</h5>
      <ul class="list-unstyled text-small">
        <li><a class="link-secondary" href="#">Team</a></li>
        <li><a class="link-secondary" href="#">Locations</a></li>
        <li><a class="link-secondary" href="#">Privacy</a></li>
        <li><a class="link-secondary" href="#">Terms</a></li>
      </ul>
    </div>
  </div>
</footer>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
