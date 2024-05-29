<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];

    //verificación de los datos variacion / llenos
    if (empty($usuario) or empty($password) or empty ($correo)) {
        echo 'Rellene completo el formulario';
    } else {

    //echo $usuario .' - ' . $password;
    $_SESSION['userRegister'] = $usuario;
    $_SESSION['passRegister'] = $password;
    $_SESSION['correoRegister'] = $correo;
    echo ' - variables de sesión guardadas 🥵';

    //header('location: index.php');
    
    try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

$statement = $conexion->prepare("INSERT INTO `userapp` (`ID`, Username`, `Correo`, `Contraseña`) VALUES (NULL, :usuario, :correo, :pass)");

$statement->execute( Array(":usuario"=>$usuario, ":correo" => $correo, ":pass" => $password));
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Registrate</h1>


<form action="registro.php" method= "post">
<label for="user">User</label>
<input id="user" type="text" placeholder="User" name="user">
<br>
<br>
<label for="password">Password</label>
<input id="password" type="password" placeholder="Password" name="password">
<br><br>
<label for="correo">Correo</label>
<input id="correo" type="correo" placeholder="Correo" name="correo">
<br>
<br>
<button type="submit">Registrarse</button>
</form>

<?php if (isset ($_SESSION['userRegister'])) : ?>

<p>Tus datos han sido registrados, vuelve para iniciar sesión</p>
<p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] . ' - ' . $_SESSION['correoRegister']; ?> </p>
<a href="./index.php">Iniciar sesión</a>

<?php endif?>



?>

</body>
</html>