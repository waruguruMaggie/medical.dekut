<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign in</title>
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
                        <li><a href="Signup.php">Sign Up</a></li>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </nav>
        <form action="checklogin2.php" method="post">
            <div class="imgcontainer">
                <img src="femaleicon.png" class="avatar" alt="">
                <h2><b>Sign In</b></h2>
            </div>

            <div class="container">
                <input type="email" placeholder="Email Address" name="EmailAddress"required ><br>
                <input type="password" placeholder="Password" name="password"required><br>
                <input type="submit" name="submit" value="Login">
                    <br>
                <label><input type="checkbox" checked="checked" name="remember">Remember me?</label>

                <div class="sgn-up-and-forgot-email">
                    <p>Have no account?<br><a href="Signup.php" style="color:blue;">Sign Up</a></p>
                </div>
            </div>
        </form>
    </body>
</html>