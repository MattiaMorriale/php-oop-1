<?php

require 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars Movies</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body data-bs-theme='dark'>
    
    <div class="container-fluid d-flex align-items-center justify-content-center mt-5 pt-5   flex-column ">
        <div class="my-box pt-5 mt-5">

            <?php
    
            foreach($movies as $movie) {
                echo "
                <div class='card my-card border-warning '>
                    <div class='card-body'>
                        <h5 class='card-title'>". $movie->title . ", " . $movie->date . "</h5>
                        <h6 class='card-subtitle mb-2 text-body-secondary'>" . $movie->director?->getDirectorMovie() . "</h6>
                        <p class='card-text'>lorem ipsum dolor et vittrex.</p>
                    </div>
                </div>
                ";
            }

            ?>
        </div>
    </div>

    <!-- bootscript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
</body>
</html>