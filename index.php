<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stemmeteller</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "stemmeteller");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<div class="ah">
<h1>Stem her</h1>
<!-- form for partiet du stemmer på--->
<form method="POST" action="post.php">
  <select name="valg" id="valg">
  <?php
  $sql = "SELECT id,partiNavn FROM oversikt";
  $resultat = $conn-> query($sql);
    while ($row = $resultat->fetch_assoc()) {
      echo "<option value=" . $row["id"] . ">" . $row["partiNavn"] . "</option> \n";
  }
  ?>
  </select>
  <input id="sikring" type="submit">
</form>
</div>
</body>
<script src="./script.js"></script>
</html>