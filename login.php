<?php
include ("config.php");
session_start();
?>
<?php
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $sql="SELECT * FROM signup_tb WHERE email='$email' AND password='$pwd'";
    if ($result=$conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $fname = $row["fname"];
            $lname = $row["lname"];
            $mobile = $row["mobile"];
            $address1 = $row["address1"];
            $address2 = $row["address2"];
            $dob = $row["dob"];
            $id = $row["id"];

        }   
        $result->free();
    }
    $result = mysqli_query($conn, $sql);  
    $count = mysqli_num_rows($result);  
       if($count==1)
    {        
            $_SESSION['email']=$email;
            $_SESSION['id']=$id;
            $_SESSION['fname']=$fname;
            $_SESSION['lname']=$lname;
            $_SESSION['mobile']=$mobile;
            $_SESSION['address1']=$address1;
            $_SESSION['address2']=$address2;
            $_SESSION['dob']=$dob;
            $_SESSION['id']=$id;
            header('location:mypage.php');       
        }
    else
    {
                echo "<h1> Login failed. Invalid username or password.</h1>";   
              
    }

?> 