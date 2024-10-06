<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crónicas de exploración </title>
    <link href="include/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="include/img//vectores.jpeg">
</head>
<body>
    <header class="p-3 text-white" style="background-color: #0000CD;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a class="navbar-brand" href="index.php">
                    <img src="include/img/vectores.jpeg" alt="Crónicas de exploración de Exoplanetas" style="width: 40px;" class="rounded">
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link px-2 text-white">Vectores</a></li>
                    
                </ul>
            </div>
        </div>
    </header>

<h1 class="p-3 text-white" style="background-color: #0000CD; text-align:center;">
        Crónicas de exploración de Exoplanetas</h1>


    <section class="container text-center py-2">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <!-- Botones del Carrusel -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <!-- Diapositivas del carrusel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="include/img/carrusel.jpeg" class="d-block w-100" alt="Crónicas de exploración de Exoplanetas">
                    <div class="carousel-caption d-none d-md-block ">
                       
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="include/img/carrusel.jpeg" class="d-block w-100" alt="Crónicas de exploración de Exoplanetas">
                    <div class="carousel-caption d-none d-md-block">
                        
                        
                    </div>
                </div>
            </div>
            <!-- Íconos de control de izquierda y derecha -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- Sección de descripción -->
    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Crónicas de exploración de Exoplanetas</h2>
                <p>
                    Bienvenidos a Crónicas de exploración de Exoplanetas, un proyecto innovador diseñado para promover la creación y el intercambio de conocimientos en el fascinante campo de la astronomía. El objetivo principal de este proyecto es mejorar la comprensión científica y la curiosidad de los estudiantes de educación Basica a conocer más sobre el universo .
                </p>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h3>¿Qué son los Exoplanetas?</h3>
                <p>
                    Todos los planetas de nuestro sistema solar orbitan alrededor del Sol. Los planetas que orbitan alrededor de otras estrellas se llaman exoplanetas.
                </p>

                <img src="include/img/exoplanet.jpeg" class="rounded-circle" style="width: 50%;">
            </div>
        </div>
    </section>
    <section class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Tipos de exoplanetas</h2>
                <ul>
                    <li>
                        Los planetas neptunianos

                    <img src="include/img/neptunianos.jpeg" class="rounded-circle" style="width: 40%;">
                    <p>
                            Son planetas similares a Saturno, Neptuno y Urano. Están dominados por una gran atmósfera de hidrógeno, helio y otros átomos
                        </p>

                    </li>
                    <br>
                    <li>
                        Los planetas gaciosos
                        <img src="include/img/saturno.jpeg" class="rounded-circle" style="width: 40%;">
                         <p>
                            Están hechos casi en su totalidad de gas. Júpiter, Saturno, Urano y Neptuno
                        </p>

                    </li>
                     <br>
                    <li>
                        Las supertierras
                        <img src="include/img/super.jpeg" class="rounded-circle" style="width: 40%;">
                        <p>
                                Se refiere al tamaño del planeta, que es mayor que la Tierra pero menor que Neptuno. 
                            </p>    

                    </li>
                     <br>
                     <li>
                        Los planetas terrestres
                         <img src="include/img/terrestres.jpeg" class="rounded-circle" style="width: 40%;">
                        <p>
                            planetas telúricos según la definición dinámica: Mercurio, Venus, Tierra y Marte. 
                        </p>    
                    </li>
                </ul>

               
            </div>
        </div>
    </section>


    








    <!-- Scripts necesarios para el carrusel -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <br>



<section class="container my-5">

    <?php
  include('tarjetas.php');?>
</section>


<section class="container my-5">
    <h3>Conocer más</h3>
        <div class="container-fluid pt-2">
        <div class="row">
            <div class="col">
                <a href="juegos.php" class="btn btn-primary">Juegos</a>
                <hr>
                <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="include/img/MONOPOLI.jpeg" class="card-img-top" style="width: 100%;">
                        <div class="card-body">
                            <p class="card-text">
                                 <a  class="btn btn-success">Recompensa </a>
                                
                            </p>

                            <div class="text-center">
                                <div class="btn-group">
                                    <div>
                                        <p>
                                             <h4>Monopoly de exoplanetas </h4>
                                        </p>



                                    </div>
                                
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




              
                <div class="col">
                    <h3> Sobre Nosotros</h3>
                    <div class="container-fluid pt-2">
                        <p>
                            Somos estudiantes de la Universidad Tecnológica de Corregidora(UTC).
                            Cursando las carreras de Tecnológias de la Información y Mecatronica.
                        </p>
                    </div>
                </div>
         </div>
</section>




  <hr>
    <!-- Inclusión del archivo PHP al final -->
    <?php include('pie.php'); ?>











</body>
</html>