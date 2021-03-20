<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	
	 $id = $_POST['id'];
	 $course = $_POST['course'];
	 $answer = $_POST['answer'];

	 $sql = "INSERT INTO answers (id,ans1,course)
	 VALUES ('$id','$answer','$course')";
	 if (mysqli_query($conn, $sql)) {
		echo "Answer added succesfully !, Now you can close the window";

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>