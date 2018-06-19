<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_FAQ.php"; //<--apple
    require "../Business/business_FAQ.php"; //<--windows
?>

<html>
<head></head>
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

</body>
</html>