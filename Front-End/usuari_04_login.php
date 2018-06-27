<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_usuari.php"; //<--apple
    require "../Business/business_usuari.php"; //<--windows
    require "redirect.php";
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
    
<h1>LOGIN</h1>

<form action="usuari_04_login.php" method="post">
    <input type="email" name="email" id="CustomerEmail" class="" placeholder="Email...">
    <br><br>
    <input type="password" name="contrasenya" id="CustomerPassword" class="" placeholder="Contrasenya...">
    <br><br>
    <input type="submit" name="btsignin" class="button" value="Sign In">
    <br><br>
</form>


<?php

if (isset($_POST['btsignin'])) {

    $error="";         
    $usuari = new business_usuari();
    $objusuari = $usuari -> cercarperemail($error, $_POST['email']);

    if ($error =="") {
        if ($objusuari){
            if ($objusuari->getcontrasenya_usuari() == $_POST['contrasenya']){
                if($objusuari->gettipus_usuari() == 2){
                    redirect("09_administrador.html");
                }
                elseif($objusuari->gettipus_usuari() == 1){
                    redirect("09_doctor.php?id_usuari=". $objusuari->getid_usuari());
                }
                elseif($objusuari->gettipus_usuari() == 0){
                    redirect("09_pacient.php?id_usuari=". $objusuari->getid_usuari());
                }
            }
            else{
                echo "Contrasenya invalida";
            }
        }
        else{
            echo "No existeix Usuari amb aquest Email";   
        }
    }
    else
        echo "ERROR: $error";
}

?>


<!-- <br><br>
<a href="09_administrador.html">
    Tornar Pagina principal
    <i class="fas fa-long-arrow-alt-right"></i>
</a> -->
    
</body>
</html>