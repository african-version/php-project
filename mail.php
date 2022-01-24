<?php
if(isset($_POST['submit'])){
    $to = "majidoladepo@yahoo.com";
    $from = $_POST['email'];
    $firstname = $_POST['name'];
    $message = $_POST['message'];

    $subject = "Form Submission";
    $subject2 = "New Submission";
    $message = $firstname . " of " . $message;

    $headers = "From: " . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
    echo "Mail sent. Thank You" . $firstname . ", we will contact you shortly.";
}
?>