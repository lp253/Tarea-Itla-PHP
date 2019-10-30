<?php
    
    //Este script te muestra la url actual

    function mostrarUrlActual()
    {
        $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        echo " La dirección actual es: " . $url;
    }
    

?>
