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
    <h1 class="text-center">REGISTRO DE INGRESOS</h1>
    <div class="row">
      <div class="col-1">
      </div>
      <div class="col-10">
      <?php
        include '../../controllers/ingresosController.php';

        if ($alert === "success") {
        ?>
          <div class="alert alert-success" role="alert">
            El ingreso ha sido guardado
          </div>
        <?php
        } elseif ($alert === "danger") {
        ?>
          <div class="alert alert-danger" role="alert">
            El ingreso no ha sido guardado
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
      <form id="formularioEgresos" method="POST">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="concepto">Medio:</label>
                <select class="form-control" name="medio">
                    <option selected>Seleccionar</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Transferencia">Transferencia</option>
                    <option value="Otro">Otro</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="number" class="form-control" name="monto" placeholder="Ejemplo: $0">
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha">
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
              <label for="categoria">Categoría:</label>
                <select class="form-control" name="categoria">
                  <option selected>Seleccionar</option>
                    <option value="1">Salario</option>
                    <option value="2">Bonificación</option>
                    <option value="3">Regalo</option>
                    <option value="4">Otro</option>
                </select>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
            </div> 
            <div class="col-md-4 col-sm-12 text-center">
              <button type="submit" class="btn btn-outline-dark" name="btnEnviarIngreso" value="EnviarIngreso">
                Registrar Ingreso
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