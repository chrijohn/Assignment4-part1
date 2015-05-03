<?php

echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title> MultiTable </title>
</head>
<body>';

$minRow = $_GET['min-multiplicand'];
$maxRow = $_GET['max-multiplicand'];
$minCol = $_GET['min-multiplier'];
$maxCol = $_GET['max-multiplier'];
$validate = 1;

echo '<p><h1>Validator</h1></p>';
if (array_key_exists('min-multiplicand', $_GET)== false)
{
	echo '<p> min-multiplicand not present </p>';
	$validate = 0;
}
if (array_key_exists('max-multiplicand', $_GET)== false)
{
	echo '<p> max-multiplicand not present </p>';
	$validate = 0;
}
if (array_key_exists('min-multiplier', $_GET)== false)
{
	echo '<p> min-multiplier not present </p>';
	$validate = 0;
}
if (array_key_exists('max-multiplier', $_GET)== false)
{
	echo '<p> max-multiplier not present </p>';
	$validate = 0;
}
if ($minRow < 0)
{
	echo '<p> min-multiplicand is not a positive integer </p>';
	$validate = 0;
}
if ($maxRow < 0)
{
	echo '<p> max-multiplicand is not a positive integer </p>';
	$validate = 0;
}
if ($maxCol < 0)
{
	echo '<p> max-multiplier is not a positive integer </p>';
	$validate = 0;
}
if ($minCol < 0)
{
	echo '<p> min-multiplier is not a positive integer </p>';
	$validate = 0;
}


if ($maxRow < $minRow)
{
	echo '<p> min-multiplicand is larger than max-multiplicand </p>';
	$validate = 0;
}
if ($maxCol < $minCol)
{
	echo '<p> min-multiplier is larger than max-multiplier </p>';
	$validate = 0;
}

if ($validate==1)
{
	echo '<p> That is a valid input </p>';
}

if ($validate == 1)
{
	echo '<p><h2> Multiplication Table </h2>
	<p>
	<table border="1">

	<tr> <td></td>';

	for ($i = $minCol; $i < $maxCol + 1; $i++)
	{
		echo '<td>' . $i;
	}

	for ($i = $minRow; $i < $maxRow + 1; $i++)
	{
		echo '<tr><td>' . $i;
		for ($j = $minCol; $j < $maxCol + 1; $j++)
		{
			echo '<td>' . $i * $j;
		}
	}

	echo '<table>';
}
echo '</body>
</html>';



?>

