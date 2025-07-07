<?php

echo "Números pares de 1 até 100: ";

for($i=1;$i<100;$i++){
    
    $pa = $i%2;

    if($pa==0){
        echo $i.", ";
    }
    
}

echo "100.";

?>