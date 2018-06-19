<!-- 2.	Crea un formulari per poder inserir una nova FAQ en la Base de Dades. -->

<?php
    require "../Business/business_FAQ.php";
?>

<h1>INSERTAR FAQ</h1>

<form action="FAQ_02.php" method="post">
	<table border='1'>
		<tr>
			<td>id:</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>pregunta:</td>
			<td><input type="text" name="pregunta"></td>
		</tr>
		<tr>
			<td>resposta:</td>
			<td><input type="text" name="resposta"></td>
		</tr>
		<tr>
			<td>categoria:</td>
			<td><input type="text" name="categoria"></td>
		</tr>
		<tr>
			<td>data:</td>
			<td><input type="text" name="data"></td>
		</tr>
	</table>			
		<br><input type="submit" value="INSERTAR" name="btInsert">
</form>


<?php

// establir i realitzar consulta. guardem en variables

if (isset($_POST["btInsert"])) {
	
	$objFAQ = new business_FAQ($_POST["id"], $_POST["pregunta"], $_POST["resposta"], $_POST["categoria"], $_POST["data"]);


			
	$resultat = $objFAQ -> insertar($error);

	if ($resultat)
		echo "Registre insertat";
	else
		echo "Error en la inserció";

	// fi de la taula

}

?>