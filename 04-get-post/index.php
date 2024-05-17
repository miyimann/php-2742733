<!-- PRIMER EJERCICIO -->
/
/
/
/
/
/
<?php
if (isset($_GET['edad'])) {
    $edad = $_GET['edad'];
    if (is_numeric($edad)) {
        if ($edad >= 18) {
            echo "<h1>Eres mayor de edad.</h1>";
        } else {
            echo "<h1>No eres mayor de edad.</h1>";
        }
    } else {
        echo "<h1>Por favor, ingresa un valor numérico válido para la edad.</h1>";
    }
} else {
    echo "<h1>Por favor, ingresa tu edad.</h1>";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verificar Edad</title>
</head>
<body>
    <h1 style="color: green;"> <b>Verificar Edad</b> </h1>
    <form action="index.php" method="get">
        <label style="color: blue;" for="edad">Ingresa tu edad:</label>
        <input type="number" id="edad" name="edad" required>
        <input type="submit" value="Verificar">
    </form>
</body>
</html>


<!-- PRIMER EJERCICIO -->
/
/
<br>
/
/
/
<!-- SEGUNDO EJERCICIO -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Document</title>
</head>
<body>

<h2>Calculadora de Salario</h2>
    <form action="calcular_salario.php" method="post">
        <label for="horas">Horas Trabajadas en el Mes:</label><br>
        <input type="number" id="horas" name="horas" required><br>
        <label for="valor">Valor de la Hora:</label><br>
        <input type="number" id="valor" name="valor" required><br><br>
        <button type="submit">Calcular</button>
    </form>

</body>

</html>

<?php

$horas = $_POST['horas'];
$valor = $_POST['valor'];
$resultado = $horas * $valor;

echo $horas * $valor;

if ($resultado >= 2200000){
    echo "hay retencion de fuente";
} else {
    echo "no hay retencion de fuente";
}




?>
<!-- SEGUNDO EJERCICIO -->
/
/
<br>
/
/
/
<!-- SEGUNDO EJERCICIO -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        if (is_numeric($numero1) && is_numeric($numero2) && is_numeric($numero3)) {
  
            $mayor = max($numero1, $numero2, $numero3);
            echo "<h1>El número mayor es: $mayor</h1>";
        } else {
            echo "<h1>Por favor, ingresa valores numéricos válidos.</h1>";
        }
    } else {
        echo "<h1>Por favor, completa todos los campos del formulario.</h1>";
    }
} else {
    echo "<h1>Por favor, envía el formulario.</h1>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Determinar el Número Mayor</title>
</head>
<body>
    <h1>Ingresar Tres Números</h1>
    <form action="index.php" method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>
        <label for="numero3">Número 3:</label>
        <input type="number" id="numero3" name="numero3" required><br><br>
        <input type="submit" value="Determinar Mayor">
    </form>
</body>
</html>
<!-- SEGUNDO EJERCICIO -->
/
/
/
<br>
/
/
/
/
<!-- TERCER EJERCICIO -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['metros_cuadrados']) && isset($_POST['superficie'])) {
        $metros_cuadrados = $_POST['metros_cuadrados'];
        $superficie = $_POST['superficie'];
        $costo_transporte = 15000;

        if (is_numeric($metros_cuadrados) && $metros_cuadrados > 0) {

            if ($superficie == "lisa") {
                $costo_por_metro = 2000;
            } elseif ($superficie == "no_lisa") {
                $costo_por_metro = 4000;
            } else {
                echo "<h1>Tipo de superficie no válido.</h1>";
                exit();
            }
            
         
            $costo_total = $costo_transporte + ($metros_cuadrados * $costo_por_metro);
            echo "<h1>La cotización del trabajo es: $costo_total pesos</h1>";
        } else {
            echo "<h1>Por favor, ingresa un valor numérico positivo para los metros cuadrados.</h1>";
        }
    } else {
        echo "<h1>Por favor, completa todos los campos del formulario.</h1>";
    }
} else {
    echo "<h1>Por favor, envía el formulario.</h1>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cotización de Trabajo de Pintura</title>
</head>
<body>
    <h1>Formulario de Cotización</h1>
    <form action="index.php" method="post">
        <label for="metros_cuadrados">Metros Cuadrados a Pintar:</label>
        <input type="number" id="metros_cuadrados" name="metros_cuadrados" required><br><br>
        
        <label for="superficie">Tipo de Superficie:</label><br>
        <input type="radio" id="lisa" name="superficie" value="lisa" required>
        <label for="lisa">Lisa (Estucada)</label><br>
        <input type="radio" id="no_lisa" name="superficie" value="no_lisa" required>
        <label for="no_lisa">No Lisa (Sin Estucada)</label><br><br>
        
        <input type="submit" value="Calcular Cotización">
    </form>
</body>
</html>






<!-- TERCER EJERCICIO -->




