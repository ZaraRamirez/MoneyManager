<?php
  // Asigna los archivos CSS 
  $pageLogo = '../../assets/img/logos/LogoIndex.png';
  $pageStyleBoots = '../../assets/css/bootstrap/bootstrap.min.css';
  $pageStyleHeader = '../../assets/css/header.css';
  $pageStyleFooter = '../../assets/css/footer.css';
  $pageStyles = '../../assets/css/inicio.css';

  include '../layout/headerUser.php'; 
?>

  <br />
  <div class="row">
    <br />
    <div class="col-12 text-center">
      <div class="text-content">
        <h1>¡Bienvenido!</h1>
        <br />
        <h6>
          "Tu camino hacia la libertad financiera comienza aquí"
        </h6>
        <br />
        <div class="Logo text-center">
          <img src="../../assets/img/login/LogoLogin.png" class="mx-auto" />
        </div>
      </div>
    </div>
  </div>

<?php include '../layout/footer.php'; ?>