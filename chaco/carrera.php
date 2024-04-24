<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <style>
        .outlined-text {
            font-weight: bold;
            color: white;
            -webkit-text-stroke: 1px black; 
            text-stroke: 1px black; 
        }
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
<?php
$id_carrera = $_GET['id'];
include 'conexion.php';
$baseDatos = new BaseDatos();

$sql = "SELECT nombre FROM carreras WHERE id = $id_carrera";
$resultado = $baseDatos->consulta($sql);
    ?>
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="active">
                <div class="container">
                    <div class="row p-5">
                        <div class=" mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 style="color: white; font-size: 50px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                                    <?php foreach ($resultado as $row) {
                                    echo $row["nombre"];}?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->
    <?php

?>


<?php 
$sql = "SELECT descripcion FROM carreras WHERE id = $id_carrera";
$resultado_d = $baseDatos->consulta($sql);
?>
<section class="bg-light">
    <div class="col-lg-6 m-auto" style="text-align: center;">
        <h1 class="h1">BIENVENIDO</h1>
    </div>
    <div style="text-align: center; max-width: 600px; width: 100%; margin: 0 auto;">
        <span ><?php foreach ($resultado_d as $row) {echo $row["descripcion"];}?></span>
    </div>
</section>


<section class="container py-5">
    <div>
        <h2>OBJETIVOS:</h2>
    </div>
    <div>
        <h6>
            jdsfidjsnfjosdnfjkasb
        </h6>
    </div>
    <div>
        <h2>PERFIL PROFESIONAL:</h2>
    </div>
    <div>
        <table class="table">
            <tbody>
                <tr>
                    <th>Título en Provisión Nacional</th>
                    <td>Ingeniero Zootecnista</td>
                </tr>
                <tr>
                    <th>Duración</th>
                    <td>4 Años</td>
                </tr>
                <tr>
                    <th>Modalidad de Admisión</th>
                    <td>Ingreso Libre</td>
                </tr>
                <tr>
                    <th>Modalidad de Titulación</th>
                    <td>
                        <ul>
                            <li>Excelencia Académica</li>
                            <li>Examen de grado</li>
                            <li>Tesis de grado</li>
                            <li>Proyecto de grado</li>
                            <li>Internado</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="container py-5">
    <h2>Materias</h2>
    <div class="d-flex flex-wrap justify-content-start"> 
        <?php

        $sql = "SELECT * FROM materias";
        $resultados = $baseDatos->consulta($sql);

        foreach ($resultados as $fila) {
        ?>
        <div class="card m-2" style="width: 10rem;">
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
</section>



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

</body>
</html>