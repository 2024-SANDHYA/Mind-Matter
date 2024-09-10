<?php
include './db/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $project = htmlspecialchars(trim($_POST['project']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $sql = "INSERT INTO contactus (name, email, phone, project, subject, message) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssssss", $name, $email, $phone, $project, $subject, $message);

    if ($stmt->execute()) {
        $status = "Message Sent Successfully!";
    } else {
        $status = "Failed to send message!";
    }
    $stmt->close();
    $conn->close();

    // Redirect with the encoded message
    header("Location: contact.html?message=" . urlencode($status));
    exit();
}
?>