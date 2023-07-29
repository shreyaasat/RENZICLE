<?php
include "config.php";
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vehicle Booking System</title>
        <link rel="stylesheet" href="my-acc-style.css">
        <link rel="stylesheet" href="login-style.css">
        <script src="login-verif.js"></script>
        
    </head>

    <body>
        
        <div id="banner">
            <a><img src="images/taxi3.jpg"  class="taxi"></a>
            <a><img src="images/vbslogo.jpg"  class="logo"></a>
        </div>
        
        <div class="container" id="container">
            <div class="login" style="height: 600px;">
                
                    <form name="Form" method="post" action="savepage.php" >   
                    <div class="title">My Account</div>
                    
                    <label>First Name</label>
                    
                    <input type = "text" id="fname" name="fname" value="<?=$_SESSION['fname']?>" disabled>

                    <label>Last Name</label>
                    <input type = "text" name="lname" value="<?=$_SESSION['lname']?>" disabled>
                                                         
                    <label>Email</label>
                    <input type = "text" name="email" value="<?=$_SESSION['email']?>" >
                                     
                   <label>Contact Number</label>
                   <input type = "text" name="mobile" value="<?=$_SESSION['mobile']?>" >
                    
                    <label>DOB</label>
                    <input type = "text" name="dob" value="<?=$_SESSION['dob']?>" disabled>
                   
                    <label>Address Line 1</label>
                    <input type = "text" name="address1" value="<?=$_SESSION['address1']?>" >
                    
                    <label>Address Line 2</label>
                    <input type = "text" name="address2" value="<?=$_SESSION['address2']?>">
                                        
                   
                    <br>
                    <br>
                    <u>
                    <div style="text-align:center ;">
                    <button type='submit' id="but"  style="margin-bottom: 10px;text-align: center;">Save</button><br>
                    </div>
                    </u>


                </form>
            </div>
        </div>     
        </div>
    </body>
</html>


