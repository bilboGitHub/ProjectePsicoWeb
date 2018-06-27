<!DOCTYPE html>

<?php
    // require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_usuari.php"; //<--apple
    require "../Business/business_usuari.php"; //<--windows
?>

<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salome-Psicolegs Infanto-juvenil Barcelona</title>
    <link rel="stylesheet" href="css/normalize.css"> 
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 
    <!-- <link rel="stylesheet" href="css/main.css"> -->
</head>


<body><!--  -->
    <main>
		<p>soc doctor</p>
		
		<h1>DADES</h1>

		<?php

		$id_usuari=$_GET['id_usuari'];

		$error="";
		$business_usuari = new business_usuari();
		$arrayusuari = $business_usuari-> mostrarusuariPerID($id_usuari);

		echo "<table border='1'>";

			echo "<tr>";
			echo "<td>EMAIL</td>";
			echo "<td>CONTRASENYA</td>";
			echo "</tr>";

		// bucle que recorrera cada registre i mostra cada camp en la taula

		foreach ($arrayusuari as $usu) {
			echo "<tr>";
			echo "<td>" . $usu->getemail_usuari() . "</td>";
			echo "<td>" . $usu->getcontrasenya_usuari() . "</td>";
			echo "</tr>";
		}

		echo "</table>"; // fi de la taula


		?>


    </main>
</body>


