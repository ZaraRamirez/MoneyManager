<?php
// Asigna los archivos CSS 
include '../controllers/registroController.php';
$pageLogo = '../assets/img/logos/LogoIndex.png';
$pageStyleBoots = '../assets/css/bootstrap/bootstrap.min.css';
$pageStyleHeader = '../assets/css/headerRegistro.css';
$pageStyleFooter = '../assets/css/footer.css';
$pageStyles = '../assets/css/registro.css';

include 'layout/header.php';

?>

<br />
<div class="text-content">
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 8vh;">
    <h1 class="text-center">Regístrate</h1>
  </div>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 5vh;">
    <h5 class="text-center">Comienza a ser hoy el director de tu propia obra financiera</h5>
  </div>
</div>
<form class="row justify-content-center g-3" method="POST">
  <div class="row justify-content-center g-2">
    <div class="col-6">
      <input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre" required>
    </div>
  </div>
  <div class="row justify-content-center g-2">
    <div class="col-6">
      <input type="email" class="form-control" name="email" placeholder="Escribe tu email" required>
    </div>
  </div>
  <div class="row justify-content-center g-2">
    <div class="col-6">
      <input type="password" class="form-control" name="password" placeholder="Escribe tu contraseña" required>
    </div>
  </div>
  <div class="row justify-content-center g-2">
    <div class="col-6">
      <input type="password" class="form-control" name="passwordConfirm" placeholder="Confirma tu contraseña" required>
    </div>
  </div>
  <div class="row justify-content-center g-2">
    <div class="col-6">
      <input type="number" class="form-control" name="telefono" placeholder="Escribe tu teléfono" required>
    </div>
  </div>

  <div class="row justify-content-center g-2">
    <div class="col-6">
      <?php
      if (!empty($alert)) {
        echo '<div class="alert alert-' . $alert . ' alert-dismissible fade show" role="alert">
                <strong>';
        // Agrega el mensaje de error específico si existe
        if ($alert === "success") {
          echo '¡Guardado Exitoso!';
        } elseif ($alert === "danger") {
          echo '¡error al insertar!';
        } elseif ($alert === "warning") {
          echo 'Las contraseñas no coinden';
        } elseif ($alert === 'errorPass') {
          echo 'Las contraseñas no coinden';
        }
        echo '</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      }
      $alert = "";
      ?>
    </div>
  </div>


  <div class="row justify-content-center g-2">
    <div class="col-3 d-flex justify-content-end">
      <button name="btnComenzar" type="submit" class="btn btn-dark" value="Comenzar">Comenzar</button>
    </div>
    <div class="col-3 d-flex justify-content-start">
      <a href="login.php" class="btn btn btn-outline-light">Ya tengo cuenta</a>
    </div>
  </div>
</form>




<br>
<br>
<br>

<?php include './layout/footer.php'; ?>
