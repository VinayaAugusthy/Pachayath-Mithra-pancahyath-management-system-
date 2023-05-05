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
<div class="container">          
  <table class="table table-bordered">
<?php

if(isset($_POST['cancel'])){
    header("Location:hello.php");
}
{
$conn=mysqli_connect("localhost","root","","mini") or die("connection failed");
}

$sql = "SELECT id, ward, name,email,phone FROM members";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Ward</th><th>Name</th><th>Email</th><th>Phone</th></tr>";
  
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["ward"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>
 </table>
</div>

</body>
</html>