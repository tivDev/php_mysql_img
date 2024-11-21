<?php
require_once 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM images WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header('location: display_image.php');
    exit; // Added to stop script execution after redirect
}