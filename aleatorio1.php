<?php
    $x = rand(1,100);
    $y = rand(1,100);

    echo "Os numeros sorteado foram $x e $y <br >";

    if($x>$y)
        echo($x . " é maior.");
    else if($y>$x)
            echo($x . " é maior");
        else
            echo ($x ." e ". $y." sãpo iguais.");
        
?>
