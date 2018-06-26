<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_contacte.php"; //<--apple
    require "../Business/business_contacte.php"; //<--windows
?>

<html>
<head></head>
<body>
    
    <h1>BORRAR / MODIFICAR contacte</h1>

<?php
    $error = "";
    $contacte = new business_contacte();
    $arraycontacte = $contacte -> Llistar($error);
?>

<form action="contacte_03.php" method="post">
    contacte:
    <select name="slcontacte">
        <option value=""></option>  
    <?php foreach ($arraycontacte as $fa) { ?>
               <option value="<?php echo $fa->getId_contacte() ?>"><?php echo $fa->getcognoms_contacte() ?></option>  
    <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Mostrar" name=btMostrar>
    
<?php
    if (isset($_POST['btMostrar'], $_POST['slcontacte']) and $_POST['slcontacte'] != "" ) {
        $contacte = $contacte -> cercarPerID($error, $_POST['slcontacte']);

?>
        <br><br>
        <table border='2'>
           <tr><td>ID: </td><td><input type="text" name="tbID" value="<?php echo $contacte->getId_contacte() ?>"></td></tr>
           <tr><td>nom: </td><td><input type="text" name="tbnom" value="<?php echo $contacte->getnom_contacte() ?>"></td></tr>
           <tr><td>cognoms: </td><td><input type="text" name="tbcognoms" value="<?php echo $contacte->getcognoms_contacte() ?>"></td></tr>
           <tr><td>email: </td><td><input type="text" name="tbemail" value="<?php echo $contacte->getemail_contacte() ?>"></td></tr>
           <tr><td>Data: </td><td><input type="text" name="tbData" value="<?php echo $contacte->getData_contacte() ?>"></td></tr>
           <tr><td>telefon: </td><td><input type="text" name="tbtelefon" value="<?php echo $contacte->gettelefon_contacte() ?>"></td></tr>
           <tr><td>missatge: </td><td><input type="text" name="tbmissatge" value="<?php echo $contacte->getmissatge_contacte() ?>"></td></tr>                  
        </table>

        <br>
        <input type="submit" value="MODIFICAR" name="btModificar">
        <input type="submit" value="BORRAR" name="btBorrar">

<?php 
} 
?>

<?php 

    if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $objcontacte2 = new business_contacte ($_POST['tbID'], $_POST['tbnom'], $_POST['tbcognoms'], $_POST['tbemail'], $_POST['tbData'], $_POST['tbtelefon'], $_POST['tbmissatge'] );

        if (isset($_POST['btModificar'])) {

            $resultat = $objcontacte2 -> modificar($error); 

            if ($resultat)
                echo "Registre Modificat";
            else
                echo "Error en la Modificació: ". $error;
        }

        else {

            $resultat = $objcontacte2 -> eliminar($error);
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