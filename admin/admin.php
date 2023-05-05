
<?php


$conn=mysqli_connect("localhost","root","","mini") or die("connection failed");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<title>ADMIN DESK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
function members() {   
window.open("managemembers.php");  
}   
function events() {   
window.open("manageevents.php");  
}
  
function loginformations() {   
window.open("loginfo.php");  
}  
function suggestion() {   
window.open("suggestionlist.php");  
}    
function complaint() {   
window.open("complaintlist.php");  
}   
function birth() {   
window.open("birth.php");  
}    
function death() {   
window.open("death.php");  
}    
</script>
<link rel="stylesheet" href="admin.css">
</br>
</br>
<h1 style="margin: 10px;" style="text-align:center">ADMIN DESK</h1>
</br>

   
</head>   
<body style = "text-align:center"> 

</br>
</br>  
<button onclick="events()">MANAGE EVENTS</button>
</br>
</br>

<button onclick="members()">MEMBERS' LIST</button>
</br>
</br>
<h1 style="margin: 10px;" style="text-align:center">REPORTS</h1>
</br>
</br>
<button onclick="loginformations()">LOGIN INFORMATIONS</button>
</br>
</br>
<button onclick="suggestion()">SUGGESTION</button>
</br>
</br>
<button onclick="complaint()">COMPLAINTS</button>
</br>
</br>
<button onclick="birth()">BIRTH CERTIFICATE</button>
</br>
</br>
<button onclick="death()">DEATH CERTIFICATE</button>
</body> 
</html>