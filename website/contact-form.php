<?php

 if (isset($_POST['submit'])) {
    $name = $_POST ['name'];
    $mailFrom = $_POST ['email'];
    $number = $_POST ['number'];
    $address = $_POST ['address'];
    $foodName = $_POST ['food name'];

    $mailTo = "vanjosalazar69@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from " .$name.".\n\n".$foodName;

    mail($mailTo, $txt, $header, $number, $address,);
    header("Location: index.php?mailsend");

 }
    
?>s