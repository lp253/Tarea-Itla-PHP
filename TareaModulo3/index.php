<html>
<head>
    
</head>
<body>
 

<form action = "index.php" method = "get">
    Escriba cual practica quiere ejecutar del 1 al 8: <input type = "text" name = "texto">
    <input type = "submit">
</form>
<br>

<?php 
    //Este programa elije entre las 8 practicas que hemos realizado
    
    include("Ejercicio1.php");
    include("Ejercicio2.php");
    include("Ejercicio3.php");
    include("Ejercicio6.php");
    include("Ejercicio7.php");
    include("Ejercicio8.php");
    
    $textoIntroducido[0] = " ";
    if(isset($_GET["texto"])) 
    {
        $textoIntroducido[0] =  $_GET["texto"];
        
        //Con los numeros del 1 al 8 podemos mostrar cada práctica del módulo 2
        
        if($textoIntroducido[0] == "1")
        {
            muestra_operaciones();
        }
        elseif ($textoIntroducido[0] == "2") 
        {
            mostrar_nombre();
        }
        elseif ($textoIntroducido[0] == "3") 
        {
            programaConversor();
        }
        elseif ($textoIntroducido[0] == "4") 
        {
            $nuevaURL = 'https://localhost/TareaModulo3/Ejercicio4.php';
            echo header('Location:' . $nuevaURL);   
        }
        elseif ($textoIntroducido[0] == "5") 
        {
            include("Ejercicio5.php");
        }
        elseif ($textoIntroducido[0] == "6") 
        {
            mostrarUrlActual();   
        }
        elseif ($textoIntroducido[0] == "7") 
        {
            mostrarIps();
        }
        elseif ($textoIntroducido[0] == "8") 
        {
            versionPHP();
        }
    }
    
    
    
?>

</body>

</html>