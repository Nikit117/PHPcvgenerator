<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style2.css">
	<title>Document</title>
</head>
<body>
	
<?php

// Servername
$servername = "localhost";

// Username
$username = "root";

// Empty password
$password = "";

// Database name
$dbname = "trip";

// Create connection by passing these
// connection parameters
$conn = new mysqli($servername,
	$username, $password, $dbname);

// SQL query to find total count
// of college_data table
$sql = "SELECT * FROM trip ORDER BY dt DESC LIMIT 1";
$result = $conn->query($sql);

// Display data on web page
while($row = mysqli_fetch_array($result)) {
?>	
	<div id="header"><button class='btn' style="height:40px;margin-top:0px;margin-left:0px;border-radius: 0px; background: rgb(203, 157, 224);border: 0px;"><a href='welcome.php'><- Go back</a></button></div>
    <div class="left"></div>
	<div class="stuff">
		<br><br>
  <h1>Resume</h1>
  <h2><?php echo $row["name"];?></h2>
  <hr />
  <br>
  <ul>
  <img src="<?php echo $row["img"];?>" height="200" >
	</ul>
  <br>
  <p class="head">About:</p>
  <ul>
	  <?php echo $row["other"];?>
	</ul>
  <br>
  <p class="head">Age:</p>
  <ul>
	  <?php echo $row["age"];?>
	</ul>
  <br>
  <p class="head">Gender:</p>
  <ul>
	  <?php echo $row["gender"];?>
	</ul>
	<br>
	<p class="head">Email:</p>
	<ul>
		<?php echo $row["email"];?>
  </ul>
  <br>
  <p class="head">Phone:</p>
  <ul>
  <?php echo $row["phone"];?>
</ul>
<br>
<p class="head">Education:</p>
<ul>
  <a href="https://www.kpriet.ac.in/">
	  <li>KPR institute of Engineering and Technology</li>
	</ul>
<br>
<p class="head">Skills:</p>
  <ul>
	  <li><?php echo $row["skill"];?></li>
	</ul>
	<br>
	<p class="head">Experience:</p>
	<ul>
		<li><?php echo $row["exp"];?></li>
	</ul>
	<br>
	<p class="head">Projects</p>
	<ul>
		<li><?php echo $row["pro"];?></li>
  </ul>
  <br>
</div>
<div class="right"></div>
<div id="footer">
	<h2 id="name"><?php echo $row["name"];?></h2>
	<button class='btn' style="height:50px;margin-left:0px;border-radius: 0px; background: rgb(203, 157, 224);border: 0px;"><a href='cv2.php'>Table format -></a></button>
</div>
  <?php	
}
?>

<?php
$conn->close();

?>

</body>
</html>