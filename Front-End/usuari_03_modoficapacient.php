<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_usuari.php"; //<--apple
    require "../Business/business_usuari.php"; //<--windows
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
    
    <h1>BORRAR / MODIFICAR usuari pacient</h1>

<?php
    $error = "";
    $usuari = new business_usuari();
    $arrayusuari = $usuari -> Llistar($error);
?>

<form action="usuari_03_modificapacient.php" method="post">
    usuari:
    <select name="slusuari">
        <option value=""></option>  
    <?php foreach ($arrayusuari as $fa) { ?>
               <option value="<?php echo $fa->getid_usuari() ?>"><?php echo $fa->getemail_usuari() ?></option>  
    <?php } ?>
    </select>
    <br><br>
    <input type="submit" value="Mostrar" name=btMostrar>
    
<?php
    if (isset($_POST['btMostrar'], $_POST['slusuari']) and $_POST['slusuari'] != "" ) {
        $usuari = $usuari -> cercarPerID($error, $_POST['slusuari']);

?>
        <br><br>
        <table border='2'>
           <tr><td>email: </td><td><input type="text" name="tbemail" size="100%" value="<?php echo $usuari->getemail_usuari() ?>"></td></tr>
           <tr><td>contrasenya: </td><td><input type="text" name="tbcontrasenya" size="100%" value="<?php echo $usuari->getcontrasenya_usuari() ?>"></td></tr>               
        </table>

        <br>
        <input type="submit" value="MODIFICAR" name="btModificar">
        <input type="submit" value="BORRAR" name="btBorrar">

<?php 
} 
?>

<?php 

    if (isset($_POST['btModificar']) or isset($_POST['btBorrar'])) {

        $objusuari2 = new business_usuari (null, $_POST['tbemail'], $_POST['tbcontrasenya'], 0 );

        if (isset($_POST['btModificar'])) {

            $resultat = $objusuari2 -> modificar($error); 

            if ($resultat)
                echo "Registre Modificat";
            else
                echo "Error en la Modificació: ". $error;
        }

        else {

            $resultat = $objusuari2 -> eliminar($error);
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