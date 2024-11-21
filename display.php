<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
require_once 'database.php';
// Retrieve image data from the database
$sql = "SELECT * FROM images ORDER BY id DESC"; // Retrieve all images ordered by id
$stmt = $conn->prepare($sql);
$stmt->execute();
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);

if($images == null){
    echo "<div class='d-flex justify-content-center'>
            <img src='assets/no-result-data.jpg' class='img-fluid' alt='No data found.' style='max-width: 200px; height: auto; user-select: none;'>
            </div>
    ";
}
else{
        // Display images
    foreach ($images as $image) {
        $imageData = $image['image_data']; // Corrected variable name
        $imageSrc = 'data:image/jpeg;base64,' . base64_encode($imageData); // Convert binary data into base64 encoded string
        echo "<div class='d-flex flex-wrap gap-2 g-2'>
                <div class='card shadow m-2'>
                    <img src='$imageSrc' class='card-img-top img-fluid' alt='Uploaded Image'>
                    <div class='card-body'>
                        <div class='d-flex justify-content-end border-top p-3'>
                            <a href='delete_controller.php?id=" . $image['id'] . "' class='btn-delete btn btn-danger'>Delete</a>
                        </div>
                    </div>
                </div>
            </div>";
    }
}
?>


