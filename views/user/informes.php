<?php
  // Asigna los archivos CSS 
  $pageLogo = '../../assets/img/logos/LogoIndex.png';
  $pageStyleBoots = '../../assets/css/bootstrap/bootstrap.min.css';
  $pageStyleHeader = '../../assets/css/headerUser.css';
  $pageStyleFooter = '../../assets/css/footer.css';
  $pageStyles = '../../assets/css/reportes.css';

  include '../layout/headerUser.php'; 

?>

<br/>

    <div class="row">
        <div class="col-1">
        </div>
            <div class="col-10"> 
                <h1 class="text-center">TUS REPORTES FINANCIEROS</h1>
                <?php
                        include '../../controllers/informesController.php';
                        require_once '../../models/ingresosModel.php';
                        require_once '../../models/egresosModel.php';
                        require_once '../../models/registroModel.php';
                    
                        $ingresosModel = new ingresosModel();
                        $egresosModel = new egresosModel();
                        $persona = new registroModel();

                        $idUsuario = $persona->consultaridPersona($_SESSION['usuario_email']);
                    
                        // Consultar ingresos
                        $ingresos = $ingresosModel -> consultarIngresos($idUsuario);
                    
                        // Consultar egresos
                        $egresos = $egresosModel -> consultarEgresos($idUsuario);
                ?>
                <h3>Ingresos:</h3>
                    <table class="table table-dark table-striped">
                        <!-- Encabezados de la tabla -->
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Medio</th>
                                <th scope="col">Monto</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Categoría</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <!-- Datos de ingresos -->
                        <tbody class="table-group-divider">
                        <?php while ($ingreso = $ingresos->fetch_assoc()) { ?>
                            <tr>
                                <th scope="row"><?php echo $ingreso['idIngreso']; ?></th>
                                <td><?php echo $ingreso['Medio']; ?></td>
                                <td><?php echo $ingreso['Monto']; ?></td>
                                <td><?php echo $ingreso['Fecha']; ?></td>
                                <td><?php echo $ingreso['nombreCategoria']; ?></td>
                                <td>
                                    <a href="informes.php?id=<?php echo $ingreso['idIngreso']; ?>&type=ingreso">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256">
                                            <g fill="#84c8d1" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M10,2l-1,1h-5v2h3h10h3v-2h-5l-1,-1zM5,7v15h14v-15z"></path></g></g>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                    <h3>Egresos:</h3>
                    <table class="table table-dark table-striped">
                        <!-- Encabezados de la tabla -->
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Concepto</th>
                                <th scope="col">Monto</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Categoría</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <!-- Datos de egresos -->
                        <tbody class="table-group-divider">
                            <?php while ($egreso = $egresos->fetch_assoc()) { ?>
                                <tr>
                                    <th scope="row"><?php echo $egreso['idEgreso']; ?></th>
                                    <td><?php echo $egreso['Concepto']; ?></td>
                                    <td><?php echo $egreso['Monto']; ?></td>
                                    <td><?php echo $egreso['Fecha']; ?></td>
                                    <td><?php echo $egreso['nombreCategoria']; ?></td>
                                    <td>
                                        <a href="informes.php?id=<?php echo $egreso['idEgreso']; ?>&type=egreso">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256">
                                                <g fill="#84c8d1" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M10,2l-1,1h-5v2h3h10h3v-2h-5l-1,-1zM5,7v15h14v-15z"></path></g></g>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
        <div class="col-1">
        </div>
    </div>

<br />
<br />
<br />
<br />

<?php include '../layout/footer.php'; ?>