<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wechselgeldberechner</title>
	<link rel="stylesheet" href="/css/style.css" />
</head>

<body>
	<?php
	$einCent = 0.01;
	$zweiCent = 0.02;
	$fuenfCent = 0.05;
	$zehnCent = 0.10;
	$zwanzigCent = 0.20;
	$fuenfzigCent = 0.50;
	$einEuro = 1.00;
	$zweiEuro = 2.00;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$zuZahlenderBetrag = $_POST["zuZahlenderBetrag"];
		$gegebenerBetrag = $_POST["gegebenerBetrag"];

		echo 'Zu zahlender Betrag: ' . $zuZahlenderBetrag . '€ <br>';
		echo 'Gegebener Betrag: ' . $gegebenerBetrag . '€ <br>';


		$rueckgeld = $gegebenerBetrag - $zuZahlenderBetrag;
		echo 'Rückgeld: ' . $rueckgeld . '€ <br>';


		while ($rueckgeld >= 2) {
			$rueckgeld -= 2;
			$anzahlZweiEuro++;
		}

		while ($rueckgeld >= 1) {
			$rueckgeld -= 1;
			$anzahlEinEuro++;
		}

		while ($rueckgeld >= 0.5) {
			$rueckgeld -= 0.5;
			$anzahlFuenfzigCent++;
		}

		while ($rueckgeld >= 0.2) {
			$rueckgeld -= 0.2;
			$anzahlZwanzigCent++;
		}

		while ($rueckgeld >= 0.1) {
			$rueckgeld -= 0.1;
			$anzahlZehnCent++;
		}

		while ($rueckgeld >= 0.05) {
			$rueckgeld -= 0.05;
			$anzahlFuenfCent++;
		}

		while ($rueckgeld >= 0.02) {
			$rueckgeld -= 0.02;
			$anzahlZweiCent++;
		}

		while ($rueckgeld >= 0.01) {
			$rueckgeld -= 0.01;
			$anzahlEinCent++;
		}
	}
	?>

	<form method="post">
		<label for="zuZahlenderBetrag">Gebe den zu zahlenden Betrag in Euro ein</label>
		<input type="number" name="zuZahlenderBetrag" step=".01">
		<br>
		<label for="gegebenerBetrag">Gebe den gegebenen Betrag in Euro ein</label>
		<input type="number" name="gegebenerBetrag" step=".01">
		<br>
		<button type="submit">Berechnen</button>
	</form>

	<!-- 	<?php
	echo 'Dein Rückgeld beträgt ' . $rueckgeld . '€. <br>';
	echo 'Anzahl 2€ Münzen: ' . $anzahlZweiEuro . '<br>';
	echo 'Anzahl 1€ Münzen: ' . $anzahlEinEuro . '<br>';
	echo 'Anzahl 50c Münzen: ' . $anzahlFuenfzigCent . '<br>';
	echo 'Anzahl 20c Münzen: ' . $anzahlZwanzigCent . '<br>';
	echo 'Anzahl 10c Münzen: ' . $anzahlZehnCent . '<br>';
	echo 'Anzahl 5c Münzen: ' . $anzahlFuenfCent . '<br>';
	echo 'Anzahl 2c Münzen: ' . $anzahlZweiCent . '<br>';
	echo 'Anzahl 1c Münzen: ' . $anzahlEinCent . '<br>';
	?> -->
</body>

</html>