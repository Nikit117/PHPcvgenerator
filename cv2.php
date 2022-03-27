<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 20px;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
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
?>
<table class="center", style="background-color:#FFA8B5; width:500px">
<tr>
<th>Sno</th>
  <th>Image</th>
  <th>Name</th>
  <th>Age</th>
  <th>Gender</th>    
  <th>Email</th>    
  <th>Phone</th>    
  <th>Skill</th>    
  <th>Experience</th>    
  <th>Projects</th>    
  <th>Other</th>    
</tr>
<?php
// Display data on web page
while($row = mysqli_fetch_array($result)) {
    echo "<br>";
      ?>    
      <tr>
      <td><?php echo $row["sno"]; ?></td>
      <td><img src="<?php echo $row["img"];?>" height=100" ></td>
      <td><?php echo $row["name"];?></td>
      <td><?php echo $row["age"];?></td>
      <td><?php echo $row["gender"];?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["phone"]; ?></td>
      <td><?php echo $row["skill"]; ?></td>
      <td><?php echo $row["exp"]; ?></td>
      <td><?php echo $row["pro"]; ?></td>
      <td><?php echo $row["other"]; ?></td>
    </tr>   
    <button class='btn' style = " background:rgb(203, 157, 224)"><a href='cv.php'><- Go Back</a></button>
    
     <?php 
    }
    ?>
</table>
<?php
$conn->close();

?>
</body>
</html>