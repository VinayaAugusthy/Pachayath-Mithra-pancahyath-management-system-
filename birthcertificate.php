<?php
if(isset($_POST['cancel'])){
    header("Location:application.php");
}
$conn=mysqli_connect("localhost","root","","mini") or die("connection failed");
$msg="";
$result="";
$mail="";
if(isset($_POST['submit']))
{
   $cname=mysqli_real_escape_string($conn,$_POST['cname']);
   $sex=mysqli_real_escape_string($conn,$_POST['sex']);
   $dob=mysqli_real_escape_string($conn,$_POST['dob']);
   $fname=mysqli_real_escape_string($conn,$_POST['fname']);
   $mname=mysqli_real_escape_string($conn,$_POST['mname']);
   $place=mysqli_real_escape_string($conn,$_POST['place']);
   $address=mysqli_real_escape_string($conn,$_POST['address']);
   $paddress=mysqli_real_escape_string($conn,$_POST['paddress']);
   $sql="INSERT INTO birth(id,cname,sex,dob,fname,mname,place,address,paddress) VALUES (NULL,'$cname','$sex','$dob','$fname','$mname','$place','$address','$paddress')";
   $result=mysqli_query($conn,$sql);
   if($result){
   $msg="Application submitted successfully"; 
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
<link rel="stylesheet" href="birth.css">
    <title>Birth Certificate</title>
</head>
<body>
<div class="container">
    <div class="block">
        <div class="item">
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <h2>BIRTH CERTIFICATE</h2><br>
    <div class="form-group">
    <label for="cname" >Name of child</label><br>
    <input type="text" placeholder="Enter  name..." name="cname"><br>
    </div>
    <div class="form-group">
    <label for="sex">Sex</label><br>
    <input type="text" placeholder="Enter sex..." name="sex"><br>
    </div>
    <div class="form-group">
    <label for="dob">Date Of Birth</label><br>
    <input type="date" placeholder="Enter dob..." name="dob"><br>
    </div>
    <div class="form-group">
    <label for="fname" >Name Of Father</label><br>
    <input type="text" placeholder="Enter  name..." name="fname"><br>
    </div>
    <div class="form-group">
    <label for="mname" >Name Of Mother </label><br>
    <input type="text" placeholder="Enter  name..." name="mname"><br>
    </div>
    <div class="form-group">
    <label for="place" >Place Of Birth</label><br>
    <input type="text" placeholder="Enter  place..." name="place"><br>
    </div>
    <div class="form-group">
    <label for="address">Address of parents at the time of birth of child</label><br>
    <input type="text" placeholder="Enter address..." name="address"><br>
    </div>
    <div class="form-group">
    <label for="paddress">Permanent address of parents</label><br>
    <textarea id="paddress" name="paddress"placeholder="enter address..."></textarea><br>
    </div>
    <input type="checkbox" name="declaration">
    <label for="declaration">I here by acknowledge that all the details submitted above are true.</label></br>
    <button type="submit"  id="submit" class="btn btn-success" style="padding:5px;" name="submit">submit</button>
    <button type="submit"  id="cancel" class="btn btn-danger" style="padding:5px;"  name="cancel">cancel</button><br>
        <span><?php  echo $msg; echo "<br>"; echo $mail; ?></span>
    </form>
    </div>
    </div> 
    </div> 
</body>
</html>