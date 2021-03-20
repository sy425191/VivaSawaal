
<?php 
include 'database.php';

$id = $_GET["id"];
$course= $_GET["course"];

$new;

$query = "SELECT ans1, upvotes FROM answers WHERE course='".$course."' AND id='".$id."'";

$result = $conn->query($query);
$row = $result->fetch_assoc();

$upvotes = $row['upvotes'];
$ans1 = $row['ans1'];

   if ($result->num_rows > 0)
   {
     
        include 'label2.php';
    
       
}
else{
   echo "Be first to answer this";
    
       include 'ansbox.php';
       
}


?>
