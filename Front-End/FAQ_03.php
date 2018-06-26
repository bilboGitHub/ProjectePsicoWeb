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
           <tr><td>ID: </td><td><input type="text" name="tbID" size="100%" value="<?php echo $FAQ->getId_FAQ() ?>"></td></tr>
           <tr><td>Pregunta: </td><td><input type="text" name="tbPregunta" size="100%" value="<?php echo $FAQ->getPregunta_FAQ() ?>"></td></tr>
           <tr><td>Resposta: </td><td><input type="text" name="tbResposta" size="100%" value="<?php echo $FAQ->getResposta_FAQ() ?>"></td></tr>
           <tr><td>Categoria: </td><td><input type="text" name="tbCategoria" size="100%" value="<?php echo $FAQ->getCategoria_FAQ() ?>"></td></tr>
           <tr><td>Data: </td><td><input type="text" name="tbData" size="100%" value="<?php echo $FAQ->getData_FAQ() ?>"></td></tr>                   
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


<br><br>
<a href="09_administrador.html">
    Tornar Pagina principal
    <i class="fas fa-long-arrow-alt-right"></i>
</a>


</body>
</html>