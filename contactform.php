<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // You can add code here to save the form data to a database, or send it as an email.
    // For example, you could use PHP's mail() function or integrate an email service API.

    echo "Thank you, $name! We have received your message.";
}
?>
