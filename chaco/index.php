<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIS145</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

<style>
    .card {
    margin: 2%;
    border: 0;
    border-radius: 0;
    color: #fff;
    box-shadow: 5px 5px 10px #e1e1e1;
    padding: 3em 0;
    border-bottom-right-radius: 4em;
    border-top-left-radius: 4em;
    background: linear-gradient(to left, teal 50%, #26282b 50%);
    background-size: 200%;
    background-position: right;
    transition: background-position 0.5s ease-out;
  }
  .card-icon {
    margin: 0 1em;
  }
  .card-icon i{
    font-size: 3em;
  }
  .card:hover {
    background-position: left;
  }
  .cards{
    display: flex;
    
  }
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block" id="templatemo_nav_top" style="background-color: #ffffff">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <a class="navbar-sm-brand text-decoration-none" href="https://usfx.bo/#gsc.tab=0" style="color: green;">Página Principal USFX</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow bg-dark" >
        <div class="container d-flex  align-items-center" >

            <a class="navbar-brand logo h1 align-self-center" href="index.php" style=" color: #ffffff ;">
                USFX
            </a>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill" >
                    <ul class="nav  d-flex justify-content-between " style="max-width: 200px; margin-left: 700px; ">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" style="color: green;font-weight: bold;font-size: 20px;">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#materias" style="color: green; font-weight: bold;">Carreras</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search" style="color: green;"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner" style=" background-image: url('./assets/img/defensoreschacoOP.jpg');  background-size: cover;background-position: center;">
            <div class="carousel-item active" >
                <div class="container">
                    <div class="row p-5" >
                        <div class=" col-md-8 col-lg-6 order-lg-last" >
                            <img class="img-fluid" src="./assets/img/Escudo.png" alt=""style=" margin-left: 200px;">
                        </div>

                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 style="color: white; font-size: 50px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">FACULTAD INTEGRAL DEFENSORES DE CHACO</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Bienvenido</h1>
            </div>
        </div>
        <div class="row" style="display: flex; justify-content: center;">
           
            <div class="col-12 p-5 mt-3" style="width:70%">
                
                <img src="./assets/img/imacha.jpg" class=" img-fluid border">
                <h2 class="h5 text-center mt-3 mb-3">En nuestra facultad, nos enorgullece ofrecer una educación de calidad que promueve la excelencia académica, la investigación innovadora y el compromiso con la comunidad. Nuestro enfoque integral abarca diversas áreas del conocimiento, brindando a nuestros estudiantes la oportunidad de explorar y desarrollar sus talentos en un entorno de apoyo y colaboración.</h2>
           
            </div>
           
        </div>
    </section>
    <!-- End Categories of The Month -->

    <section class="container py-5">
    <div class="row text-center py-3">
        <div style="width:35%">
            <div>
                <div class="titulo-verde" style="background-color: green; padding: 10px; border-radius: 5px;">
                    <h2 class="h2">AGENDA Y EVENTOS</h2>
                </div>
            </div>
            <div class="noticia">
                <h4>Título de la noticia 1</h4>
            </div>
        </div>
        <div style="width:35%; margin-left:320px" >
            <div>
                <div class="titulo-verde" style="background-color: green; padding: 10px; border-radius: 5px;">
                    <h2 class="h2">PUBLICACIONES</h2>
                </div>
            </div>
            <div class="noticia">
            <a href="http://sij.usfx.bo/elibro/inicio.jsp?cu=null&amp;ca=EC&amp;idLibro=null" target="_blank">
                <img src="https://defensores.usfx.bo/wp-content/uploads/2016/09/acceso.jpg" alt=",,,"  style="width:75%"></a>
            </div>
        </div>
    </div>
</section>

    <!-- Start Featured Product -->
    <section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 id="materias" class="h1">Carreras</h1>
            </div>
        </div>
        <div class="row">
            <?php
            include 'conexion.php';
            $baseDatos = new BaseDatos();
            $sql = "SELECT * FROM carreras";
            $resultados = $baseDatos->consulta($sql);

            foreach ($resultados as $fila) {
                ?>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="carrera.php?id=<?php echo $fila['id'];?>"> 
                            <img src="./assets/img/<?php echo $fila['imagen']; ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="carrera.php?id=<?php echo $fila['id'];?>" class="h2 text-decoration-none" style="color: white;"><?php echo $fila['nombre']; ?></a>
                            <p class="card-text"><?php echo $fila['descripcion']; ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            $baseDatos->cerrarConexion();
            ?>
        </div>
    </div>
</section>
<!-- End Featured Product -->
    

<div style="display: flex; justify-content: space-between;">

    <!-- Primer bloque: ENLACES -->
    <div style="width: 48%; margin-left: 70px;">
        <div style="margin-bottom: 20px;">
            <h2 style="color: #333; font-size: 24px; font-weight: bold;">ENLACES</h2>
        </div>
        <div style="display: flex; justify-content: space-between;">
        <div style="margin-bottom: 20px;">
            <p style="margin-bottom: 10px;"><a href="https://usfx.bo/CalendarioAcademico.html" target="_blank" rel="noopener" style="color: #007bff; text-decoration: none;">► Cronograma Académico 2019</a></p>
            <p style="margin-bottom: 10px;"><a href="http://www.usfx.bo/tramites/" target="_blank" rel="noopener" style="color: #007bff; text-decoration: none;">► Trámites</a></p>
            <p style="margin-bottom: 10px;"><a href="http://ecampus.usfx.bo/login/index.php" target="_blank" rel="noopener" style="color: #007bff; text-decoration: none;">► E-campus</a></p>
            <p style="margin-bottom: 10px;"><a href="http://201.131.45.4/declaracionjurada/index.php?tipo=hojavida" target="_blank" rel="noopener" style="color: #007bff; text-decoration: none;">► Examen de Competencia</a></p>
            <p style="margin-bottom: 10px;"><a href="http://declaracionjurada.usfx.bo" target="_blank" rel="noopener" style="color: #007bff; text-decoration: none;">► Declaración Jurada</a></p>
        </div>
        <div style="margin-bottom: 20px;">
            <p style="margin-bottom: 10px;"><a href="http://www.usfx.bo/posgrado/maestrias-escolarizadas/" target="_blank" rel="noopener" style="color: #007bff; text-decoration: none;">► Maestrías Escolarizadas</a></p>
            <p style="margin-bottom: 10px;"><a href="http://si.usfx.bo/biblioteca/" target="_blank" rel="noopener" style="color: #007bff; text-decoration: none;">► Biblioteca</a></p>
            <p style="margin-bottom: 10px;"><a href="http://pscu.usfx.bo" target="_blank" rel="noopener" style="color: #007bff; text-decoration: none;">► PSCU</a></p>
        </div>
        </div>
    </div>

    <!-- Segundo bloque: NUESTROS SITIOS -->
    <div style="width: 48%; margin-left: 70px;">
        <div style="margin-bottom: 20px;">
            <h2 style="color: #333; font-size: 24px; font-weight: bold;">NUESTROS SITIOS</h2>
        </div>
        
        <div>
            <h4 style="color: #699841; font-size: 18px; font-weight: bold;"><a href="http://herbariobol.usfx.bo/" target="_blank" rel="noopener" style="color: #699841; text-decoration: none;">► Herbario del Sur de Bolivia</a></h4>
            <h4 style="color: #699841; font-size: 18px; font-weight: bold;"><a href="http://blogdocente.usfx.bo/" target="_blank" rel="noopener" style="color: #699841; text-decoration: none;">► Blog Docente</a></h4>
            <h4 style="color: #699841; font-size: 18px; font-weight: bold;"><a href="http://huniversitario.usfx.bo/" target="_blank" rel="noopener" style="color: #699841; text-decoration: none;">► Hospital Universitario</a></h4>
            <h4 style="color: #699841; font-size: 18px; font-weight: bold;"><a href="http://revistaexpresion.usfx.bo/" target="_blank" rel="noopener" style="color: #699841; text-decoration: none;">► Revista Expresión</a></h4>
            <h4 style="color: #699841; font-size: 18px; font-weight: bold;"><a href="http://ecampus.usfx.bo/login/index.php" target="_blank" rel="noopener" style="color: #699841; text-decoration: none;">► Ecampus</a></h4>
        </div>
    </div>
</div>

    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">USFX</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Villa Vaca Guzmán (Muyupampa) Luis Calvo
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">Telf./Fax. (591)(4) 6479222</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">Web: https://defensores.usfx.bo/</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
</body>

</html>