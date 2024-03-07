<?php
include 'partials/_dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shemakes - Entrepreneurship Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        header {
            color: #F7418F;
            text-align: center;
            padding: 2%;
            font-size: 2vw;
        }
        section {
            padding: 2em;
        }
        .portfolio {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .portfolio-item {
            width: 30%;
            margin-bottom: auto;
            padding: 2%;
            text-align: center;
        }
        
    </style>
</head>
<body>
    <?php require 'partials/_navi.php'; ?>
    <header>
        <h1>SheMakes</h1>
    </header>

    <section>
        <h2>Featured Portfolios</h2>
        <div class="portfolio">
            <!-- Sample portfolio items, replace with actual content -->
            <div class="portfolio-item">
                <img src="images/Handicraft-Business.jpg" alt="" class="img-fluid">
                <h3>Handicraft</h3>
                <p>Description of Portfolio 1.</p>
            </div>
            <div class="portfolio-item">
                <img src="images/Textile-Business.jpg" alt="" class="img-fluid">
                <h3>Textile</h3>
                <p>Description of Portfolio 2.</p>
            </div>
            <div class="portfolio-item">
                <img src="images/mandal art.jpg" alt="" class="img-fluid">
                <h3>Mandal art</h3>
                <p>Description of Portfolio 3.</p>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
