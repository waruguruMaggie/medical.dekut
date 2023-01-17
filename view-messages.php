<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="logo.png" type="image/png">
  <link rel="stylesheet" href="styles.css">
  <script defer src="script.js"></script>
  <title>View Message</title>
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
<div class="messages">
  <h2><strong>Consultations Received</strong></h2>
  <table border="1"style="overflow:none;
                                background-color:plum;
                                border: 1px solid purple;">
    <tr style="background-color:#pink;">
      <td>No</td>
      <td>Specialisation</td>
      <td>Symptoms</td>
      <td>Reg No</td>
    </tr>
    <?php include("getcomments.php"); ?>
  </table>
  <form method="post" action="insert4.php">
  <h3>Reply to</h3><br>
  <input type="text" name="License" placeholder="License Number:" required>
  <input type="text"  name="Regno"placeholder="Student reg. no." required><br>
  <h2>Enter Reply</h2>
  <textarea id="textarea" name="textarea" placeholder="Advise here"></textarea>
  <input type="submit" value="Send" style="font-size:15px; padding: 3%;"><br>
  </form>
</div>
</body>
</html>