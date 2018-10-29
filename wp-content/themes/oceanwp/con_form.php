<?php
@$submit =($_POST['submit']);

@$name = strip_tags($_POST['Name']) ;
@$email =  strip_tags($_POST['Email']) ;
@$mobile =  strip_tags($_POST['Mobile']) ;
@$message =  strip_tags($_POST['Message']) ;
 
 echo $submit;
 echo $name;
 echo"g";

if($submit)
{
 $connect = mysqli_connect("localhost","root","");
        mysqli_select_db($connect, "wpress18");
    
   $usercheck = mysqli_query($connect, "SELECT email FROM con_form WHERE email= '$email'");
   $count = mysqli_num_rows($usercheck);
    

if ($name && $email && $mobile)
{
        echo"uu";
        mysqli_query($connect, "
        INSERT INTO con_form VALUES ('$name','$email','$mobile','$message')  
        ");
           
       // header("Location: ".$_SERVER['HTTP_REFERER']);

        }
        
       

}



?>
