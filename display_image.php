<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="position: sticky; top: 0; z-index: 9999;">
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

    <div class="container pt-3">
        <h2 class="font-bold"><strong>List all Images:</strong></h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque eligendi nisi illum, totam doloribus rem quibusdam minima est voluptatum animi quos, ad sed minus nam assumenda reiciendis magnam inventore enim!</p>
        <?php include 'display.php'; ?>
    </div>
</body>
</html>
