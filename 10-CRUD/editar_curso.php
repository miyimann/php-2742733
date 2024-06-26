<?php require('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    #seleccionamos el registro del curso recibido por ID
    $statement = $conexion->prepare("SELECT * FROM `cursos` WHERE id = $id");
    $statement->execute();
    $result = $statement->fetch();

    $titulo = $result['titulo'];
    $descripcion = $result['descripcion'];
    $estudiantes = $result['estudiantes'];

    echo "Titulo de la tarea " . $titulo . '<br>';
    echo "Descripcion de la tarea " . $descripcion . '<br>';

    /* $_SESSION['mensaje'] = 'Curso editado correctamente';
    $_SESSION['color'] = 'success';

    header("Location: curso.php"); */
}

if (isset($_POST['actualizar_curso'])) {
    /* echo "<h1>Formulario de actualización enviado</h1>"; */
    $id = $_GET['id'];
    $tituloActualizado = $_POST['titulo'];
    $descripcionActualizado = $_POST['descripcion'];
    $estudiantesActualizado = $_POST['estudiantes'];

    //aqui capturamos datos de la imagen recibida 
    $imagenCurso = $_FILES['imagenCurso']['tmp_name'];
    $nombreImagen = $_FILES['imagenCurso']['name'];
    $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
    $sizeImg = $_FILES['imagenCurso']['size'];
    $directorio = "images/";


    if ($tipoImagen == 'jpg' or $tipoImagen == 'jpeg' or $tipoImagen == 'png') {

        $ruta = $directorio . $id . '.' . $tipoImagen;

        $statement = $conexion->prepare("UPDATE `cursos` SET imagen=?, `titulo`= ?,`descripcion`= ?,`estudiantes`= ? WHERE id = ?");
        $statement->execute(array($ruta, $tituloActualizado, $descripcionActualizado, $estudiantesActualizado, $id));

        if (move_uploaded_file($imagenCurso, $ruta)) {
            $_SESSION['mensaje'] = 'Curso actualizado exitosamente💄';
            $_SESSION['color'] = 'success';

            header('Location: curso.php');
        }
    } else {
        $_SESSION['mensaje'] = 'formato no admitido🤰';
        $_SESSION['color'] = 'danger';

        header('Location: curso.php');
    }
}
?>

<?php require('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="editar_curso.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">

                <label for="imagen">Imagen del curso</label>
                <input class="form-control" type="file" name="imagenCurso">

                <label for="titulo">Titulo</label>
                <input class="form-control" type="text" id="titulo" name="titulo" value="<?php echo  $titulo ?>" required>

                <label for="descripcion">Descripcion</label>
                <input class="form-control" type="text" id="descripcion" name="descripcion" value="<?php echo  $descripcion ?>" required>

                <label for="estudiantes">Estudiantes</label>
                <input class="form-control" type="number" id="estudiantes" name="estudiantes" value="<?php echo  $estudiantes ?>" required>

                <br>

                <input class="btn btn-success" type="submit" id="titulo" name="actualizar_curso" value="Actualizar">

            </form>
        </div>
    </div>
</div>


<?php require('footer.php'); ?>