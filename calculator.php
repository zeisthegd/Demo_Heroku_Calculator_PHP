<html>
<body>
<?php 
	$number1 = $_GET["number1"];
	$number2 = $_GET["number2"];
	$result = 0;
	$operation = "";
	if (isset($_GET["add"])) { 
		$result = $number1 + $number2;
		$operation = "Addition";
	} elseif(isset($_GET["subtract"])) {
		$result = $number1 - $number2;
		$operation = "Subtraction";
	} elseif(isset($_GET["multiply"])) {
		$result = $number1 * $number2;
		$operation = "Multiplication";
	} else {
		if ($number2 == 0) {
			$result = "N/A";
			$operation = "Fail to calculate";
		}
		else {
			$result = $number1 / $number2;
			$operation = "Division";	
		}
	}
	
	echo "<h1>";
	echo $operation.": The result is " .$result;
	echo "</h1>";  
?>
</body>
</html>