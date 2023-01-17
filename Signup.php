<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
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
            <li><a href="Sign-in.php">Sign in</a></li>
        </ul>
    </div>
</nav>
    
<form method="post" action="insert.php">
    <div class="imgcontainer">
        <img src="students.png" class="avatar">
        <h2><b>Sign Up</b></h2>
    </div>
    <div class="container">
        <input type="email" placeholder="Email Address" name="EmailAddress" id="EmailAddress" required ><br>
        <input type="text" placeholder="Registration Number"name="Regno" id="Regno"required ><br>
        <input type="password" placeholder="Password"  name="password" id="password"required><br>
        <input type="submit" name="submit" value="Sign Up"><br>
        <label><input type="checkbox" checked="checked" name="remember">Remember me?</label>

        <div class="sgn-up-and-forgot-email">
            <p>Already have an account?<a href="Sign-in.php">Sign In</a></p>
            <p><a href="#">Forgot Password</a></p>
        </div>
    </div>
</form>
</body>
</html>