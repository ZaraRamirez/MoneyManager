
<?php
  // Asigna los archivos CSS 
  $pageLogo = '../../assets/img/logos/LogoIndex.png';
  $pageStyleBoots = '../../assets/css/bootstrap/bootstrap.min.css';
  $pageStyleHeader = '../../assets/css/headerUser.css';
  $pageStyleFooter = '../../assets/css/footer.css';
  $pageStyles = '../../assets/css/calculadora.css';
include '../layout/headerUser.php'; 
?>

<div class="Calculadora">
    <h1>Calculadora Básica</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <label for="num1">Número 1:</label>
        <input type="text" name="num1" required><br><br>

        <!--<label for="operator">Operación:</label>
        <select name="operator" required>
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicación</option>
            <option value="/">División</option>
        </select><br><br> -->

        <label for="num2">Número 2:</label>
        <input type="text" name="num2" required><br><br>

        <button class="btn btn-dark" type="submit" name="operation" value="sumar">+</button>
        <button class="btn btn-dark" type="submit" name="operation" value="restar">-</button>
        <button class="btn btn-dark" type="submit" name="operation" value="multiplicar">*</button>
        <button class="btn btn-dark" type="submit" name="operation" value="dividir">/</button>

        <!-- <input type="submit" value="Calcular"> -->
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operation"];

    switch ($operator) {
        case "sumar":
            $result = $num1 + $num2;
            break;
        case "restar":
            $result = $num1 - $num2;
            break;
        case "multiplicar":
            $result = $num1 * $num2;
            break;
        case "dividir":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Error: No se puede dividir por cero.";
            }
            break;
        default:
            echo "Operación no válida.";
            break;
    }

    
    if (isset($result)) {
        echo "<div class = 'Resultado'>El resultado de tú cálculo es de: $result</div>";
    }
}
?>

<?php include '../layout/footer.php'; ?>
