<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multiplication Result</title>
</head>
<body>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];

	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$multiply=$num1+$num2;
	echo "<p> The First Name is: $fname</p>";
	echo "<p> The Last Name is: $lname</p>";

	echo "<p> The sum of $num1 and $num2 is: $multiply</p>";
}
?>
</body>
</html>