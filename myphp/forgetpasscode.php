<?php
session_start();

$email=$_POST['email'];
$conn=mysqli_connect("localhost","root","","phpdb");

$sel="select * from registtbl where email='$email'";

$r=mysqli_query($conn,$sel);
$k=mysqli_fetch_array($r,MYSQLI_BOTH);

$otp=rand(100000,999999);

if($k['2']==$email)
{
    require 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    
    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.digitalcoders.in';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'demo@digitalcoders.in';                 // SMTP username
    $mail->Password = 'Demo#Digital#123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
            
    $mail->setFrom('demo@digitalcoders.in', 'Mailer');
    $mail->addAddress($email, 'User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'your one time password';
    $mail->Body    = 'your OTP is : '.$otp;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $up="update registtbl set otp='$otp' where email='$email' ";
    

        if(mysqli_query($conn,$up))
        {
            $_SESSION['us']=$email;
            header("location:otp.php");
        }
    else {
        echo "OTP not update";
    }
       

}
}
else
{
    echo "email id not match";
}

?>
