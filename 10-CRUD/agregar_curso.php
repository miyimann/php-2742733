<?php require('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "datos enviados";
    $tituloCurso = $_POST['Titulo'];

    //aqui capturamos datos de la imagen recibida 
    $imagenCurso = $_FILES['Imagen']['tmp_name'];
    $nombreImagen = $_FILES['Imagen']['name'];
    $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
    $sizeImg = $_FILES['Imagen']['size'];
    $directorio = "images/";

    $descripcion = $_POST["Descripcion"];
    $estudiantes = $_POST["Estudiantes"];


    if ($tipoImagen == 'jpg' or $tipoImagen == 'jpeg' or $tipoImagen == 'png') {
        //Hacer un insert into de todos los datos recibidos excepto el de la imagen
        $statement = $conexion->prepare("INSERT INTO `cursos`(`imagen`, `titulo`, `descripcion`, `estudiantes`) VALUES ('',?,?,?)");
        $statement->execute(array($tituloCurso, $descripcion, $estudiantes));
        $idRegistro = $conexion->lastInsertId();

        //prepara la ruta para guardar la imagen
        $ruta = $directorio . $idRegistro . '.' . $tipoImagen;

        $statement  = $conexion->prepare("UPDATE cursos SET imagen = '$ruta' WHERE id = '$idRegistro' ");
        $statement->execute();

        if(move_uploaded_file($imagenCurso, $ruta)) {
            $_SESSION['mensaje'] = 'Curso agregado exitosamente';
            $_SESSION['color'] = 'success';
        
            header('Location: curso.php'); 

        }

    } else {
        $_SESSION['mensaje'] = 'El archivo de imagen no es admitido 🤳';
        $_SESSION['color'] = 'danger';
    
        header('Location: curso.php'); 
    }


    echo "el archivo subido se llama: " . $nombreImagen . "<br>";
    echo "El formato de tu imagen es: " . $tipoImagen;

    $titulo = $_POST["Titulo"];

   
    /*  $statement = $conexion->prepare("INSERT INTO `cursos`(`imagen`, `titulo`, `descripcion`, `estudiantes`) VALUES (?,?,?,?)");
    $statement->execute(array($Imagen,$Titulo,$Descripcion,$Estudiantes));

    $_SESSION['mensaje'] = 'tarea agregada exitosamente';
    $_SESSION['color'] = 'success';

    header('Location: curso.php'); */
}
