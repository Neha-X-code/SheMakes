<?php
session_start();

// Check if the user is logged in, redirect to signin.php if not
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: signin.php");
    exit();
}

include 'partials/_dbconnect.php';

$successMessage = $errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startupName = $_POST["startupName"];
    $domain = $_POST["domain"];
    $founderName = $_POST["founderName"];
    $city = $_POST["city"];
    $district = $_POST["district"];
    $description = $_POST["description"];
    $instagram = $_POST["instagram"];
    $website = $_POST["website"];

    // Insert data into startups table
    $sql = "INSERT INTO shemakes.startups 
            (startupName, domain, founderName, city, district, description, instagram, website) 
            VALUES 
            ('$startupName', '$domain', '$founderName', '$city', '$district', '$description', '$instagram', '$website')";

    if (mysqli_query($conn, $sql)) {
        $successMessage = "Startup added successfully!";
    } else {
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Startup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php require 'partials/_nav.php'; ?>

    <div class="container mt-4">
    <?php
        if (!empty($successMessage)) {
            echo '<div class="alert alert-success" role="alert">
                    ' . $successMessage . '
                  </div>';
            echo '<a href="/SheMakes/welcome.php" class="btn btn-success mt-3">Go to Welcome Page</a>';
        }

        if (!empty($errorMessage)) {
            echo '<div class="alert alert-danger" role="alert">
                    ' . $errorMessage . '
                  </div>';
        }
        ?>
        <h2 class = "mb-4">Add Startup</h2>
        <form action="/SheMakes/add_startup.php" method="post">
            <div class="mb-3">
                <label for="startupName" class="form-label">Startup Name</label>
                <input type="text" class="form-control" id="startupName" name="startupName" required>
            </div>
            <div class="mb-3">
                <label for="domain" class="form-label">Domain</label>
                <input type="text" class="form-control" id="domain" name="domain" required>
            </div>
            <div class="mb-3">
                <label for="founderName" class="form-label">Founder Name</label>
                <input type="text" class="form-control" id="founderName" name="founderName" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="mb-3">
                <label for="district" class="form-label">District</label>
                <input type="text" class="form-control" id="district" name="district" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Startup Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram Link</label>
                <input type="text" class="form-control" id="instagram" name="instagram">
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website Link</label>
                <input type="text" class="form-control" id="website" name="website">
            </div>
            <button type="submit" class="btn btn-primary btn-dark">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
