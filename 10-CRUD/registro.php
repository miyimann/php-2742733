<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'datos enviadoshbjhj';

    echo '<br>';
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];



    if (empty($usuario) or empty($password) or empty($email)) {
        echo 'rellene completo el formulario';
    } else {
        //echo $usuario . ' - ' . $password;
        $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
        $_SESSION['emailRegister'] = $email;

        //echo ' - variables de sesion guardadas🥶';
        //header('location: index.php');

        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp;", 'root', '');
            echo "conexion OK";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }



        $statement = $conexion->prepare("INSERT INTO `userapp`( `ID`, `username`, `correo`, `contraseña`) VALUES (NULL, :username, :pass ,:correo)");


        $statement->execute(array(":username" => $usuario, ":pass" => $password, ":correo" => $email));






        /* 
                foreach ($statement as $item) {
                    echo$item['ID'] . ' - '. $item['Nombre'] . '<br>'; */
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div id="particles-js" class="jejejejejejje">
        <div class="posicionar">
            <div class="contenedorregistro">
                <div class="paginainicio">
                    <h1>registrate</h1>
                </div>

                <div class="iniciar">


                    <form action="registro.php" method="POST">

                        <div class="usuario pt-5">
                            <label for="user">usuario</label>
                        </div>

                        <div class="usuarioo">

                            <input type="text" placeholder="usuario" name="user">
                        </div>
                        <div class="contraseña">
                            <label for="password">contraseña</label>


                            <div class="contraseñaa">
                                <input type="text" placeholder="password" name="password">
                            </div>

                            <div class="inicio">

                                <label for="mail">correo</label>
                            </div>
                            <div class="inicio">
                                <input type="email" placeholder="email" name="email">
                            </div>
                            <div class="registrate">
                                <button type="submit">registrate</button>
                            </div>


                    </form>



                </div>
            </div>
        </div>
        <?php if (isset($_SESSION['userRegister'])) : ?>
            <p>Datos registrados, ya puedes iniciar sesion</p>
            <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] ?> </p>
            <a href="index.php">iniciar sesion</a>
        <?php endif ?>




        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
        <script src="particulas.js"></script>
 
</body>

</html>