<?php
$msg = '';
$msgClass = '';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
 
    if(!empty($email) && !empty($name) && !empty($message)){
        
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                echo "Please fill in valid email";
          
            } else {
    $toEmail = 'nathaniel@nathanbud.com';
    $from = $email;
    $subject = 'Contact Request From'; 
    $body = '<h2>Contact Request</h2>
         <h4>Name</h4><p>'.$name.'</p>
         <h4>Email</h4><p>'.$from.'</p>
         <h4>Message</h4><p>'.$message.'</p>';

         $headers = "MIME-Version: 1.0" ."\r\n";
         $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";
         $headers .= "From: ".$name. "<".$from.">". "\r\n";

         if(mail($toEmail,$subject,$body,$headers)){
            echo "success";
            $name = $email = $message = '';
           
         }else{
             echo "The server failed, try again later ";
         }
  }
}else {
    echo "Please fill in all fields";
    
}
}   



?>