<?php
use yii\helpers\Html;
use yii\helpers\Url;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mi Proyecto Yii2</title>

    <!-- Agrega las hojas de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Agrega tu propio archivo CSS si es necesario -->
    <link rel="stylesheet" href="<?= Url::to('@web/css/site.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Incluye los scripts de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Agrega tus propios scripts si es necesario -->
</head>
<body>
<!-- Carrusel de Bootstrap -->
<div id="carouselhome" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
           <?= Html::img('@web/images/inicio.jpg', ['class' => 'd-block w-100']) ?>
        </div>
        <div class="carousel-item">
            <?= Html::img('@web/images/mapamundi.jpg', ['class' => 'd-block w-100']) ?>
        </div>
        <div class="carousel-item">
            <?= Html::img('@web/images/gameplay1.jpg', ['class' => 'd-block w-100']) ?>
        </div>
        <div class="carousel-item">
            <?= Html::img('@web/images/gameplay2.jpg', ['class' => 'd-block w-100']) ?>
        </div>
        <div class="carousel-item">
            <?= Html::img('@web/images/gameplay3.jpg', ['class' => 'd-block w-100']) ?>
        </div>
        <!-- Agrega más elementos según sea necesario -->
    </div>
    <a class="carousel-control-prev" href="#carouselhome" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselhome" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>

<!-- Div "Titulo" -->
<div class="titulo-container">
    <h1 class="titulo">Util herramienta para gestionar tu equipo</h1>
</div>

<!-- Div "crear" -->
<div class="crear-container">
    <div class="crear-text-container">
        <h1 class="titulo-crear">Crea tus builds</h1>
        <p class="texto-crear">Modifica tu equipamiento y mira los resultados de las diferentes combinaciones fácilmente y sin ningún costo.</p>
    </div>
    <div class="crear-image-container">
        <?= Html::img('@web/images/crear.jpg', ['class' => 'd-block w-100']) ?>
    </div>
</div>

<!-- Div "compartir" -->
<div class="compartir-container">
        <div class="compartir-image-container">
            <?= Html::img('@web/images/compartir.png', ['class' => 'd-block w-100']) ?>
        </div>
        <div class="compartir-text-container">
            <h1 class="titulo-compartir">Comparte tus builds</h1>
            <p class="texto-compartir">Comparte tus ideas con miles de jugadores o prueba sus builds en tu partida.</p>
        </div>
    </div>

</body>
</html>