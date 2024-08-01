<?php
  // Asigna los archivos CSS 
  $pageLogo = './assets/img/logos/LogoIndex.png';
  $pageStyleBoots = './assets/css/bootstrap/bootstrap.min.css';
  $pageStyleHeader = './assets/css/header.css';
  $pageStyleFooter = './assets/css/footer.css';
  $pageStyles = './assets/css/index.css';

  include './views/layout/header.php'; 
?>

  <br />
  <div class="row">
    <br />
    <div class="col-sm-12 col-md-6 col-lg-6 Centrar-texto">
      <div class="text-content">
        <h1>MEJORA HOY LA GESTIÓN</h1>
        <h1>DE TUS FINANZAS</h1>
        <br />
        <h6>
          "Embárcate en el viaje hacia tu libertad financiera: donde los
          sueños se convierten en metas y cada elección es un paso hacia un
          futuro próspero."
        </h6>
        <br />
        <div class="input-group text-center">
          <div class="form-group col-sm-12 col-md-6 col-lg-6">
            <form action="./views/conocenos.php">
              <button class="btn btn-dark btn-lg btn-block" type="submit">
                Más información
              </button>
            </form>
          </div>
          <div class="form-group col-sm-12 col-md-6 col-lg-6">
            <form action="./views/registro.php">
              <button class="btn btn-Unete btn-lg btn-block" type="submit">
                Únete ahora
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12 col-md-6 col-lg-6 text-center">
      <br />
      <img src="./assets/img/index/Inicio.png" class="mx-auto" />
    </div>
  </div>

<?php include './views/layout/footer.php'; ?>