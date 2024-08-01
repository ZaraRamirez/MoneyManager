<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--- Enlazar el archivo CSS de Bootstrap --->
  <link rel="stylesheet" href="<?php echo $pageStyleBoots; ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!--- Enlazar el archivo CSS del header --->
  <link rel="stylesheet" href="<?php echo $pageStyleHeader; ?>"/>
    <!--- Enlazar el archivo CSS del footer --->
    <link rel="stylesheet" href="<?php echo $pageStyleFooter; ?>" />
  <!--- Enlazar el archivo CSS propio --->
  <link rel="stylesheet" href="<?php echo $pageStyles; ?>">
  <!--- Enlazar fuentes --->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Jost:wght@300&display=swap" rel="stylesheet">
  <!--- Icono navegador --->
  <link rel="icon" href="./assets/img/logos/LogoNavegador.png" type="image/x-icon">
  <title>Money Manager</title>
</head>

<body>
  <header>
    <!---------------------------------Inicio navbar--------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?php echo $pageLogo; ?>" alt="Logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/MoneyManager/index.php">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/MoneyManager/views/conocenos.php">CONÓCENOS</a>
            </li>
            <li class="nav-item">
              <form action="http://localhost/MoneyManager/views/login.php">
                <button class="btn btn-secondary btn-sm" href="http://localhost/MoneyManager/views/login.php">
                  INICIAR SESIÓN
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!---------------------------------Inicio fin--------------------------------->
  </header>