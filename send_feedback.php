<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ahmedklai.connect@gmail.com";
    $subject = "Feedback from Portfolio Website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    if (empty($name) || empty($email) || empty($feedback)) {
        http_response_code(400);
        echo "Please fill in all fields.";
        exit;
    }

    $message = "Name: $name\nEmail: $email\n\nFeedback:\n$feedback";
    $headers = "From: $email\r\nReply-To: $email";

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "Thank you! Your feedback has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your feedback.";
    }
} else {
    http_response_code(405);
    echo "Method not allowed.";
}
?>
