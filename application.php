<?php

if(isset($_POST['cancel'])){
    header("Location:hello.php");
}

$conn=mysqli_connect("localhost","root","","mini") or die("connection failed");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="application.css">

    <title>APPLICATIONS</title>
</head>
<script>   
function birth_certificate() {   
window.open("birthcertificate.php");  
}
function death_certificate() {   
window.open("deathcertificate.php");  
}      
</script>   
</head>   
<body style = "text-align:center"> 
</br>
</br>  
<button onclick="birth_certificate()">Birth Certificate</button>
</br>
</br>
<button onclick="death_certificate()">Death Certificate</button>
</body>
</html>