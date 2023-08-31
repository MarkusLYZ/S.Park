<?php

echo'
            <button class="open-button" onclick="openForm()">Contact Us</button>

            <div class="form-popup" id="myForm">
              <form method="post" action="sendemail.php" class="form-container enctype="multipart/form-data">
                <h1>Contact Us</h1>
                
                <label for="contactname"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="contactname" maxlength="50" required>
                
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" maxlength="50" required>

                <label for="message"><b>Query</b></label>
                <input type="text" placeholder="How can we help you?" name="message" maxlength="500" required>

                <label for="fileToUpload">Upload your photo:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" onclick="upload.php">
                <button type="submit" name="submit" class="btn">Submit</button>
                
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                <input type="hidden" name="emailsubject" value="contactform">
              </form>
            </div>

            <script>
            function openForm() {
              document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
              document.getElementById("myForm").style.display = "none";
            }
            </script>
            '
?>