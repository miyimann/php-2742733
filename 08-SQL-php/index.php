<?php

try {
    $conexion = new pdo ("mydql: host=localhost; dbname=colegio",'root',);
    echo "conexion exitosa";
} catch(PDOException $e) {
    echo "error:" . $e->getMessage();
}

// vamos a crar una sentencia SQL y la guardamos en una variable 

$statement = $conexion->prepare ("SELECT * from profesores" );

// ejecutar statemen

$statement->execute();

// fetch() regresar solo un resultado         fetchAll() regresa todos los resultados

$statement = $statamen->fetchALL();

// print_r($statement);

foreach ($statamen as $item){
    echo $item['Id'] . '-' . ['nombre'] . '<br>';
}

?>