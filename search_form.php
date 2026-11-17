<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Lab 09 - Search for a car model">
    <meta name="keywords" content="PHP, MySQL, search">
    <meta name="author" content="Hassan Abbas">
    <title>Search Cars</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>Search Cars</h1>
    <form method="get" action="search_result.php">
        <p>
            <label for="model">Car model:</label>
            <input type="text" name="model" id="model">
            <input type="submit" value="Search">
        </p>
    </form>
    <p><a href="cars.php">View all cars</a></p>
</body>
</html>
