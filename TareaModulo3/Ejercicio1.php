<?php
    
    //Esta función muestra la suma, resta, multiplicación y división de las variable $x y $y
    
    function muestra_operaciones()
    {
        $x = 144;
        $y = 999;

        echo 'La variable $x vale ' , $x , ' y la variable $y vale ' , $y, "<br>";
        echo "<br>";
        echo "La suma es:", $x + $y, "<br>";
        echo "La resta es:", $x - $y, "<br>";
        echo "La multiplicación es:", $x * $y, "<br>";
        echo "La división es:", $x / $y, "<br>";
    }
?>