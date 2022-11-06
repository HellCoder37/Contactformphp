<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['messsage'];


    $email_form = 'neerajrasttogi7678@gmail.com';

    $email_subject = "Name form Submission";

    $email_body = "USer Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "neerajrstogi4d@gmail.com";

    $headers = "Form: $email_form \r\n";

    $headers = "Reply-TO: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html")

     






?>