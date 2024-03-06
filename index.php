<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shemakes - Entrepreneurship Portfolio</title>
    <link rel="stylesheet" href="fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            color: #F7418F;
            text-align: center;
            padding: 10px 0px;
            font-size: 20px;
        }
        nav {
            background-color: #555;
            padding: 35px;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 2px;
            margin: 0 1px;
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
        
        .search-container {
            text-align: left;
            margin: 20px 10px;
            width: 50%;
        }

        .search-box {
            padding: 10px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
    </style>
</head>
<body>
    <nav>
        <div class="top">
            <div class="container">
                <div class="left search-container">
                    <form action="/search" method="get">
                        <input type="text" class="search-box" name="q" placeholder="Search...">
                        <button type="submit" class="search-button">Search</button>
                    </form>
                </div>
                <div class="left padding_left">
                    <ul>
                        <a class="le" href="">Home</a></li>
                        <a class="le" href="">About Us</a></li>
                        <a class="le" href="signup.php">Sign Up</a></li>
                        <a class="le" href="signin.php">Sign In</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <h1>SheMakes</h1>
    </header>

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
