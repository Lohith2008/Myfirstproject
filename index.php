<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "bisector43@gmail.com";

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                    "User Email:$visitor_email.\n".
                    "User Message:$message.\n";

    $to = "lohitkumar301@gmail.com";
    $headers = "From:$email_from \r\n";
    $header .= "Reply-To:$visitor_email \r\n";

    mail($to,$email,$email_body,$headers);
    header("Location:index.html");

?>