<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php
include "connection.php";
if(isset($_POST['cancel'])){
    header("Location:admin.php");
}
else
{
$conn=mysqli_connect("localhost","root","","mini") or die("connection failed");
}

$sql = "SELECT id,cname,sex,dob,fname,mname,place,address,paddress FROM birth";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name of child</th><th>Sex</th><th>Dob</th><th>Father's name</th><th>Mother's name</th><th>Place</th><th>Address</th><th>Permanent address</th></tr>";
  
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["cname"]."</td><td>".$row["sex"]."</td><td>".$row["dob"]."</td><td>".$row["fname"]."</td><td>".$row["mname"]."</td><td>".$row["place"]."</td><td>".$row["address"]."</td><td>".$row["paddress"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
