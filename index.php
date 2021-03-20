
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="\w3.css">
    
<style>
.Whatsapp{
    color: black;
    cursor: pointer;
    font-size: 12px;
}
.w3-card-4{

}
.w3 a:link, a:visited {
    
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

.w3 a:hover, a:active {
  background-color: red;
 
}
 a{
    display: none;
   }
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>


<?php
include 'database.php'
?>


<body>
    <div class="w3-medium">
<!--<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Notification!</strong> Please add some questions in C practical section
</div>
-->
<br><br>
<center>
<div class="w3"><a href="submitq.php" target="_blank" >Click here to submit questions</a></div>

<br><br><br>

<fieldset>
    <legend>Question store</legend>
    <h2>Select course:</h2>
    <form action="questions.php" method="get">
        <select name="course">
            <option value="chemistry">CHEMISTRY</option>            
            <option value="eg">EG (enginnering graphics)</option>
            <option value="clab">C LAB (Practical)</option>
            <option value="physics">PHYSICS </option>
            <option value="c">C PROGRAMMING (Theory)</option>
            <option value="maths">MATHS</option>
            <option value="csw">CSW</option>
          </select>
<br>
<br>
<input type="submit" value="See questions" name="save">
<br>
<i><br><br><br><br></hr>
    45 questions in chemistry has been added from viva of G2 group check it out now😁
</i>
    </form>
</fieldset>
</center>
<br><br>


<script>

    // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<div class="w3-container">
    
   <div class="w3-card-4 w3-third">

<header class="w3-container w3-blue">
  <h1>Chemistry</h1>
</header>

<div class="w3-container">
  <table class="w3-table">
<tr>
  <th>Group</th>
  <th>Date</th>
  <th>Shift</th>
  
</tr>
<tr>
  <td>G2</td>
  <td>8th March</td>
  <td>Morning (9-12)</td>
</tr>
<tr>
  <td>F2</td>
  <td>8th March</td>
  <td>Evening(2-5)</td>
</tr>
<tr>
  <td>I2</td>
  <td>9th March</td>
  <td>Morning (9-12)</td>
</tr>
<tr>
  <td>H1</td>
  <td>9th March</td>
  <td>Evening(2-5)</td>
</tr>
<tr>
  <td>I1</td>
  <td>10th March</td>
  <td>Morning (9-12)</td>
</tr>
<tr>
  <td>J2</td>
  <td>10th March</td>
  <td>Evening(2-5)</td>
</tr>
<tr>
  <td>J1</td>
  <td>11th March</td>
  <td>Morning (9-12)</td>
</tr>
<tr>
  <td>G1</td>
  <td>11th March</td>
  <td>Evening(2-5)</td>
</tr>
<tr>
  <td>H2</td>
  <td>12th March</td>
  <td>Morning (9-12)</td>
</tr>
<tr>
  <td>F1</td>
  <td>12th March</td>
  <td>Evening(2-5)</td>
</tr>
</table>
</div>

<footer class="w3-container w3-blue">
  <h5>Schedule</h5>
</footer>

</div>

<div class="w3-card-4 w3-third">

<header class="w3-container w3-blue">
  <h1>Engineering graphics</h1>
</header>

<div class="w3-container">
    <table class="w3-table">
<tr>
  <th>Group</th>
  <th>Date</th>
  <th>Shift</th>
  
</tr>
<tr>
  <td>F1, I1, H1, J1</td>
  <td>20th March</td>
  <td>Morning (10-1)</td>
</tr>
<tr>
  <td>G1, I2, J2</td>
  <td>20th March</td>
  <td>Evening(2-5)</td>
</tr>
<tr>
  <td>F2, H2</td>
  <td>21st March</td>
  <td>Morning (10-1)</td>
</tr>
<tr>
  <td>G2</td>
  <td>21st March</td>
  <td>Evening(2-5)</td>
</tr>
<br>
</table>
<br><br><br><br><br><br><br><br><br>
</div>

<footer class="w3-container w3-blue">
  <h5>Schedule</h5>
</footer>

</div>

<div class="w3-card-4 w3-third">

<header class="w3-container w3-blue">
  <h1>C practical</h1>
</header>

<div class="w3-container">
  <p>Data not avilable 😂</p>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="w3-container w3-blue">
  <h5>Schedule</h5>
</footer>
</div>
</div>

</div>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.10/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.10/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCkJNAKnI_X3PnsHAW2G-zCzPUxbAz4vFU",
    authDomain: "vivasawaal.firebaseapp.com",
    projectId: "vivasawaal",
    storageBucket: "vivasawaal.appspot.com",
    messagingSenderId: "648247713533",
    appId: "1:648247713533:web:3c81ee89cfcba736caa894",
    measurementId: "G-Y7X71JGCK3"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
</body>
</html>
