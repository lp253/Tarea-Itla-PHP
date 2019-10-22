<html>
<head>
    
</head>
<body>
<?php
//Este programa te muestra la url actual

$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo " La dirección actual es: " . $url;

?>
</body>

</html>