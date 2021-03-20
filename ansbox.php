
<div class="w3-container w3-red">
          Submit your Answer:
               <form action="actn.php" method="post">
                   <div style="float: left; width: 75%;margin-top: 6px;">
                  <textarea id="subject" name="answer" placeholder="Write  answer here.." style="width: 80%;" required></textarea>
                   <br></div>
                   <div style="display:none">
                       <input name="id" value="<?php echo "$id" ?>" >
                          <input name="course" value="<?php echo "$course" ?>" >
                   </div>
                  <br><br>
                       <input type="submit" name="save" value="add">
                
               </form>
               </div>
           <br><br>