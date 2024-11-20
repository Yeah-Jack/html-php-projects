<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<link rel="stylesheet" href="/css/style.css" />
</head>

<body>
	<?php
    $result = '';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    $operator = $_POST["operator"];
	    $number1 = $_POST["number1"];
	    $number2 = $_POST["number2"];

	    if (is_numeric($number1) && is_numeric($number2)) {
	        switch ($operator) {
	            case 'plus':
	                $result = $number1 + $number2;
	                break;
	            case 'minus':
	                $result = $number1 - $number2;
	                break;
	            case 'multiply':
	                $result = $number1 * $number2;
	                break;
	            case 'divide':
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
	    } else {
	        $result = 'Please enter valid numbers';
	    }
	}
	?>

	<form method="post">
		<label for="operator">Operator</label>
		<select name="operator" required>
			<option value="plus">Plus</option>
			<option value="minus">Minus</option>
			<option value="multiply">Multiplication</option>
			<option value="divide">Division</option>
		</select>
		<br>
		<label for="number1">Number 1</label>
		<input type="number" name="number1" required>
		<br>
		<label for="number2">Number 2</label>
		<input type="number" name="number2" required>
		<br>
		<button type="submit">Calculate</button>
	</form>

	<p>Result: <?php echo htmlspecialchars($result); ?></p>
</body>

</html>