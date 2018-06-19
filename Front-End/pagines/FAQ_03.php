<?php
    require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_FAQ.php"; //<--apple
    // require "../../Business/business_FAQ.php"; //<--windows
?>

<html>
<head></head>
<body>
    
    <h1>BORRAR / MODIFICAR FAQ</h1>

<?php
    $error = "";
    $FAQ = new business_FAQ();
    $arrayFAQ = $FAQ -> Llistar($error);
?>

<form action="FAQ_03.php" method="post">
    FAQ:
    <select name="slFAQ">
        <option value=""></option>  
    <?php foreach ($arrayFAQ as $fa) { ?>
               <option value="<?php echo $fa->getId_FAQ() ?>"><?php echo $fa->getPregunta_FAQ() ?></option>  
    <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Mostrar" name=btMostrar>

<?php
    if (isset($_POST['btMostrar'], $_POST['slFAQ']) and $_POST['slFAQ'] != "" ) {
        $FAQ = $FAQ -> cercarPerID($error, $_POST['slFAQ']);

?>
        <br><br>
        <table border='2'>
           <tr><td>ID: </td><td><input type="text" name="tbID" value="<?php echo $FAQ->getId_FAQ() ?>"></td></tr>
           <tr><td>Pregunta: </td><td><input type="text" name="tbPregunta" value="<?php echo $FAQ->getPregunta_FAQ() ?>"></td></tr>
           <tr><td>Resposta: </td><td><input type="text" name="tbResposta" value="<?php echo $FAQ->getResposta_FAQ() ?>"></td></tr>
           <tr><td>Categoria: </td><td><input type="text" name="tbCategoria" value="<?php echo $FAQ->getCategoria_FAQ() ?>"></td></tr>
           <tr><td>Data: </td><td><input type="text" name="tbData" value="<?php echo $FAQ->getData_FAQ() ?>"></td></tr>                   
        </table>

        <br>
        <input type="submit" value="MODIFICAR" name="btModificar">
        <input type="submit" value="BORRAR" name="btBorrar">

<?php 
} 
?>

<?php 

    if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $objFAQ2 = new business_FAQ ($_POST['tbID'], $_POST['tbPregunta'], $_POST['tbResposta'], $_POST['tbCategoria'], $_POST['tbData']);

        if (isset($_POST['btModificar'])) {

            $resultat = $objFAQ2 -> modificar($error); 

            if ($resultat)
                echo "Registre Modificat";
            else
                echo "Error en la Modificació: ". $error;
        }

        else {

            $resultat = $objFAQ2 -> eliminar($error);
            if ($resultat)
                echo "Registre esborrat";
            else
                echo "Error en l'esborrat: ". $error;
        }        
       
    }
  
?>



</form>

</body>
</html>