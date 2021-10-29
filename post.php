<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takk for din stemme</title>
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
    $result = $_POST['valg'];
    $funnyQ = "UPDATE oversikt SET stemmer=stemmer + 1 WHERE id=$result";
    $conn->query(mysqli_real_escape_string($conn,$funnyQ));
    
    ?>
    <h1>Takk for din stemme</h1>
    
</body>
</html>