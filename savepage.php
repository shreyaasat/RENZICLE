<?php
include "config.php";
session_start();
?>
<?php
   
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $add1 = $_POST['address1'];
    $add2 = $_POST['address2'];
    $id = $_SESSION['id'];

    $sql1 = "UPDATE signup_tb SET email = '$email', mobile = '$mobile', address1 = '$add1', address2 = '$add2' where id = '$id'";
    
    $result1= $conn->query($sql1);
    if ($result1==true)
    
    {
        
        $_SESSION['email']=$email;
        $_SESSION['mobile']=$mobile;
        $_SESSION['address1']=$add1;
        $_SESSION['address2']=$add2;
        echo "<script type='text/javascript'>alert('Updated successfully');location='mypage.php';</script>";
        
         
    }
    else 
    {
        echo '<script type"text/javascript"> alert ("Account Details Not Updated!") </script>';
    }


?>