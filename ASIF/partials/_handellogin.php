<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
include '_dbconnect.php';

    $email=$_POST['loginemail'];
    $pass=$_POST['loginpass'];
    

    $sql="SELECT * FROM `user` WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $numrows=mysqli_num_rows($result);
    if($numrows==1){
        $row=mysqli_fetch_assoc($result);
        if(password_verify($pass,$row['password'])){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['email']=$email;
            echo"logged in " . $email;
            header("location:/ASIF/index.php");
        }
       
    }
    header("location:/ASIF/index.php");
}
?>


