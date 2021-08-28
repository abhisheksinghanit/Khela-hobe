<?php 
require('db.php');
    $email =$_POST['email'];
    $src ="SELECT email FROM users WHERE email ='$email'";
    $rs=mysqli_query($con,$src)or die(mysqli_error($con));
    if(mysqli_num_rows($rs)>0){
        echo "you are already registered";
    }
    ?>