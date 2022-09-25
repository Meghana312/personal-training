<?php
if(isset($_GET['submit'])){
    $to = "meghanar3122001@gmail.com";



    $name = $_GET['name_contact'];
    $email= $_GET['email_contact'];
    $phone= $_GET['phone_contact'];
    $subject= $_GET['subject_contact'];
    $body= $_GET['message_contact'];
    $headers = 'From: '.$email . "\r\n";


    $body = "name : ".$name. "\r\n" .
    		"Phone : ".$phone. "\r\n" .
    		"Message : " . $body;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>
