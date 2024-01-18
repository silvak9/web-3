<?php

    for($i = 0; $i<100; $i++){
        $vetor[] = rand(0,2500);     
    }

    $maior = 0;
    for($i = 0; $i<count($vetor); $i++){
        if($vetor[$i]>$vetor[$maior])
            $maior = $i;    
    }

    echo "O maior é " . $vetor[$maior]. " e a posição é:" . $maior;

?>