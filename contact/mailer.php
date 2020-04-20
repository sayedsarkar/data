<?php
    if(isset($_POST['submit'])) {
     
        // check reCAPTCHA information
        require_once('recaptchalib.php');
         
        $privatekey = "<6Lesd-wSAAAAAAEIlxoxJAz4l8lbSLAo12X778kO>";
        $resp = recaptcha_check_answer ($privatekey,
                                    $_SERVER["REMOTE_ADDR"],
                                    $_POST["recaptcha_challenge_field"],
                                    $_POST["recaptcha_response_field"]);
         
        // if CAPTCHA is correctly entered!                       
        if ($resp->is_valid) {                       
            $to = "info.rahiq@gmail.com";
            $subject = "What are you thinking submission!";
             
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
 
//constructing the message
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $comment";
 
// ...and away we go!
mail($to, $subject, $body);
             
            // redirect to confirmation
            header('Location: confirmation.htm');
        } else {
            // handle the CAPTCHA being entered incorrectly
            header('Location: captcha-incorrect.php');
        }
    } else {
        // handle the form submission error somehow
    }
?>