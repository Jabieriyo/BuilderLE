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
           <?= Html::img('@web/images/mapamundi.jpg', ['alt' => 'Slider2', 'class' => 'd-block w-100']) ?>
        </div>
        <div class="carousel-item">
            <?= Html::img('@web/images/gameplay1.jpg', ['alt' => 'Evento Santander 21', 'class' => 'd-block w-100']) ?>
        </div>
        <div class="carousel-item">
            <?= Html::img('@web/images/gameplay2.jpg', ['alt' => 'Evento Santander 21', 'class' => 'd-block w-100']) ?>
        </div>
        <div class="carousel-item">
            <?= Html::img('@web/images/gameplay3.jpg', ['alt' => 'Evento Santander 21', 'class' => 'd-block w-100']) ?>
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

<!-- Div "Introducción" -->
<div class="titulo-container">
    <h1 class="titulo">Crea y comparte tus mejores builds</h1>
</div>

<!-- Div "compartir" -->
<div class="compartir-container">
        <div class="compartir-image-container">
            <?= Html::img('@web/images/compartir.png', ['class' => 'd-block w-50']) ?>
        </div>
        <div class="compartir-text-container">
            <h2>Título del Texto</h2>
            <p>Este es un ejemplo de texto que está a la derecha de la imagen.</p>
        </div>
    </div>

<!-- Div con texto -->
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Bienvenido a Mi Proyecto Yii2</h2>
                    <p class="card-text">Este es un ejemplo de una página de inicio con Yii2, Bootstrap, HTML y CSS.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>