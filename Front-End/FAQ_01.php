<!-- 1.	Mostra per pantalla la informació de les FAQs. 
Afegeix un Camp (camp de text o desplegable) per poder filtrar per id_FAQ. -->

<?php
    require "/Applications/MAMP/htdocs/ProjectePsicoWeb/Business/business_FAQ.php"; //<--apple
    // require "../Business/business_FAQ.php"; //<--windows
	
   	$business_FAQ = new business_FAQ();
   	$arrayFAQ = $business_FAQ-> selectFAQ();
?>

<h1>FAQ</h1>

<form method="post"  action="FAQ_01.php">
	FAQ:
	<select name="bdFAQ">
	<?php foreach ($arrayFAQ as $key ) { ?>
		<option value="<?php echo $key['id_FAQ'] ?>"><?php echo $key['id_FAQ']; ?></option>
	<?php }?>
	</select>
	<input type="submit" value="Filtrar" name="btFiltrar">
</form>

<?php
	if (isset($_POST["bdFAQ"]))
		$FAQFiltrat = $_POST["bdFAQ"];
	else
		$FAQFiltrat = "";

$arrayFAQ = $business_FAQ-> mostrarFAQPerID($FAQFiltrat); //<--- problema: Undefined variable: FAQ


echo "<table border='1'>";

	echo "<tr>";
	echo "<td>ID</td>";
	echo "<td>PREGUNTA</td>";
	echo "<td>RESPOSTA</td>";
	echo "<td>CATEGORIA</td>";
	echo "<td>DATA</td>";
	echo "</tr>";

// bucle que recorrera cada registre i mostra cada camp en la taula

if($arrayFAQ) {
	foreach ($arrayFAQ as $faq) {
		echo "<tr>";
		echo "<td>" . $faq->getId_FAQ() . "</td>";
		echo "<td>" . $faq->getPregunta_FAQ() . "</td>";
		echo "<td>" . $faq->getResposta_FAQ() . "</td>";
		echo "<td>" . $faq->getCategoria_FAQ() . "</td>";
		echo "<td>" . $faq->getData_FAQ() . "</td>";
		echo "</tr>";
	}
}

echo "</table>"; // fi de la taula


?>
