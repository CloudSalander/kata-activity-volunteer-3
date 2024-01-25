<?php
/*TO-DO
- Data validation of json file
- Put file by terminal program invocation
- With excel files too?
*/
include('files/activities.php');

function LoadStudents() : array {
	$str = file_get_contents('./files/students.json');
	$array = json_decode($str, true);
	return $array['alumnes'];
}

function showOptions(array $activities): void {
	foreach($activities as $key=>$activity) {
		echo ($key+1)." - ".$activity.PHP_EOL;
	}
}

function checkOptionInput(int $activities_count,string $option): bool {
	return is_numeric($option) && $option > 0 && $option <= $activities_count;
}

function checkActivity() {
	if(isset($_POST['activity']) && $_POST['activity'] != "") {
		return ucfirst($_POST['activity']);
	}
}


$students = LoadStudents();
//showOptions($activities);

$activity = checkActivity();

if($activity) {
	$student_index = array_rand($students);
	$student_name = $students[$student_index]['nom'];
	$student_surname = $students[$student_index]['cognom'];
	echo "Li toca a ".$student_name." ".$student_surname." fer ".$activity." felicitats!!"; 
}

?>
