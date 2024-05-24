<?php
try{

$conexion = new PDO("mysql. host=localost; bdname=colegio",'root','');
echo "conexion OK";


} catch (PDOException $e) {

    echo "Error: " . $e->getMessage();
}

//vamos a preparar una sentencia SQL y la guardamos en una variable 


$statement = $conexion->prepare("SELECT * FROM profesores")


//ejecutar statement 

$statement->execute();


//fetch() regresa solo un resultado       feachALL()regresa todos los resultafos 

$statement = $statement->fetchALL();

print_r($statement)


foreach ($statement as item){
echo $item['ID'] . ' - ' . $item ['Nombre'] . '<br>';

}




?>