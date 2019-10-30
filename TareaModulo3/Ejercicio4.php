
<html>
<head>
    
</head>
<body>
 

<form action = "Ejercicio4.php" method = "get">
    Escriba aqui lo que quiera mostrar: <input type = "text" name = "texto">
    <input type = "submit">
</form>
<br>

<?php 
    //Este programa espera texto del usuario y lo muestra en pantalla
    $textoIntroducido[0] = " ";
    if(isset($_GET["texto"])) 
    {
        $textoIntroducido[0] =  $_GET["texto"];
        echo $textoIntroducido[0];
    }
    
    
    
?>

</body>

</html>