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
    
    <h1>contacte</h1>

<?php  
    $error="";
    $business_contacte = new business_contacte();
    $arraycontacte = $business_contacte-> Llistar($error); //<--- problema:Uncaught ArgumentCountError

    if ($error=="") {
        echo "<table border='2'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>NOM</th>";
        echo "<th>COGNOMS</th>";
        echo "<th>EMAIL</th>";
        echo "<th>DATA</th>";
        echo "<th>TELEFON</th>";
        echo "<th>MISSATGE</th>";
        echo "</tr>";

        if($arraycontacte) {
            foreach ($arraycontacte as $faq) {
                echo "<tr>";
                echo "<td>" . $faq->getId_contacte()."</td>";
                echo "<td>" . $faq->getnom_contacte(). "</td>";
                echo "<td>" . $faq->getcognoms_contacte(). "</td>";
                echo "<td>" . $faq->getemail_contacte(). "</td>";
                echo "<td>" . $faq->getData_contacte(). "</td>";
                echo "<td>" . $faq->gettelefon_contacte(). "</td>";
                echo "<td>" . $faq->getmissatge_contacte(). "</td>";
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