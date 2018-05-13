<?php


namespace model;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

/**
 * Class ContactManager
 * @package model
 */
class ContactManager
{
    /**
     * @param $lastName
     * @param $firstName
     * @param $tel
     * @param $email
     * @param $subject
     * @param $message
     * @return bool
     * @throws Exception
     */
    public function sendMail($lastName, $firstName, $tel, $email, $subject, $message)
    {
        //Create a new PHPMailer instance
        $mail = new PHPMailer(true); // Passing `true` enables exceptions

        //Tell PHPMailer to use SMTP
        $mail->IsMAIL();

        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;

        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

        //Set the hostname of the mail server
        $mail->Host = 'ssl0.ovh.net';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587; // TCP port to connect to
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = 'postmaster@jean-forteroche.deborah-maitrejean.com';
        //Password to use for SMTP authentication
        $mail->Password = 'Alaska17';

        $mail->IsHTML(true);
        //Set who the message is to be sent from
        $mail->SetFrom($email, $firstName . '' . $lastName); //'adresse@mail.com', 'First Last'
        //Set an alternative reply-to address
        $mail->AddReplyTo($email, $lastName);
        //Set who the message is to be sent to
        $mail->AddAddress('postmaster@jean-forteroche.deborah-maitrejean.com', 'Jean Forteroche');
        //Set the subject line
        $mail->Subject = $subject; // 'PHPMailer GMail SMTP test'
        $mail->Body = $message . ' ' . $tel;
        //Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
        //$mail->MsgHTML(file_get_contents('contents.html'), dirname(__FILE__));
        //Replace the plain text body with one created manually
        //$mail->AltBody = 'This is a plain-text message body';
        //Attach an image file
        //$mail->AddAttachment('images/phpmailer_mini.gif');

        //Send the message, check for errors
        if (!$mail->Send()) {
            $contactManager = false;
            return $contactManager;
        } else {
            $contactManager = true;
            return $contactManager;
            session_destroy();
        }
    }
}