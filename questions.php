<?php
include 'database.php';
?>

<!DOCTYPE html>
<html>
    <head>
      
         <link rel="stylesheet" href="\w3.css">
        
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
<body>
    

<div class=""></div>
    
    
 <div class="w3-hide-small w3-sidebar w3-bar-block w3-hide-medium w3-hide-large" style="width:25%;right:0">
     
  <h5 class="w3-bar-item">Navigate</h5>
  <a href="questions.php?course=chemistry&save=see+questions" class="w3-bar-item w3-button">Chemistry practical</a>
  <a href="questions.php?course=clab&save=see+questions" class="w3-bar-item w3-button">C programming</a>
  <a href="questions.php?course=eg&save=see+questions" class="w3-bar-item w3-button">EG</a>
  <a href="questions.php?course=maths&save=see+questions" class="w3-bar-item w3-button">Maths</a>
  <a href="questions.php?course=physics&save=see+questions" class="w3-bar-item w3-button">Physics</a>
  <a onclick="alert('chemistry section is under process')"  class="w3-bar-item w3-button">chemistry theory</a>
  <a href="questions.php?course=c&save=see+questions" class="w3-bar-item w3-button">C programming theory</a>
  <a href="questions.php?course=csw&save=see+questions" class="w3-bar-item w3-button">CSW</a>
  <a onclick="alert('Workshop section is under process')" class="w3-bar-item w3-button">Workshop</a>
  
</div>

<div>
<?php


$course = $_GET['course'];
 echo("Questions in - ");
 echo($course);
if(isset($_GET['save']))
{	
    

$sql = "SELECT id, question FROM $course ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo("<br><br>");
    while($row = $result->fetch_assoc()) {
        include 'label.php';
      //  echo "<br><br>Question id: ". $row["id"]. " - Question: ". $row["question"].  "<br>------------------- <br>" ;
    }
} else {
    echo "\n still there is No questions in $course section. Ask your friends to add questions";
}
}

?>
<div class="w3-container w3-red">
   <br>
    <div class="w3-red w3-container w3-center"> That's all we have in our database 😊</div>
  </div>  <br>
</div>
<div class="w3-box w3-red w3-center w3-button"><a href="submitq.php"> Submit your questions </a></div>
 <br><br><br><br>
</div>


</body>
</html>
<?php
$conn->close();
?>