<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- Enlazar el archivo CSS de Bootstrap --->
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--- Enlazar el archivo CSS del login --->
    <link rel="stylesheet" href="../assets/css/login.css"/>
        <!--- Enlazar el archivo CSS del footer --->
        <link rel="stylesheet" href="../assets/css/footer.css"/>
    <!--- Enlazar fuentes --->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;1,800&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@700&family=Jost:ital,wght@0,300;1,800&display=swap"
        rel="stylesheet" />
    <!--- Icono navegador --->
    <link rel="icon" href="../assets/img/logos/LogoNavegador.png" type="image/x-icon">
    <title>Money Manager - Inicia sesión</title>

</head>

<body>
    <div class="row justify-content-center vh-100 w-100">

        <div id="ladoizquierdo" class="col-6">
            <!--Lado izquierdo de la página-->
            <div class="center-logo">
                <a href="../index.php"><img src="../assets/img/login/LogoLogin.png" width="280"></a>>
            </div>
        </div>

        <div id="ladoderecho" class="col-6">
            <!--Lado derecho de la página-->
            <nav class="center-login">
            <h3 class="text-iniciarsesion">INICIAR SESIÓN</h3>
            <br>
            <?php
            include '../models/conexion.php';
            include '../controllers/loginController.php';
            ?>

            <form method="post" action="">
                <div class="form-group">
                    <label for="email"></label>
                    <div class="col-12">
                        <input type="email" class="form-control" id="inputAddress" name="email" placeholder="Escribe tu e-mail" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <div class="col-12">
                        <input type="password" class="form-control" id="inputAddress" name="password" placeholder="Escribe tu contraseña" >
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-5 d-flex justify-content-end">
                        <input name="btningresar" class="btn btn-dark" type="submit" value="Ingresar">
                    </div>
                    <div class="col-7 d-flex justify-content-start">
                        <a href="./registro.php" class="btn btn btn-outline-light">Aún no tengo cuenta</a>
                    </div>
                </div>
                <br>
            </form>
            </nav>
        </div> <!--col-->
    </div> <!--row-->

<?php include './layout/footer.php'; ?>