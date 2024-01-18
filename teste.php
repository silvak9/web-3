<?php
$a = 1; // A variavel $a recebe 1;
$a += 2; // $a recebe o proprio valor somado a 2;
//echo $a ; // imprime 3;
$a -= 2; // $a recebe o proprio valor menos 2;
$a *= 2; // $a recebe o proprio valor multiplicado por 2;
$a /= 2; // $a recebe o proprio valor dividido por 2.
echo $a . "<br><br><br>";


$salario = 2100;
echo $salario > 2000 ? " Voce ganha bem ." : "Precisamos melhorar o salario .";
// Sera impresso voce ganha bem .

echo "<br><br><br>";

$t = date ("H") ;
if ( $t < 18) {
echo " Tenha um bom dia !";
}

echo "<br><br><br>";

$t = date ("H") ;
if ( $t < 18) {
echo " Tenha um bom dia !";}
 else {
echo " Tenha uma boa noite !";
}

echo "<br><br><br>";
$x = 1;
while ( $x <= 5) {
echo "O numero esta em: $x <br >";
$x ++;
}

echo "<br><br><br>";
$x = 2;
do {
echo "O numero esta em: $x <br >";
$x ++;
} while ( $x <= 3) ;

echo "<br><br><br>";
$colors = array (" red", " green ", " blue ", " lime ") ;
foreach ( $colors as $value ) {
echo " $value <br >";
}

?>