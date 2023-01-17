<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <title>Student-Options</title>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="Contacts.php">Contacts</a></li>
        </ul>
    </div>
</nav>
<div class="student-task-select">
    <h2>Select an option:</h2>
    <input type="button" onclick="window.location.href='Select Medic.php';" value="Begin Consultation" class="button">
    <input type="button" onclick="window.location.href='Responses.php';" value="View Responses" class="button">
</div>
</body>
</html>