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

$mem1 = $_POST["name1"];
$mem1Grade = $_POST["grade1"]

$mem2 = $_POST["name2"];
$mem2Grade = $_POST["grade2"]

$mem3 = $_POST["name3"];
$mem3Grade = $_POST["grade3"]

$mem4 = $_POST["name4"];
$mem4Grade = $_POST["grade4"]

$mem5 = $_POST["name5"];
$mem5Grade = $_POST["grade5"]

$mem6 = $_POST["name6"];
$mem6Grade = $_POST["grade6"]

echo $name . "<br>";
echo "Overall Grade: " . $grade;

?>
</body>
</html>
