<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <title>Admin-Register Medic</title>
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
            <li><a href="admin-drop-medic.php">Drop Medic</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </div>
</nav>
<form method="post" action="insert3.php" id="med-reg">
    <h2>Enter Medic details</h2>
    <div class="select">
        <select id="specialization"name="specialization">
            <option selected disabled>Specialization</option>
            <option value="physician">Physician</option>
            <option value="psychiatrist">Psychiatrist</option>
            <option value="Optician">Optician</option>
            <option value="gynaecologist">Gynaecologist</option>
        </select>
    </div>
    <input class="input" name="name" type="text" placeholder="Full Name"><br>
    <input type="email" name="email" placeholder="Email address"><br>
    <input type="text" name="License" class="input" placeholder="Medical License Number"><br>
    <input class="input" name="telno" type="text" placeholder="Telephone Number"><br><br>
    <input type="submit" name="submit" value=Register>
</form>
</body>
</html>