<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['submit'])) {
  # code...

//Load Composer's autoloader
//require 'vendor/autoloaderoad.php';
require 'mailer/src/Exception.php';
require 'mailer/src/PHPMailer.php';
require 'mailer/src/SMTP.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mailtoanjanainfotech@gmail.com';                 // SMTP username
    $mail->Password = 'anjana221015';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; 
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                                   // TCP port to connect to

    //Recipients
    $mail->setFrom('mailtoanjanainfotech@gmail.com', 'Ajith Kumar');
$mail->addAddress('mailtoanjanainfotech@gmail.com', 'Ajith Kumar');     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('mailtoanjanainfotech@gmail.com', 'ajith kumar');
   // $mail->addCC('cc@example.com');
   // $mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
     //<img src=\"cid:logoimg\"/>
     $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'SRI AYYAN KENDRA VIDYALAYA INTERNATIONAL SCHOOL';
  $mail->Body = "
       
        <hr>
        
    <h1>  HEY! ADMIN <span style='text-transform:capitalize;'> you got a new feedback</span> </h1>
    <p style='margin-left:40px; font-style: italic; font-family:Times New roman'> You Have Got a New Subscriptions</p>
    

<div style='margin-left:60px;'>
<b style=font-size:15px; >Name:  </b>&nbsp;&nbsp;&nbsp;{$_POST['tname']}<br>
<b style=font-size:15px; >Email:  </b>&nbsp;&nbsp;&nbsp;{$_POST['email']}<br>
<b style=font-size:15px;>subject: </b >&nbsp;&nbsp;&nbsp;{$_POST['subject']}<br>
<b style=font-size:15px;>Message:  </b >&nbsp;&nbsp;&nbsp;{$_POST['msg']}<br>


</div>";
    //Content
   
  

    if($mail->send()){


   echo "<script> alert('your message has been sucessfully  sent'); </script>";


}
else{
  echo "<script> alert('not send'); </script>";
}
}

?>

