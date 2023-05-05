<?php
if(isset($_POST['cancel'])){
    header("Location:hello.php");
}
$conn=mysqli_connect("localhost","root","","mini") or die("connection failed");
$msg="";
$result="";
$mail="";
if(isset($_POST['submit']))
{
   $name=mysqli_real_escape_string($conn,$_POST['uname']);
   $email=mysqli_real_escape_string($conn,$_POST['email']);
   $phone=mysqli_real_escape_string($conn,$_POST['phone']);
   $address=mysqli_real_escape_string($conn,$_POST['uaddress']);
   $comment=mysqli_real_escape_string($conn,$_POST['comment']);
   $sql="INSERT INTO suggestion(id,uname,email,phone,uaddress,comment) VALUES (NULL,'$name','$email','$phone','$address','$comment')";
   $result=mysqli_query($conn,$sql);
   if($result){
   $msg="Suggestion added successfully"; 
   }
    else{
        $msg="failed";
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="suggestion.css">
    <title>SUGGESTIONS</title>
</head>
<body>
<div class="container">
    <div class="form">
        <div class="item">
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <h2>SUGGESTIONS</h2><br>
    <div class="form-group">
    <label for="fname" >NAME</label><br>
    <input type="text" placeholder="Enter  name..." name="uname"><br>
    </div>
    <div class="form-group">
    <label for="email">EMAIL</label><br>
    <input type="text" placeholder="Enter email..." name="email"><br>
    </div>
    <div class="form-group">
    <label for="phone">PHONE</label><br>
    <input type="text" placeholder="Enter phone..." name="phone"><br>
    </div>
    <div class="form-group">
    <label for="address">ADDRESS</label><br>
    <input type="text" placeholder="Enter address..." name="uaddress"><br>
    </div>
    <div class="form-group">
    <label for="comment">COMMENT</label><br>
    <textarea id="comment" name="comment"placeholder="enter comment..."></textarea><br>
    </div>
    <button type="submit"  id="submit" class="btn btn-success" style="padding:5px;" name="submit">submit</button>
    <button type="submit"  id="cancel" class="btn btn-danger" style="padding:5px;"  name="cancel">cancel</button><br>
    <span><?php  echo $msg; echo "<br>"; echo $mail; ?></span>
    </form>
    </div>
    </div> 
    </div> 
</body>
</html>