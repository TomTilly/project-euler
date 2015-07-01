/*

Problem: https://projecteuler.net/problem=3

Problem 3

The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

Solution by Tom Tillistrand

Solved for 13892 instead of 600851475143 because browser cannot handle larger number.

*/

var number = 13892;
var factor = Math.floor(number / 2);
var solutionFound = false;

function isPrime(number){
	for(var i = 2; i <= Math.sqrt(number); i++){
		if (number % i === 0){
			return false;
		}
	}
	return true;
}

while(solutionFound === false){
	if(number % factor === 0){
		if(isPrime(factor)){
			solutionFound = true;
			console.log(factor)
		}
	}
	factor--;
}
