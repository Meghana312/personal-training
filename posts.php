<?php
if(isset($_POST['submit'])){
    $to = "meghanar3122001@gmail.com";



    $name = $_POST['name_contact'];
    $email= $_POST['email_contact'];
    $phone= $_POST['phone_contact'];
    $subject= $_POST['subject_contact'];
    $body= $_POST['message_contact'];
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