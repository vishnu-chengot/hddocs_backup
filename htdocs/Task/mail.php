<!-- cpvishnutest@gmail.com
password =Revuchengot -->


 <?php  
   // ini_set("sendmail_from", "cpvishnutest@gmail.com");  
   // $to = "sarashiva130@gmail.com";//change receiver address  
   // $subject = "This is subject";  
   // $message = "This is simple text message.";  
   // $header = "From:cpvishnutest@gmail.com \r\n";  
  
   // $result = mail ($to,$subject,$message,$header);  
  
   // if( $result == true ){  
   //    echo "Message sent successfully...";  
   // }else{  
   //    echo "Sorry, unable to send mail...";  
   // }  
?> 


<?php
// // ini_set("SMTP","mail.gmail.com");
// $to = "sarashiva130@gmail.com";
// $subject = "My subject";
// $txt = "Hello world!";
// $headers = "From:cpvishnutest@gmail.com" . "\r\n" .
// "CC: somebodyelse@example.com";

// $result = mail($to,$subject,$txt,$headers);

// if( $result == true ){  
//       echo "Message sent successfully...";  
//    }else{  
//       echo "Sorry, unable to send mail...";  
//    }


$receiver = "sarashiva130@gmail.com";
$subject = "Email Test via PHP using Localhost";
$body = "Hi, there...This is a test email send from Localhost.";
$sender = "From:cpvishnutest@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>