<?php


$caja = '20';

if ($caja <= 12){
    echo 'LA CAJA ES RAPIDA';
}

else if($caja > 12){
    echo 'LA CAJA ES LENTA';
} 


echo "<br> <br>";


$edad = '10';

if ($edad >= 18){
    echo ' SI PUEDE VOTAR PAPI';
}

else if($edad < 18){
    echo ' NO PUEDE VOTAR MIJO';
}


echo "<br> <br>";


$nombre = 'Mario';

if ($nombre == 'Mario'){
    echo 'puedes entrar al area VIP' ;
}

else if ($nombre <> 'Carlos, Mario'){
    echo 'no puedes entrar al area VIP' ;
}

$años = '17';

if ($años >= '18'){
    echo ' pero puedes ingresar al area publica';
}

else if ($años < '18'){
    echo ' no puedes ingresar';
}


echo "<br> <br>";


$estatura = '169';
$velocidad = '26';
$años_de_vida = '18';

if ($estatura >= 170 and $velocidad >= 27){
    echo 'Felicidades, entraste al equipo';
}

else if ($estatura < 170 and $velocidad < 27){
    echo 'no entraste al equipo';
}


echo "<br> <br>";


$aire = 'amarillo';

switch($aire){
    case 'verde';
        echo 'calidad del aire es buena';
    break;
    case 'amarillo';
        echo 'calidad del aire es moderada';
    break;
    case 'naranja';
        echo 'no es saludable para grupos sensibles';
    break;
    case 'rojo';
        echo 'calidad de aire no es saludable';
    break;
    case 'purpura';
        echo 'es muy poco sensible';
    break;
    case 'marron':
        echo 'calidad del aire peligrosa';
        break;
        default:
        echo 'el color no es valido';
        break;
}
?>