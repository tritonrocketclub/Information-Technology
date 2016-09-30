<?php
    $page = $_POST['page'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent= "From: $name \n Message: $message";
    $recipient = "tritonrocket@gmail.com";
    $subject = "Club Info Request Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    // You can also use header('Location: thank_you.php'); 
    // to redirect to another page.
?>
<html>
    <head>
        <meta http-equiv="refresh" content="5;url=index.php" />
    </head>
    <body>
        <p>Mail Sent. Thank you <?php echo $first_name; ?>, we will 
            contact you shortly. This page will redirect in 5 seconds.</p>
    </body>
</html>