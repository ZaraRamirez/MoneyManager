<?php
  // Asigna los archivos CSS 
  $pageLogo = '../../assets/img/logos/LogoIndex.png';
  $pageStyleBoots = '../../assets/css/bootstrap/bootstrap.min.css';
  $pageStyleHeader = '../../assets/css/headerUser.css';
  $pageStyleFooter = '../../assets/css/footer.css';
  $pageStyles = '../../assets/css/egresos.css';

  include '../layout/headerUser.php'; 
?>

<!--------------------------------------------------------FORMULARIO------------------------------------------------------->
<br/>

    <h1 class="text-center">REGISTRO DE GASTOS</h1>
    <div class="row">
      <div class="col-1">
      </div>
      <div class="col-10">
      <?php
        include '../../controllers/egresosController.php';

        if ($alert === "success") {
        ?>
          <div class="alert alert-success" role="alert">
            El egreso ha sido guardado
          </div>
        <?php
        } elseif ($alert === "danger") {
        ?>
          <div class="alert alert-danger" role="alert">
            El egreso no ha sido guardado
          </div>
        <?php
        } elseif ($alert === "warning") {
          ?>
            <div class="alert alert-warning" role="alert">
              Complete todos los campos
            </div>
          <?php
        } else {
          ?>
            <div class="alert alert-light" role="alert">
             Bienvenido
            </div>
          <?php
        }
      ?>
      <form id="formularioEgresos" method="post">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="concepto">Concepto:</label>
                <input type="text" class="form-control" name="concepto" placeholder="Ejemplo: Hamburguesa" >
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="number" class="form-control" name="monto" placeholder="Ejemplo: $0" >
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha">
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="categoria">Categoría:</label>
                <select class="form-control" name="categoria">
                    <option selected>Seleccionar</option>
                    <option value="1">Alimentación</option>
                    <option value="2">Transporte</option>
                    <option value="3">Entretenimiento</option>
                    <option value="4">Otros</option>
                </select>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
              <button type="submit" class="btn btn-outline-dark" name="btnEnviarEgreso" value="EnviarEgreso">
                Registrar Egreso
              </button>
            </div>
            <div class="col-md-4">
            </div>
          </div>
        </div>
      </form>
      </div>
      <div class="col-1">
      </div>
    </div>

<br/>
<br/>

<?php include '../layout/footer.php'; ?>