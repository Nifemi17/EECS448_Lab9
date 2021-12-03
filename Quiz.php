<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$total = 100;
$passed = 5;
$q1 = $_POST["Q1"];
$q2 = $_POST["Q2"];
$q3 = $_POST["Q3"];
$q4 = $_POST["Q4"];
$q5 = $_POST["Q5"];

	echo "Question 1: What is the capital of Portugal? <br>";
	echo "You answered: ".$q1." <br>";
	echo "Correct answer: Lisbon <hr>";
	echo "Question 2: What is the capital of Alabania? <br>";
	echo "You answered: ".$q2." <br>";
	echo "Correct answer: Tirana <hr>";
	echo "Question 3: What is the capital of Austria? <br>";
	echo "You answered: ".$q3." <br>";
	echo "Correct answer: Vienna <hr>";
	echo "Question 4: What is the capital of Ethiopia? <br>";
	echo "You answered: ".$q4." <br>";
	echo "Correct answer: Addis Ababa <hr>";
	echo "Question 5: What is the capital of Mauritania? <br>";
	echo "You answered: ".$q5." <br>";
	echo "Correct answer: Nouakchott <hr>";

	if ($q1 != "Lisbon")
	{
		$total = $total - 20;
		$passed = $passed -1;
	}
	if ($q2 != "Tirana")
	{
		$total = $total - 20;
		$passed = $passed -1;
	}
	if ($q3 != "Vienna")
	{
		$total = $total - 20;
		$passed = $passed -1;
	}
	if ($q4 != "Addis Ababa")
	{
		$total = $total - 20;
		$passed = $passed -1;
	}
	if ($q5 != "Nouakchott")
	{
		$total = $total - 20;
		$passed = $passed -1;
	}

	echo "Your total score is " .$total. "%.";
	echo "<br>";
	echo "You got " .$passed. " question(s).\n";
	echo "<br>";
	echo "Thanks for taking my quiz!\n";
?>
