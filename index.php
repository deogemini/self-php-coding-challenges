<?php

// write function that takes two numbers as arguments and returns their sum.

// Examples
// addition(3, 2) ➞ 5

// addition(-3, -6) ➞ -9

// addition(7, 3) ➞ 10

function addition($a, $b){
    return $a + $b;
}

// write function that convert minutes to seconds

// Examples
// convert(5) ➞ 300

// convert(3) ➞ 180

// convert(2) ➞ 120

function convert ($minutes){

    return $minutes * 60;
}

// In this challenge, a farmer is asking you to tell him how many legs can be counted among all his animals. The farmer breeds three species:

// chickens = 2 legs
// cows = 4 legs
// pigs = 4 legs
// The farmer has counted his animals and he gives you a subtotal for each species. You have to implement a function that returns the total number of legs of all the animals.

// Examples
// animals(2, 3, 5) ➞ 36

// animals(1, 2, 3) ➞ 22

// animals(5, 2, 8) ➞ 50

function animals($chickens, $cows, $pigs) {
    return ($chickens*2+$cows*4+$pigs*4);
   
}

// Create a function that takes an array containing only numbers and return the first element.

// Examples
// getFirstValue([1, 2, 3]) ➞ 1

// getFirstValue([80, 5, 100]) ➞ 80

// getFirstValue([-500, 0, 50]) ➞ -500

function getFirstValue($array) {
	return reset($array);
}

// Write a function that takes the base and height of a triangle and return its area.

// Examples
// triArea(3, 2) ➞ 3

// triArea(7, 4) ➞ 14

// triArea(10, 10) ➞ 50

function triArea($base, $height) {
	return ($base *  $height)/2;
	
}

// Create a function that finds the maximum range of a triangle's third edge, where the side lengths are all integers.

// Examples
// nextEdge(8, 10) ➞ 17

// nextEdge(5, 7) ➞ 11

// nextEdge(9, 2) ➞ 10

function nextEdge($side1, $side2) {
	$nextedge = $side1+$side2 - 1;
	if($nextedge >0 ){
		return $nextedge;
	}else{
		return "No negative edge";
	}
}


// Create a function that takes the age in years and returns the age in days.

// Examples
// calcAge(65) ➞ 23725

// calcAge(0) ➞ 0

// calcAge(20) ➞ 7300
// Notes
// Use 365 days as the length of a year for this challenge.
// Ignore leap years and days between last birthday and now.
// Expect only positive integer inputs.

function calcAge($age) {
	
	if(!is_int($age) || $age <=0){
		throw new InvalidArgumentException('Age must be a positive integer.');
	}
	
	$currentDate = new DateTime();
	$currentYear = (int) $currentDate->format('Y');
	$currentDayOfYear = (int) $currentDate->format('z');
	$birthYear = $currentYear-$age;
	
	$days = ($currentYear-$birthYear - 1)*365; // Days in complete years
	
		//adding days for the current year, excluding leap years and days after the lastbirthday
		for ($i = 0;  $i <=$currentDayOfYear; $i++){
			if(date('L', strtotime($birthYear. '-01-01'))){
				if($i<60){
					$days++; // Leap year starts on day 60
				}
			}else {
				if($i < 59){
					$days++;  //regular year starts on day 59'
				}
			}
		}
	return $days;
	
}

?>