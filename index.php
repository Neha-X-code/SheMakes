<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shemakes - Entrepreneurship Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }
        nav {
            background-color: #555;
            padding: 1em;
            text-align: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 0.5em 1em;
            margin: 0 1em;
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
            margin-bottom: 2em;
            border: 1px solid #ccc;
            padding: 1em;
            text-align: center;
        }
    </style>
</head>
<body>

    <header>
        <h1>SheMakes</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="signup.php">Signup/Sign In</a>
    </nav>

    <section>
        <h2>Featured Portfolios</h2>
        <div class="portfolio">
            <!-- Sample portfolio items, replace with actual content -->
            <div class="portfolio-item">
                <h3>Portfolio 1</h3>
                <p>Description of Portfolio 1.</p>
            </div>
            <div class="portfolio-item">
                <h3>Portfolio 2</h3>
                <p>Description of Portfolio 2.</p>
            </div>
            <div class="portfolio-item">
                <h3>Portfolio 3</h3>
                <p>Description of Portfolio 3.</p>
            </div>
        </div>
    </section>

</body>
</html>
