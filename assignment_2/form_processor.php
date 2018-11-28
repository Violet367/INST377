<!DOCTYPE html>
<html>
<head>
	<title>Team Peer Evaluation - Processor</title>

	<style>
		div {
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

<?php
// The code to process recieved data from the form goes to here.

$name = $_POST["teamName"];
$startTime = $_POST["start"];
$endTime = $_POST["end"];
$grade = $_POST["grade"];
 
echo $name . "<br>";
echo "Overall Grade: " . $grade;

?>
</body>
</html>
