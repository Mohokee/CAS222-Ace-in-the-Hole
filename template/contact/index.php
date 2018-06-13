<?php


    if ((isset($_POST['name'])) && (empty ($_POST['honeypot']))) {

    // If the if statement above is true, save each form field value as a variable. These variable values will be used in the thank you page and possibly in the bindValue below. Whether you use in the bindValue or not is up to you.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $select = $_POST['select'];
    $question = $_POST['question'];
        
    /**
     * This example shows making an SMTP connection with authentication.
     */

    //SMTP needs accurate times, and the PHP time zone MUST be set
    //This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 0;
    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
    //Set the hostname of the mail server
    $mail->Host = "mail.jasminkissinger.webhostingforstudents.com";
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 587;
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication
    $mail->Username = "phpmailer@jasminkissinger.webhostingforstudents.com";
    //Password to use for SMTP authentication
    $mail->Password = "Iamagoat";
    //Set who the message is to be sent from
    $mail->setFrom(' 	phpmailer@jasminkissinger.webhostingforstudents.com', $name);
    //Set an alternative reply-to address
    $mail->addReplyTo($email, $name);
    //Set who the message is to be sent to
    $mail->addAddress(' 	jasmin.kissinger@pcc.edu', 'Jasmin Kissinger');
    //Set the subject line
    $mail->Subject = 'Ace in the Hole Multisport Events';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    //$mail->msgHTML(file_get_contents('contents.html'), //dirname(__FILE__));
    $mail->Body = "Email: " . $email . "<br>" . "Name: " . $name . "<br>" . $select . "<br>" . "<br>" . $question;
    $mail->IsHTML(true); 
    //Replace the plain text body with one created manually
    //$mail->AltBody = 'This is a plain-text message body';
    //Attach an image file
    //$mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        include 'success.html.php';
    }

  } else {
      include 'contact.html.php';
  }


?>