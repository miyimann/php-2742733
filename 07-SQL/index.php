<?php
//SQL
//01-SELECT Nombre,Edad FROM profesores;
// este sirve para mostrar la edad y los nombres de los profesores

//02-SELECT DISTINCT Materia FROM profesores;
// este sirve  para hacer que aparezca el valor que se escoge

//03-SELECT * FROM profesores WHERE Edad='25'
//este hace que aparezca  el valor especificados

//04-SELECT * FROM profesores ORDER BY edad;
// es irve para clasificar de menor a mayor 

//05-SELECT * FROM `profesores` WHERE `edad` = '25' AND `Nombre` LIKE 'A%';
//  el valor de la edad y letra asignada

//06-SELECT * FROM profesores WHERE Edad = '65' OR nombre = 'osvlado';
// La función que realiza es ingresar un valor o algún otro valor que producirá un resultado.


//07-SELECT * FROM profesores WHERE NOT Edad = '30';
// Esto implementa la funcionalidad de no mostrar el valor que le asignamos.

//08-INSERT INTO `profesores`(`ID`, `Nombre`, `Edad`, `Estado civil`, `Materia`, `Documento`) VALUES ('7','camilo','20','soltero','ingles','127454');
//  Tiene una función para agregar una fila a una tabla.

//09-SELECT Nombre FROM estudiantes WHERE Nombre IS NOT NULL;
//  Implementa la funcionalidad para cancelar todo excepto el valor de entrada.

//10-UPDATE `estudiantes` SET `Media Tecnica` = 'sistema' WHERE `ID`= 4;
//  utilizado para actualizar datos

//11-DELETE FROM `estudiantes` WHERE `Grado`= '10';
//  utilizado para actualizar datos




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>