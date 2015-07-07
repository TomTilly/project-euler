<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Problem 3 from Project Euler | PHP</title>
	</head>
	<body>

		<?php

/*

Problem: https://projecteuler.net/problem=3

Problem 3

The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

Solution by Tom Tillistrand

Solved for 13892 instead of 600851475143 because browser cannot handle larger number.

*/

$number = 13892;
$index = ceil($number/2); // The largest possible factor of any number is half of it, so we start our index here
$primeFound = false; // Flag variable set to false initially. When prime factor is found, it's set to true to stop the loop

function isPrime($testNum){
	for($i = 2; $i <= ($testNum/2); $i++){
		if($testNum % $i === 0){
			return false;
		}
	}
	return true;
}

while(!$primeFound){
	if($number % $index === 0){
		if(isPrime($index)){
			echo "<p>The largest prime factor of 13892 is $index";
			$primeFound === true;
			break;
		}
	}
	$index--;
}


?>
	</body>
</html>