<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_contacte.php"; //<--apple
    require "../Business/business_contacte.php"; //<--windows
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
    
<h1>INSERTAR contacte</h1>

<form action="contacte_02.php" method="post">
    <table border=2>
        <!-- <tr><td>id: </td><td><input type="text" name="id" size="100%"> </td></tr> -->
        <tr><td>nom: </td><td><input type="text" name="nom" size="100%"></td></tr>
        <tr><td>cognoms: </td><td><input type="text" name="cognoms" size="100%"></td></tr>
        <tr><td>email: </td><td><input type="text" name="email" size="100%"></td></tr>
        <!-- <tr><td>data: </td><td><input type="text" name="data" size="100%"></td></tr> -->
        <tr><td>telefon: </td><td><input type="text" name="telefon" size="100%"></td></tr>
        <tr><td>missatge: </td><td><input type="text" name="missatge" size="100%"></td></tr>
    </table>
    <br>
    <input type="submit" value="INSERTAR" name="btInsertar">
</form>


<?php

if (isset($_POST['btInsertar'])) {
   $error="";         
   $objcontacte = new business_contacte(null, $_POST['nom'], $_POST['cognoms'], $_POST['email'], null, $_POST['telefon'], $_POST['missatge']);
   
   $resultat = $objcontacte -> insertar($error);

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