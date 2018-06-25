<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_contacte.php"; //<--apple
    require "../Business/business_contacte.php"; //<--windows
?>

<html>
<head></head>
<body>
    
<h1>INSERTAR contacte</h1>

<form action="contacte_02.php" method="post">
    <table border='2'>
        <tr><td>id: </td><td><input type="text" name="id"> </td></tr>
        <tr><td>nom: </td><td><input type="text" name="nom"></td></tr>
        <tr><td>cognoms: </td><td><input type="text" name="cognoms"></td></tr>
        <tr><td>email: </td><td><input type="text" name="email"></td></tr>
        <tr><td>data: </td><td><input type="text" name="data"></td></tr>
    </table>
    <br>
    <input type="submit" value="INSERTAR" name="btInsertar">
</form>


<?php

if (isset($_POST['btInsertar'])) {
   $error="";         
   $objcontacte = new business_contacte($_POST['id'], $_POST['nom'], $_POST['cognoms'], $_POST['email'], $_POST['data']);
   
   $resultat = $objcontacte -> insertar($error);

   // Motrar el resultado de los registro de la base de datos
    if ($resultat)
        echo "Registre insertat";
    else
        echo "Error en la inserció: $error";   
}

?>
    
</body>
</html>