<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
    $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;

    if (empty($usuario) or empty($password)) {
        echo 'rellene completo el formulario';
    } else {
        /* echo $usuario . ' - ' . $password;
            if( $usuario == $user_register && $password == $pass_register){
                echo 'listo, iniciaste sesion 👻';
                header('location: user.php');
            }else{  echo 'Tu usuario no existe😴';} */

        //CONEXION CON LA BASE DE DATOS......
        //entrega final



        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp;", 'root', '');
            echo "conexion OK";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("SELECT * FROM userapp
            WHERE username = :user AND contraseña = :pass");

        $statement->execute(array(':user' => $usuario, ':pass' => $password));

        $result = $statement->fetchAll();

        if ($result) {
            $_SESSION['userRegister'] = $usuario;
            $_SESSION['passRegister'] = $password;
            header('location:user.php');
        } else {
            echo 'false';
        }
    }
}
//$_SESSION['pais'] = 'colombia';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="contenedorregistro">
        <div class="paginainicio">
            <h1>Pagina De Inicio</h1>
        </div>

        <form action="index.php" method="POST">

            <div class="usuario pt-5">
                <label for="user">Usuario</label>
            </div>


            <div class="usuarioo">
                <input  type="text" placeholder="Usuario" name="user">
            </div>



            <div class="contraseña">
                <label for="password">Contraseña</label>
            </div>



            <div class="contraseñaa">
                <input type="text" placeholder="Password" name="password">
            </div>



            <div class="inicio">
                <button type="submit">Inicio Sesion</button>
            </div>



        </form>
        <div class="registrate">


            <a href="./registro.php">registrate</a>


        </div>


</body>

</html>