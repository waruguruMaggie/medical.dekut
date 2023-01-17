<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Medic Sign-in</title>
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
        <form method="post" action="checklogin4.php" id="medic-sign-in-form">
            <div class="imgcontainer">
                <img src="femaleicon.png" class="avatar" alt="">
                <h2><b>Sign In</b></h2>
            </div>
            <div class="container">
                <input type="email" name=EmailAddress placeholder="Email Address" required ><br>
                <input type="password" name=License placeholder="Password" required><br>
                <input type="submit" name="submit" value="Login"><br>
            </div>
        </form>
    </body>
</html>