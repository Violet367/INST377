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
$startTime = new DateTime($_POST["start"]);
$startTime->format('Y-m-d H:i:s');
$endTime =new DateTime($_POST["end"]);
$endTime->format('Y-m-d H:i:s');
$grade = $_POST["grade"];

$mem1 = $_POST["name1"];
$mem1Grade = $_POST["grade1"];

$mem2 = $_POST["name2"];
$mem2Grade = $_POST["grade2"];

$mem3 = $_POST["name3"];
$mem3Grade = $_POST["grade3"];

$mem4 = $_POST["name4"];
$mem4Grade = $_POST["grade4"];

$mem5 = $_POST["name5"];
$mem5Grade = $_POST["grade5"];

$mem6 = $_POST["name6"];
$mem6Grade = $_POST["grade6"];

echo $name . "<br>";
echo "Overall Grade: " . $grade . "<br>";


$datetime = date_diff($startTime, $endTime);
echo $datetime->format('%i minute presentation');

function LetterGrade($value){

	$letterNum = array('A+' => 1, 'A'=> 2, 'A-'=>3, 'B+'=>4, 'B'=>5, 'B-'=>6,
	'C+' =>7, 'C'=> 8, 'C-'=>9, 'D+'=>10, 'D'=>11, 'D-'=>12, 'F'=> 13);

	$numLetter = array(1 => 'A+', 2 => 'A', 3=>'A-', 4=>'B+', 5=>'B', 6=>'B-',
	7 => 'C+', 'C'=> 8, 'C-'=>9, 'D+'=>10, 'D'=>11, 'D-'=>12, 'F'=> 13);

	$num = $letterNum[$grade];

	switch ($value) {

		case 'Above and Beyond':
			echo '1';
			echo $grade;
			return $grade;
			break;

		case 'Satisfactory':
			if($grade != 'F'){
				return $numLetter[$num+1];
			}else{
				return $grade;
			}
			break;

		case 'Unsatisfactory':
			if($num <= 10){
				return $numLetter[$num+3];
			}else{
				return 'F';
			}
			break;

		case 'Absent':
			return 'F';
			break;

		default:
			return 'F';
			break;
	}

}



if(!empty($mem1)){

  echo "<br>" . $mem1 . " receives an " . LetterGrade($mem1Grade) . "<br>";
}




?>
</body>
</html>
