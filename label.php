<html>
    <head>
        <link rel="stylesheet" href="w3.css">
    </head>
    <body>
        <?php $id = $row["id"] ?>
        <div class="w3-container w3-grey w3-medium "><br>
           Question ID: <?php echo($row["id"]); ?><br>
            <div class="w3-green w3-medium">
                <?php echo($row["question"]); ?>
                
            </div>
           <!-- <div class="w3-button w3-red w3-center"><a href="answerid.php?course=<?php echo "$course" ?>&id=<?php echo "$id" ?>" target="_blank">See answers</a></div>
            -->
           <?php
           $query = "SELECT ans1 FROM answers WHERE course='".$course."' AND id='".$id."'";

           $results = $conn->query($query);
           $rows = $results->fetch_assoc();

           $ans1 = $rows['ans1'];

          
           ?>

           <button onclick="myFunction('<?php echo "$id" ?>')" class="w3-button w3-block w3-left-align">See answer</button>
            <div id="<?php echo "$id" ?>" class="w3-hide">
               <p><?php  
                if ($results->num_rows > 0)
          {
     
           include 'label2.php';
    
       
          }
           else{
                 echo "Be first to answer this";
    
           include 'ansbox.php';
       
           }
           
               ?>
               <br></p>
            </div> 

            <br>
        </div>
        <br>
<script>
    function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
    </body>
</html>