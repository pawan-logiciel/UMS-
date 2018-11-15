<?php 
$email=$_POST['email'];
$name=$_POST['name'];

App::get('database')->insert('users',[

	'name'=>$_POST['name'],
	'username'=>$_POST['username'],
	'email'=>$_POST['email'],
	'password'=>$_POST['password'],
	'status'=>1

]);
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'iampavanarora@zoho.com';                 // SMTP username
    $mail->Password = 'Tricky@419197';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('iampavanarora@zoho.com', 'Pawan arora');
    $mail->addAddress($email);               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = '<p> Hi '.$name.'<a href="http://localhost:8000/activate?name='.$email.'">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
header("Location: /manageuser");