<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_FAQ.php"; //<--apple
    require "../Business/business_FAQ.php"; //<--windows
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salome-Psicolegs Infanto-juvenil Barcelona</title>
    <link rel="stylesheet" href="css/normalize.css"> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
    
<h1>INSERTAR FAQ</h1>

<form action="FAQ_02.php" method="post">
    <table border='2'>
        <!-- <tr><td>id: </td><td><input type="text" name="id" size="100"> </td></tr> -->
        <tr><td>pregunta: </td><td><input type="text" name="pregunta" size="100"></td></tr>
        <tr><td>resposta: </td><td><input type="text" name="resposta" size="100"></td></tr>
        <tr><td>categoria: </td><td><input type="text" name="categoria" size="100"></td></tr>
        <!-- <tr><td>data: </td><td><input type="text" name="data" size="100"></td></tr> -->
    </table>
    <br>
    <input type="submit" value="INSERTAR" name="btInsertar">
</form>


<?php

if (isset($_POST['btInsertar'])) {
   $error="";         
   $objFAQ = new business_FAQ(null, $_POST['pregunta'], $_POST['resposta'], $_POST['categoria'], null);
   
   $resultat = $objFAQ -> insertar($error);

   // Motrar el resultado de los registro de la base de datos
    if ($resultat)
        echo "Registre insertat";
    else
        echo "Error en la inserció: $error";   
}

?>
   
   
<br><br>
<a href="09_administrador.html">
    Tornar Pagina principal
    <i class="fas fa-long-arrow-alt-right"></i>
</a>


</body>
</html>