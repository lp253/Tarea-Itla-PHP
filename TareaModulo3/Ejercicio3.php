<?php

//Este programa convierte de pesos a dolares

function programaConversor()
{
    $dineroAconvertir = 5000;
    define("TASADOLLAR", 52.95);
    $dinero = conversorAdolar($dineroAconvertir, TASADOLLAR);

    echo "Te hemos cambiado tus " , $dineroAconvertir , " pesos a ", round($dinero,2) , " dolares";
}


function conversorAdolar($cantidad, $tasa)
{
    $cambio = $cantidad / $tasa;
    return $cambio;
}






?>
