<?php
include "include/php/fun_global.php";
$texto = "EN 1972, en un peque�o pueblo de Georgia siguen estando latentes los problemas interraciales. La muerte, en extra�as circunstancias, de un oficial de color perteneciente al ej�rcito de los Estados Unidos provoca que se abra una investigaci�n para esclarecer los hechos. El Mayor Kendall Laird (John Lithgow), con la ayuda de los padres del joven (Morgan Freeman y CCH Pounder), har� todo lo posible para que la verdad salga a la luz";

echo $texto . "<br /> <br />";

$txt = cortarTexto($texto);

echo $txt[0];
?>