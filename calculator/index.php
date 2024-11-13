<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<link rel="stylesheet" href="\css\style.css" />
</head>

<body>
	<?php

	$operator = $_POST["operator"];
	$number1 = $_POST["number1"];
	$number2 = $_POST["number2"];
	$result;

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		switch ($operator) {
			case 1:
				$result = $number1 + $number2;
				break;
			case 2:
				$result = $number1 - $number2;
				break;
			case 3:
				$result = $number1 * $number2;
				break;
			case 4:
				if ($number2 != 0) {
					$result = $number1 / $number2;
				} else {
					$result = 'Error: Division by zero';
				}
				break;
			default:
				$result = 'Invalid operator';
				break;
		}
		echo $result;
	}
	?>

	<form method="post">
		<label>
			Operator
			<br>
			1. Plus
			<br>
			2. Minus
			<br>
			3. Multiplication
			<br>
			4. Division
			<br>
		</label>
		<input type="number" name="operator" required>
		<br>
		<label>Number 1</label>
		<input type="number" name="number1" required>
		<br>
		<label>Number 2</label>
		<input type="number" name="number2" required>
		<br>
		<button type="submit">Calculate</button>
	</form>
</body>

</html>