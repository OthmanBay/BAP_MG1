<?php
$to = 'bayothman@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From' . $POST['from'];

// mail versturen
mail($to ,$subject ,$message ,$headers);

//BEVESTEGING
echo 'Uw mail is succesvol verstuurd';
