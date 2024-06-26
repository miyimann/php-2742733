<?php require('conexion.php');
//si los datos fueron enviados por metodo GET, capturar en variables el id enviado desde la url

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $statement = $conexion->prepare("DELETE FROM `cursos` WHERE id = $id");
    $statement->execute();

    $_SESSION['mensaje'] = 'Curso eliminado correctamente';
    $_SESSION['color'] = 'danger';

    header("Location: curso.php");
}

?>