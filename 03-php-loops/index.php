<?php

$i= 100;

while ($i< 1000) {
    echo $i;
    $i+= 100;
    echo '<br>'; 
}

 echo "<br> <br> <br>" ;

 for ($x = 0; $x <= 200; $x+=20) {
    if ($x == 100) break;
    echo "no joda vale: $x <br>";
  }

  echo "<br> <br> <br>" ;

  $ciclo = array("tomi"=>"60", "luna"=>"90", "burgos"=>"15");

foreach ($ciclo as $x => $y) {
  echo "$x : $y <br>";
}

?>