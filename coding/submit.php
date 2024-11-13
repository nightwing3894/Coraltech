<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Save to a file (or you could save to a database)
    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";
    file_put_contents("messages.txt", $data, FILE_APPEND);

    echo "Thank you for your message!";
}
?>
