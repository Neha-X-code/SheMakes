<?php
session_start();

// Check if the user is logged in, redirect to signin.php if not
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: signin.php");
    exit();
}

// Include database connection
include 'partials/_dbconnect.php';

// Fetch startup data
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM startups 
            WHERE startupName LIKE '%$search%' OR 
                  domain LIKE '%$search%' OR 
                  founderName LIKE '%$search%' OR 
                  city LIKE '%$search%' OR 
                  district LIKE '%$search%' OR 
                  description LIKE '%$search%' OR 
                  instagram LIKE '%$search%' OR 
                  website LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM startups";
}

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-img-top {
            object-fit: cover;
            height: 200px; /* Adjust the height as needed */
        }
    </style>
</head>

<body>
    <?php require 'partials/_nav.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
                <p>Explore all amazing startup initiatives by female entrepreneurs</p>
            </div>
            <div class="col-md-6 text-end">
                <a href="/SheMakes/add_startup.php" class="btn btn-primary btn-dark">Add Startup</a>
            </div>
        </div>

        <div class="mt-3">
            <form action="#" method="get">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search startups" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                            <button class="btn btn-primary btn-dark" type="submit">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Display the startups in a table -->
        <div class="row mt-3">
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="/SheMakes/AI1.jpg" class="card-img-top" alt="Startup Image">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['startupName']; ?></h5>
                            <p class="card-text">
                                <strong>Domain: </strong><?php echo $row['domain']; ?><br>
                                <strong>Founder Name: </strong><?php echo $row['founderName']; ?><br>
                                <strong>Description: </strong><?php echo $row['description']; ?>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>City: </strong><?php echo $row['city']; ?></li>
                            <li class="list-group-item"><strong>District: </strong><?php echo $row['district']; ?></li>
                        </ul>
                        <div class="card-body">
    <a href="<?php echo $row['instagram']; ?>" class="card-link text-dark" target="_blank">
        <i class="fab fa-instagram-square"></i>
    </a>
    <a href="<?php echo $row['website']; ?>" class="card-link text-dark" target="_blank">
        <i class="fas fa-globe"></i>
    </a>
</div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/69f4a7d5cb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
