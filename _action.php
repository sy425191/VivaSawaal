<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $groupj = $_POST['groupj'];
	 $course = $_POST['course'];
	 $question = $_POST['question'];

	 $sql = "INSERT INTO $course (name,groupj,course,question)
	 VALUES ('$name','$groupj','$course','$question')";
	 if (mysqli_query($conn, $sql)) {
		echo "Question added succesfully 👍";
		
		

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<div class="w3-center w3-red">
<a href="\" >Go to home page </a><br>
<a href="\submitq.php">Submit another question</a>
</div>