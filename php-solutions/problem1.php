<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Problem 1 from Project Euler | PHP</title>
	</head>
	<body>

		<?php

/*

Problem: https://projecteuler.net/problem=1
 
Problem 1

If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below 1000.

Code by Tom Tillistrand

*/

$total = 0;

for($i = 3; $i < 1001; $i++){
	if (($i % 3 === 0 ) || ($i % 5 === 0)){
		$total += $i;
	}
}

echo 'The sum of all the multiples of 3 or 5 below 1000 is ' . $total;

?>
	</body>
</html>