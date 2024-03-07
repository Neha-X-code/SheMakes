<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin'])) {
    header("Location: /SheMakes/signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Useful Resources</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            border-radius: 8px;
        }

        h1 {
            color: black;
            text-align: center;
            padding-bottom: 10px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        a.logout-link {
            color: #dc3545;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php require 'partials/_nav.php'; ?>
    <div class="container">
        <h1>USEFUL RESOURCES</h1>

        <ul>
            <li><a href="https://www.example1.com" target="_blank">Funding Opportunity 1</a></li>
            <li><a href="https://www.example2.com" target="_blank">Funding Opportunity 2</a></li>
            <li><a href="https://www.example3.com" target="_blank">Funding Opportunity 3</a></li>
            <li><a href="https://www.example4.com" target="_blank">Funding Opportunity 4</a></li>
            <li><a href="https://www.example5.com" target="_blank">Funding Opportunity 5</a></li>
        </ul>
    </div>
</body>

</html>
