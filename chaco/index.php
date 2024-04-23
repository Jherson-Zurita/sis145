<!DOCTYPE html>
<html lang="en">

<head>
    <title>SIS145</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
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
    <!-- Start Top Nav 
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
     Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                USFX
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Carreras</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
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

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-inner" style=" background-image: url('./assets/img/facucha.jpg');  background-size: cover;background-position: center;">
            <div class="carousel-item active" >
                <div class="container">
                    <div class="row p-5">
                        
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 style="color: white; font-size: 50px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">FACULTAD INTEGRAL DEFENSORES DE CHACO</h1>


                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
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
           
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/imacha.jpg" class=" img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">DESTACADOS</h2>
           
            </div>
           
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Carreras</h1>
                    
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
                            <a href="<?php echo $fila['url']; ?>">
                                <img src="./assets/img/<?php echo $fila['imagen']; ?>" class="card-img-top" alt="...">
                            </a>
                            <div class="card-body">
                                <a href="<?php echo $fila['url']; ?>" class="h2 text-decoration-none text-dark"><?php echo $fila['nombre']; ?></a>
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
        </div>
        
    </section>
    <!-- End Featured Product -->
    <h2>Materias</h2>
    <div style="display:row;">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="cards">
            <?php
            
            $baseDatos = new BaseDatos();
            $sql = "SELECT * FROM materias";
            $resultados = $baseDatos->consulta($sql);

            foreach ($resultados as $fila) {
            ?>
            <div class="card" style="width: 15rem;">
                <div class="card-icon"><i class="bi bi-circle"></i></div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $fila['nombre']; ?></h5>
                    <p class="card-text"><?php echo $fila['sigla']; ?></p>
                </div>
            </div>
            <?php
            }
            $baseDatos->cerrarConexion();
            ?>
        </div>
    </nav>
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

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                
                
            </div>
        </div>

        

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>