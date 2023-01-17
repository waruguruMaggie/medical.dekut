<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Select Medic</title>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
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

<form action="insert2.php" method="post" id="selection">
    <h1>Consultation Form</h1>
    
        <label for="Specialisation" style="font-size: 20px;">Select Medic Here:</label><br>
        <br>
        <div class="select">
        <select id="Specialisation" name="Specialisation"> 
            
            <option value="physician">Physician</option>
            <option value="psychiatrist">Psychiatrist</option>
            <option value="Optician">Optician</option>
            <option value="gynaecologist">Gynaecologist</option>
        </select>
    </div>
    <h2>Describe your situation</h2>
    <input type="text" name="Regno" placeholder="Registration Number:">
    <textarea id="Symptoms" name="Symptoms" placeholder="give a short description here"></textarea>
    <input style="background-color:plum;" type="submit" name="submit" value="Submit"><br>
</form>
<footer>
    <div class="main-content">
        <div class="left-box">
            <h2>About us</h2>
            <div class="content">
                <p>Get free consultation with our trusted medics. At Dekut we believe in empowering our students both academically and health-wise</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>