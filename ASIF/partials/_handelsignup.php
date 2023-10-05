<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
include '_dbconnect.php';

    $user_email=$_POST['signupemail'];
    $pass=$_POST['signuppass'];
    $cpass=$_POST['csignuppass'];

    $existsql="SELECT * FROM `user` WHERE email='$user_email'";
    $result=mysqli_query($conn,$existsql);
    $numrows=mysqli_num_rows($result);
    if($numrows > 0){
        
    }
    else{
        if($pass == $cpass){
            $hash=password_hash($pass, PASSWORD_DEFAULT);
            $sql="INSERT INTO `user` (`email`, `password`, `tstamp`) VALUES ('$user_email', '$hash', current_timestamp())";
            $result=mysqli_query($conn,$sql);
            if($result){
                header("location:/ASIF/signup.php?signupsuccess=true");
                exit();
            }
        }
        
    }
    header("location:/ASIF/signup.php?signupsuccess=false&error=$showError");
}
?>


