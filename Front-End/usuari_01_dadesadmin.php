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
    
    <h1>usuari</h1>

<?php  
    $error="";
    $business_usuari = new business_usuari();
    $arrayusuari = $business_usuari-> Llistar($error); //<--- problema:Uncaught ArgumentCountError

    if ($error=="") {
        echo "<table border='2'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>EMAIL</th>";
        echo "<th>CONTRASENYA</th>";
        echo "<th>TIPUS</th>";
        echo "</tr>";

        if($arrayusuari) {
            foreach ($arrayusuari as $faq) {
                echo "<tr>";
                echo "<td>" . $faq->getid_usuari()."</td>";
                echo "<td>" . $faq->getemail_usuari(). "</td>";
                echo "<td>" . $faq->getcontrasenya_usuari(). "</td>";
                echo "<td>" . $faq->gettipus_usuari(). "</td>";
                echo "</tr>";
            }
        }
        echo "</table>";
    }
    else
        echo "ERRO: $error";
  
?>

<br><br>
<a href="09_administrador.html">
    Tornar Pagina principal
    <i class="fas fa-long-arrow-alt-right"></i>
</a>

</body>
</html>