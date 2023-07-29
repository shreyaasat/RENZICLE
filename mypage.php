
<?php
 session_start();
 $e= $_SESSION['email'];
 $f= $_SESSION['fname'];
 ?>

<html>
  <link rel="stylesheet" type="text/css" href="map-page-style.css">
  <link rel="stylesheet" href="index-style.css">
<body>

    <div class="navbar">
        <div class="icon">
            <img src="images\logo.jpeg" class="logo">
        </div>
            <div class="menu" id="home">
                <a href="my-acc1.php">My Account</a>
                <a href="index.html">Logout</a>
            </div>
    </div>

  <div class="searchbar">
    
            <input type="text" placeholder="Search location">
            <a class="cur">Choose current location</a>
        
      </div>
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.0407049359465!2d80.15123961378842!3d12.840646221214945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5259af8e491f67%3A0x944b42131b757d2d!2sVellore%20Institute%20of%20Technology%20-%20VIT%20Chennai!5e0!3m2!1sen!2sin!4v1662436032999!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  


</body>
</html>