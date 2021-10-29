<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takk for din stemme</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
    <?php


 $dataPoints = array();
 
  $sql = "SELECT partiNavn, stemmer FROM oversikt";
  $resultat = $conn-> query($sql);
    while ($row = $resultat->fetch_assoc()) {
      $fun = array("label"=> $row['partiNavn'], "y"=> $row['stemmer']);
      array_push($dataPoints, $fun);
  }

   //array("label"=>"Chrome", "y"=>64.02),
    
   
  
 ?>


    
<div id="chartContainer" style="height: 370px; width: 100%;"></div>




<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "dark2",
	animationEnabled: true,
	title: {
		text: "fun"
	},
	data: [{
		type: "pie",
		indexLabel: "{label} #percent%",
		percentFormatString: "#0.##",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</body>
</html>