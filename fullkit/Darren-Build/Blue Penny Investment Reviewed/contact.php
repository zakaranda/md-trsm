<?php 
if(isset($_POST['submit'])){
    $to = "kiady.razafindrabe@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Thank you - Blue Penny";
    $message = $name . " :" . "\n\n" . $_POST['message'];
    $message2 = "Thank you for your message. We will get back to you as soon as possible." ;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
	echo '<script language="javascript">';
	echo 'setTimeout(function() { alert("Your message has been sent...") }, 2000);';
	echo '</script>';
}
?>