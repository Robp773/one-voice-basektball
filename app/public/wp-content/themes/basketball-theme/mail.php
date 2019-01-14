
<?php 

    $message = $_REQUEST['message'];
    $to = "robpeterman573@gmail.com",
    $subject = $_REQUEST['subject'];
    $headers = "From: ya boi";

    echo mail($to, $subject, $message, $headers);     


?>
