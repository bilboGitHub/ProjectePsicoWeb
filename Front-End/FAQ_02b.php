<?php
    require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_FAQ.php"; //<--apple
    // require "../Business/business_FAQ.php"; //<--windows
?>

<html>
<head></head>
<body>
    
<h1>INSERTAR FAQ</h1>

<form action="FAQ_02b.php" method="post">
    <table border='2'>
        <tr><td>id: </td><td><input type="text" name="id"> </td></tr>
        <tr><td>pregunta: </td><td><input type="text" name="pregunta"></td></tr>
        <tr><td>resposta: </td><td><input type="text" name="resposta"></td></tr>
        <tr><td>categoria: </td><td><input type="text" name="categoria"></td></tr>
        <tr><td>data: </td><td><input type="text" name="data"></td></tr>
    </table>
    <br>
    <input type="submit" value="INSERTAR" name="btInsertar">
</form>


<?php

if (isset($_POST['btInsertar'])) {
   $error="";         
   $objFAQ = new business_FAQ($_POST['id'], $_POST['pregunta'], $_POST['resposta'], $_POST['categoria'], $_POST['data']);
   
   $resultat = $objFAQ -> insertar($error);

   // Motrar el resultado de los registro de la base de datos
    if ($resultat)
        echo "Registre insertat";
    else
        echo "Error en la inserció: $error";   
}

?>
    
</body>
</html>