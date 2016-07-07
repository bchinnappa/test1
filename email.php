<?php 
    
   ini_set( 'display_errors', 1 );
   error_reporting( E_ALL );
   $from = "sudheerkorrapati406@gmail.com";
   $to = "balaraju@olivetech.com";
   $subject = "PHP Mail Test script";
   $message = "This is a test to check the PHP Mail functionality";
   $headers = "From:" . $from;
   $mail1 = mail($to,$subject,$message, $headers);
    
    echo $mail1;
    
    if ($mail1){
   echo "Test email sent from EMQ";
    }else{
     echo "mail not sent! Check mail configuration and Try again";
    }



?>