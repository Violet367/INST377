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
$notes = $_POST["notes"];

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

echo "<b>". $name . "</b><br>";
echo "<b>Overall Grade:</b> " . $grade . "<br>";


$datetime = date_diff($startTime, $endTime);
echo $datetime->format('<b>Presentation Time:</b> %i minute presentation');
echo "<br>";

function letterGrade($value, $grade){

	$letterNum = array("A+" => 1, "A"=> 2, "A-" =>3, "B+" =>4, "B"=>5, "B-"=>6,
	"C+" =>7, "C"=> 8, "C-"=>9, "D+"=>10, "D"=>11, "D-"=>12, "F"=> 13);

	$numLetter = array(1 => "A+", 2 => "A", 3=>"A-", 4=>"B+", 5=>"B", 6=>"B-",
	7 => "C+", 8 => "C", 9 => "C-", 10 =>"D+", 11=> "D", 12=> "D-", 13=> "F");

	$num = $letterNum[$grade];

	switch ($value) {

		case 'Above and Beyond':

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

  echo "<br>" . $mem1 . " receives an " . letterGrade($mem1Grade,$grade) . "<br>";
}

if(!empty($mem2)){

  echo "<br>" . $mem2 . " receives an " . letterGrade($mem2Grade,$grade) . "<br>";
}

if(!empty($mem3)){

  echo "<br>" . $mem3 . " receives an " . letterGrade($mem3Grade,$grade) . "<br>";
}

if(!empty($mem4)){

  echo "<br>" . $mem4 . " receives an " . letterGrade($mem4Grade,$grade) . "<br>";
}

if(!empty($mem5)){

  echo "<br>" . $mem5 . " receives an " . letterGrade($mem5Grade,$grade) . "<br>";
}

if(!empty($mem6)){

  echo "<br>" . $mem6 . " receives an " . letterGrade($mem6Grade,$grade) . "<br>";
}

if(!empty($notes)){
	echo "<br>" . "<b>Notes</b>" . "<br>" . $notes;
}
?>
</body>
</html>
