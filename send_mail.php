<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "kushalqsp@gmail.com";  // Your email
    $subject = "New Portfolio Contact Message";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "success";
    } else {
        echo "error";
    }
}
?>
