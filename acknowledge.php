<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['send'])){
    $to= 'megan.w.lin@gmail.com';
    $subject='Comments from Bridle Paths Website';
    $message=' Name: '.$_POST['name']."\r\n\r\n";
    $message .=' Email: '.$_POST['email']."\r\n\r\n";
    $message.=' Comments: '.$_POST['comments'];
   mail($to, $subject, $message);
    
    echo "The email message was sent";
}
?>