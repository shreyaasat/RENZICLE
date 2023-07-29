<?php
include "config.php";
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$add1 = $_POST['address1'];
$add2 = $_POST['address2'];
$pwd1 = $_POST['password1'];
$pwd2 = $_POST['password2'];
$sql = "insert into signup_tb (fname,lname,dob,email,mobile,address1,address2,password) values ('$fname','$lname','$dob','$email','$mobile','$add1','$add2','$pwd1')";
$result=$conn->query($sql);
if ($result==true){

    echo "User Registration Successful";
}
else{
    echo "error:". $sql. "<br>". $conn->error;
}
$conn->close();

?>