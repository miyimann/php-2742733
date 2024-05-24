<?php

session_start(); //inicializa una session

$_SESSION['Nombre'] = "joselina";
$_SESSION['pais'] = "colombia";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=º, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>pagina de inicio</h1>

    <a href="./user.php">user page</a>
    <a href="./cerrar.php">cerrar</a>

    <form action="./registro.php" method="POST">

        <label for="usuario">Usuario</label>
        <input type="text" placeholder="usuario" name="usuario">
        <br>
        <label for="contraseña">contraseña</label>
        <input type="password" placeholder="contraseña" name="contraseña">
        <br>
        <button type="submit">Resgistro</button>

    </form>

    <a href="./user.php">user page</a>
    <a href="./cerrar.php">cerrar</a>

</body>

</html>