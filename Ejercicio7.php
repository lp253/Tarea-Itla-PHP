<html>
<head>
    
</head>
<body>
<?php
//Este programa te muestra el ip del cliente, el ip del servidor y el nombre del fichero

$guardaHost = gethostname();
$ipHost = gethostbyname($guardaHost);

$ipServer = $_SERVER['SERVER_ADDR'];

$fichero = getcwd() . "\n";

echo "El ip del cliente es $ipHost y el del servidor es $ipServer y el fichero en uso es $fichero";




?>
</body>

</html>