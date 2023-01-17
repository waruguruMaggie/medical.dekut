<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="logo.png" type="image/png">
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
    <title>View Responses</title>
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
        <div class="responses">
            <h2><strong>Responses Received</strong></h2>
                <table border="1"style="overflow:scroll;
                                width: 70%;
                                background-color:#ADD8E6;
                                border: 1px solid gray;">
                    <tr style="background-color:#F0E68C">
                        <td>No</td>
                        <td>License No</td>
                        <td>Regno</td>
                        <td>Response</td>
                    </tr>
                    <?php include("getresponses.php"); ?>
                </table>
        </div>
    </body>
</html>