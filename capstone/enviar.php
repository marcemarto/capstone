<?php
$recipient = "marcellamartorana@gmail.com";
$name = $_POST["Name"];
$email = $_POST["Email"];
$phone = $_POST["Phone"];
$subject = $_POST["Subject"];
$message = $_POST["Message"];
$content = "Name: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nMessage: " . $message ;
$header = "Sent from Rist-to-Life";
mail($recipient, $subject, $content);
// header("location:thank-you.html");
echo "<script>alert('correo enviado')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000</script>";
?>