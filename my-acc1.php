<?php
 session_start();
 include ("config.php");
?>

<style>
.btn-group button {
  
  background-color: rgb(5,67,107); 
  width:90px;
  display: flex;
  justify-content: center;
  
  border: 1px solid green; 
  color: white;
  padding: 5px 15px; 
  cursor: pointer; 
  float: left; 
}


.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; 
}


.btn-group button:hover {
  background-color: grey;
}
</style>


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
                
                    <form name="Form" action="editpage.php" method="post">   
                    <div class="title">My Account</div>
                    
                    <label>First Name</label>
                    
                    <input type = "text" id="fname" name="fname" value="<?=$_SESSION['fname']?>" disabled>

                    <label>Last Name</label>
                    <input type = "text" name="lname" value="<?=$_SESSION['lname']?>" disabled>
                                                         
                    <label>Email</label>
                    <input type = "text" name="email" value="<?=$_SESSION['email']?>" disabled>
                                     
                   <label>Contact Number</label>
                   <input type = "text" name="mobile" value="<?=$_SESSION['mobile']?>" disabled>
                    
                    <label>DOB</label>
                    <input type = "text" name="dob" value="<?=$_SESSION['dob']?>" disabled>
                   
                    <label>Address Line 1</label>
                    <input type = "text" name="address1" value="<?=$_SESSION['address1']?>" disabled>
                    
                    <label>Address Line 2</label>
                    <input type = "text" name="address2" value="<?=$_SESSION['address2']?>" disabled>
                                        
                    
                    <br>
                    <br>
                    <u>
                    <div class="btn-group" >

                    <button style="width:33.3%" >Edit</button>
                    <button type='submit' style="width:33.3%" formaction='delete.php' ; onclick = 'return confirmdelete()'>Delete</button>
                    <button type='submit' style="width:33.3%" formaction='mypage.php'; return true;>Cancel</button>
                    </div> 
                   
                  
                    </u>


                </form>
                
            </div>
        </div>

                       
            
        </div>
    

    </body>

    <?php
   
?>
<script>
  function confirmdelete()
  {
  return confirm('ARE YOU SURE YOU WANT TO DELETE YOUR ACCOUNT');
  }
</script>

</html>

