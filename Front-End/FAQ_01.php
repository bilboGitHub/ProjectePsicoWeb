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
    
    <h1>FAQ</h1>

<?php  
    $error="";
    $business_FAQ = new business_FAQ();
    $arrayFAQ = $business_FAQ-> Llistar($error); //<--- problema:Uncaught ArgumentCountError

    if ($error=="") {
        echo "<table border='2'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>PREGUNTA</th>";
        echo "<th>RESPOSTA</th>";
        echo "<th>CATEGORIA</th>";
        echo "<th>DATA</th>";
        echo "</tr>";

        if($arrayFAQ) {
            foreach ($arrayFAQ as $faq) {
                echo "<tr>";
                echo "<td>" . $faq->getId_FAQ()."</td>";
                echo "<td>" . $faq->getPregunta_FAQ(). "</td>";
                echo "<td>" . $faq->getResposta_FAQ(). "</td>";
                echo "<td>" . $faq->getCategoria_FAQ(). "</td>";
                echo "<td>" . $faq->getData_FAQ(). "</td>";
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