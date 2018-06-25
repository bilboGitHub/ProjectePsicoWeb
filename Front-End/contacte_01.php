<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_contacte.php"; //<--apple
    require "../Business/business_contacte.php"; //<--windows
?>

<html>
<head></head>
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
        echo "</tr>";

        if($arraycontacte) {
            foreach ($arraycontacte as $faq) {
                echo "<tr>";
                echo "<td>" . $faq->getId_contacte()."</td>";
                echo "<td>" . $faq->getnom_contacte(). "</td>";
                echo "<td>" . $faq->getcognoms_contacte(). "</td>";
                echo "<td>" . $faq->getemail_contacte(). "</td>";
                echo "<td>" . $faq->getData_contacte(). "</td>";
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