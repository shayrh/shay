<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "shayrh28@gmail.com"; // Your email address
    $subject = "New Contact Form Submission";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $emailBody = "
        <p>Name: $name</p>
        <p>Email: $email</p>
        <p>Message:</p>
        <pre>$message</pre>
    ";

    $headers = "Content-Type: text/html; charset=UTF-8\r\n";

    mail($to, $subject, $emailBody, $headers);

    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
?>
