<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
</head>

<body>
    <style>
        .navbar{
            position: fixed;
            top: 0;
            z-index: 9999;
            width: 100%;
        }
        img{
            object-fit: cover;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="display_image.php">All images</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <main class="d-flex justify-content-center align-items-center">
        <form action="upload_controller.php" method="post" enctype="multipart/form-data" class="p-4 rounded text-center mt-5 shadow bg-body-tertiary rounded">
            <h1 class="text-dark">Upload Image</h1>
            <div class="form-group">
                <label for="inputImage" class="d-block user-select-none">
                    <img src="https://png.pngtree.com/png-clipart/20200225/original/pngtree-image-upload-icon-photo-upload-icon-png-image_5279794.jpg" alt="Employee Image" id="preview-image" class="img-fluid mb-3 " style="width: 200px; height: 200px; box-shadow: none; cursor: pointer;" onmouseover="this.style.boxShadow='none';" onmouseout="this.style.boxShadow='none';">
                    <input type="file" class="form-control-file d-none" id="inputImage" accept="image/*" onchange="previewImage(event)" name="profile" required>
                </label>
            </div>
            <div class="button-group">
                <button type="submit" class="btn btn-primary" disabled>Upload Now</button>
                <button type="button" class="btn-clear btn btn-warning user-select-none" onclick="clearImage()">Clear</button>
            </div>
        </form>
    </main>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('preview-image');
            const reader = new FileReader();
            reader.onload = () => preview.src = reader.result;
            reader.readAsDataURL(event.target.files[0]);
            document.querySelector('.btn-warning').style.display = 'inline-block';
            document.querySelector('.btn-primary').disabled = false;
        }

        function clearImage() {
            document.getElementById('preview-image').src = "https://png.pngtree.com/png-clipart/20200225/original/pngtree-image-upload-icon-photo-upload-icon-png-image_5279794.jpg";
            document.getElementById('inputImage').value = '';
            document.querySelector('.btn-warning').style.display = 'none';
            document.querySelector('.btn-primary').disabled = true;
        }

        document.querySelector('.btn-clear').style.display = 'none';
    </script>

</body>

</html>