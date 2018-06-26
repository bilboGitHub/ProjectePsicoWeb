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
           <tr><td>ID: </td><td><input type="text" name="tbID" size="100%" value="<?php echo $contacte->getId_contacte() ?>"></td></tr>
           <tr><td>nom: </td><td><input type="text" name="tbnom" size="100%" value="<?php echo $contacte->getnom_contacte() ?>"></td></tr>
           <tr><td>cognoms: </td><td><input type="text" name="tbcognoms" size="100%" value="<?php echo $contacte->getcognoms_contacte() ?>"></td></tr>
           <tr><td>email: </td><td><input type="text" name="tbemail" size="100%" value="<?php echo $contacte->getemail_contacte() ?>"></td></tr>
           <tr><td>Data: </td><td><input type="text" name="tbData" size="100%" value="<?php echo $contacte->getData_contacte() ?>"></td></tr>
           <tr><td>telefon: </td><td><input type="text" name="tbtelefon" size="100%" value="<?php echo $contacte->gettelefon_contacte() ?>"></td></tr>
           <tr><td>missatge: </td><td><input type="text" name="tbmissatge" size="100%" value="<?php echo $contacte->getmissatge_contacte() ?>"></td></tr>                  
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

<br><br>
<a href="09_administrador.html">
    Tornar Pagina principal
    <i class="fas fa-long-arrow-alt-right"></i>
</a>

</body>
</html>