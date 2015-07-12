<?php
class Miscellania { 
$numero = 12;
$min = 1;
$limite = 9999;
$gera = rand($min,$limite);
 if($gera == $numero) 
echo ''Você acertou com o numero: ".$numero;
else
echo " Você errou, tente denovo.";

}
?>
