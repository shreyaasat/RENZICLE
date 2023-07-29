<?php
include "config.php";
session_start();
?>

<?php
   
    $id = $_SESSION['id'];

    $sql2 = "DELETE FROM signup_tb where id = '$id'";
    
    $result2= $conn->query($sql2);
    if ($result2==true)
    
    {
        
        echo "<script type='text/javascript'>alert('Account deleted successfully');location='index.html';</script>";
        
         
    }
    else 
    {
        echo '<script type"text/javascript"> alert ("Account cannot be deleted. Please try again!") </script>';
    }


?>