<?php
class Miscellania { 
$numero = 12;
$min = 1;
$limite = 9999;
$gera = rand($min,$limite);
 if($gera == $numero) 
echo ''Voc� acertou com o numero: ".$numero;
else
echo " Voc� errou, tente denovo.";

}
?>
