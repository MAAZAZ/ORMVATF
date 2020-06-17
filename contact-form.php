<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "contact@ormvatafilalet.ma"; // exemple

$headers = "From: ".$visitor_email;
$txt = "vous avez recu une message de ".$name.".\n\n".$message;

mail($to,$subject,$txt,$headers);

header("Location: Contact.php?message-envoye");

?>