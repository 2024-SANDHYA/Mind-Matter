<?php
include './db/dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $gender = htmlspecialchars(trim($_POST['gender']));
    $appointment_date = htmlspecialchars(trim($_POST['appointment_date']));
    $department = htmlspecialchars(trim($_POST['department']));
    $comments = htmlspecialchars(trim($_POST['comments']));

    $sql = "INSERT INTO appointments (name, email, phone, gender, appointment_date, department, comments) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sssssss", $name, $email, $phone, $gender, $appointment_date, $department, $comments);

    if ($stmt->execute()) {
        $status = "Appointment Booked Successfully!";
    } else {
        $status = "Failed to Book an Appointment!";
    }
    $stmt->close();
    $conn->close();

    // Redirect with the encoded status
    header("Location: contact.html?message=" . urlencode($status));
    exit();
}
?>