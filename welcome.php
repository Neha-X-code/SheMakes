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
</head>

<body>
    <?php require 'partials/_nav.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="/SheMakes/add_startup.php" class="btn btn-primary">Add Startup</a>
            </div>
        </div>

        <div class="mt-3">
            <form action="#" method="get">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search startups" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="filter">Filter</label>
                            <select class="form-select" id="filter" name="filter">

                            </select>
                            <button class="btn btn-outline-secondary" type="submit">Apply</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Display the startups in a table -->
        <div class="mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Startup Name</th>
                        <th scope="col">Domain</th>
                        <th scope="col">Founder Name</th>
                        <th scope="col">City</th>
                        <th scope="col">District</th>
                        <th scope="col">Description</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Website</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?php echo $row['startupName']; ?></td>
                            <td><?php echo $row['domain']; ?></td>
                            <td><?php echo $row['founderName']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['district']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['instagram']; ?></td>
                            <td><?php echo $row['website']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
