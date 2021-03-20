<div class="w3-bar w3-red">
  <a href="\" class="w3-bar-item w3-button">Vivasawaal</a>
  <a href="questions.php?course=clab&save=see+questions" class="w3-bar-item w3-button w3-hide-small w3-third">C Lab viva</a>
  <a href="questions.php?course=chemistry&save=see+questions" class="w3-bar-item w3-button w3-hide-small w3-third">Chemistry viva</a>
  <a href="questions.php?course=eg&save=see+questions" class="w3-bar-item w3-button w3-hide-small w3-third">Eg viva</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
</div>

<div id="stv" class="w3-bar-block w3-red w3-hide w3-hide-large">
  <a href="questions.php?course=clab&save=see+questions" class="w3-bar-item w3-button">C Lab viva</a>
  <a href="questions.php?course=chemistry&save=see+questions" class="w3-bar-item w3-button">Chemistry viva</a>
  <a href="questions.php?course=eg&save=see+questions" class="w3-bar-item w3-button">Eg viva</a>
</div>

<?php
$servername = "Localhost";
$username = "id15312964_root";
$password1 = "Saurabh@123i";
$dbname = "id15312964_invitation";

// create connection
$conn = new mysqli($servername, $username, $password1, $dbname);
// check connection
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}

    $sql = "UPDATE visits SET visits = visits+1 WHERE id = 1";
    $conn->query($sql);

    $sql = "SELECT visits FROM visits WHERE id = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
        $visits = $row["visits"];
    }
}

?>

<html>
    <head><title>Viva Sawaal</title>
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
   
    </head>
    <body>
        <p class="">Total no of visits: <?php echo($visits); ?></p>
        <h4><i class= "cut">Work Hard </i>, <b> Work Smart 😎😎</b<</h4> <br><br>
        <style>
            p{
                text-align:right;
            }
            .cut{
                    text-decoration: line-through;
               }
        </style>
    <marquee >
   !! Please do not share your password with anyone. The purpose of this website is to help you score good marks in VIVA. Search answers of these questions by your own and please do not spam here by entering random data. Hope you'll will understand 
</marquee>
<script>
function myFunction() {
  var x = document.getElementById("stv");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

    </body>
</html>
