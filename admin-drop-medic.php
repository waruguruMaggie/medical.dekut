<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <title>Admin task page</title>
</head>
<body>
<nav class="navbar">
    <div class="brand-title"><p><img src="logo.png" alt="">Dekut Medical Website</p></div>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href="Register-medic.php">Register Medic</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </div>
</nav>
<form class="deletion-div" method="post" action="delete.php">
    <h3>Remove Medic</h3>
    <input type="text" name="License" placeholder="License number"><br>
    <input type="submit" name="delete" value="Delete">
</form>
</body>
</html>