<?php
require_once 'database.php';

if(isset($_FILES['profile'])){
    $image = file_get_contents($_FILES['profile']['tmp_name']);
    $imageName = $_FILES['profile']['name']; // Get the name of the uploaded file
    $stmt = $conn->prepare("INSERT INTO images (image_name, image_data) VALUES (?, ?)");
    $stmt->execute([$imageName, $image]);
    header('location: display_image.php');
    exit; // Added to stop script execution after redirect
} else {
    echo "No image uploaded.";
}

?>
