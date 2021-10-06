<?php
   $from = $email;
   $to = "chhotukolhapuri@gmail.com";
   $subject = "Franchisee Application";
   $message="";
   $message .= "<p><strong>First Name</strong>  : $fName\n<br/></p> "; 
   $message .= "<p><strong>Middle Name</strong>  : $mName\n<br/></p> "; 
   $message .= "<p><strong>Last Name</strong>  : $lName\n<br/></p> "; 
   $message .= "<p><strong>Email Id</strong>  : $email\n<br/></p> "; 
   $message .= "<p><strong>Mobile Number</strong>  : $mobile\n<br/></p> "; 
   $message .= "<p><strong>Profession</strong>  : $profession\n<br/></p> "; 
   $message .= "<p><strong>Residential Address</strong>  : $address\n<br/></p> "; 
   $message .= "<p><strong>City</strong>  : $city\n<br/></p> "; 
   $message .= "<p><strong>City Population</strong>  : $cityPopulation\n<br/></p> "; 
   $message .= "<p><strong>Shop Details</strong>  : $shopDetails\n<br/></p> "; 
   $message .= "<p><strong>Shop Address</strong>  : $shopAddress\n<br/></p> "; 
   $message .= "<p><strong>How did you know about chhotu ?</strong>  : $aboutChhotu\n<br/></p> "; 
   $message .= "<p><strong>Comment</strong>  : $comment\n<br/></p> "; 
   
   // Always set content-type when sending HTML email
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
   
   // More headers
   $headers .= 'From: <'.$from.'>' . "\r\n";
if(   
    mail($to,$subject,$message,$headers)){

    }else
    {
        
    }
     