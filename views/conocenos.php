<?php
  // Asigna los archivos CSS 
  $pageLogo = '../assets/img/logos/LogoIndex.png';
  $pageStyleBoots = '../assets/css/bootstrap/bootstrap.min.css';
  $pageStyleHeader = '../assets/css/header.css';
  $pageStyleFooter = '../assets/css/footer.css';
  $pageStyles = '../assets/css/conocenos.css';

  include 'layout/header.php'; 
?>

<br/>
<br/>
<!----------------------------------------------------- Cards ------------------------------------------------>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card mb-3">
                <img style="width: 100%; height: auto" src="../assets/img/conocenos/Mision.jpg" class="card-img-top"
                    alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Mision</h5>
                    <p class="card-text">
                        Nuestra misión es capacitar y empoderar a las personas para que
                        tomen el control de sus finanzas personales y tomen decisiones
                        financieras informadas y responsables. Proporcionamos recursos y
                        herramientas educativas de alta calidad que abordan una variedad de
                        temas financieros, desde la planificación del presupuesto hasta la
                        inversión inteligente y la gestión de deudas. Nuestro objetivo es
                        ayudar a las personas a desarrollar habilidades financieras sólidas
                        y lograr la estabilidad financiera a lo largo de sus vidas.
                    </p>
                </div>
            </div>
            <br />
            <br />
            <div class="card">
                <img style="width: 100%; height: auto" src="../assets/img/conocenos/Vision.jpg" class="card-img-top"
                    alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Vision</h5>
                    <p class="card-text">
                        Nuestra visión es crear una sociedad en la que todas las personas
                        tengan acceso a la educación financiera y estén equipadas con los
                        conocimientos necesarios para tomar decisiones financieras
                        inteligentes. Queremos ser la principal fuente de información y
                        orientación financiera, brindando contenido relevante y actualizado
                        que inspire a las personas a mejorar su bienestar financiero.
                        Aspiramos a ser un catalizador para el cambio positivo en las vidas
                        de las personas, fomentando la confianza en la gestión de sus
                        recursos y el logro de sus metas financieras a corto y largo plazo.
                    </p>
                </div>
            </div>
            <br />
        </div>
        <div class="col-2"></div>
    </div>
    <br/>
    <!--------------------------------------------------- Formulario ---------------------------------------------->
    <div class="row">
        <div class="col-12 text-center" style="color: #f4f4f4">
          <h2>Contáctanos</h2>
        </div> 
        <br>
        <div class="col-1"></div>
        <div class="col-10">
            <div class="row">
            <?php
                include '../controllers/contactosController.php';

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
                <!--------------------------------------------------- Columna formulario ---------------------------------------------->
                <div class="col-6">                
                    <form id="formularioContacto" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label" style="color: #f4f4f4">Nombre</label>
                            <input type="text" class="form-control" name="nombre" aria-describedby="emailHelp"/>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label" style="color: #f4f4f4">Correo
                                electrónico</label>
                            <input type="text" class="form-control" name="correo"
                                placeholder="nombre@ejemplo.com" />
                        </div>

                        <div class="mb-3">
                            <label for="mensaje" class="form-label" style="color: #f4f4f4">Dejanos aqui tu
                                mensaje</label>
                            <textarea class="form-control" name="mensaje" rows="4"></textarea>
                        </div>

                        <button type="submit" Name= "btnEnviarContacto" class="btn btn-outline-light" value="EnviarContacto">Enviar</button>
                    </form>
                </div>
                <!--------------------------------------------------- Columna botones de contacto ---------------------------------------------->
                <div class="col-6 text-center">
                    <div class="col-mb-3 text-center" style="color: #f4f4f4">
                        <!-- Contenido centrado vertical y horizontalmente -->
                        <h6>
                            Utiliza las siguientes vias de contacto o rellena el formulario
                        </h6>
                    </div>

                    <div class="mb-2">
                        <a class="btn btn-primary" style="background-color: #ac2bac; width: 50%" href="#!"
                            role="button">
                            <i class="fab fa-instagram me-2"></i>Instagram</a>
                    </div>

                    <div class="mb-2">
                        <a class="btn btn-primary" style="background-color: #3b5998; width: 50%" href="#!"
                            role="button">
                            <i class="fab fa-facebook me-2"></i>Facebook</a>
                    </div>

                    <div class="mb-2">
                        <a class="btn btn-primary" style="background-color: #55acee; width: 50%" href="#!"
                            role="button">
                            <i class="fab fa-twitter me-2"></i>Twitter</a>
                    </div>

                    <div class="mb-2">
                        <a class="btn btn-primary" style="background-color: #dd4b39; width: 50%" href="#!"
                            role="button">
                            <i class="fab fa-google me-2"></i>Gmail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<br/>
<br/>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>