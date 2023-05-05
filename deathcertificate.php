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
    $date=mysqli_real_escape_string($conn,$_POST['date']);
   $name=mysqli_real_escape_string($conn,$_POST['name']);
   $paddress=mysqli_real_escape_string($conn,$_POST['paddress']);
   $fname=mysqli_real_escape_string($conn,$_POST['fname']);
   $mname=mysqli_real_escape_string($conn,$_POST['mname']);
   $address=mysqli_real_escape_string($conn,$_POST['address']);
   $sex=mysqli_real_escape_string($conn,$_POST['sex']);
   $age=mysqli_real_escape_string($conn,$_POST['age']);
   $place=mysqli_real_escape_string($conn,$_POST['place']);
   $religion=mysqli_real_escape_string($conn,$_POST['religion']);
   $sql="INSERT INTO death(date,name,paddress,fname,mname,address,sex,age,place,religion) VALUES ('$date','$name','$paddress','$fname','$mname','$address','$sex','$age,'$place','$religion')";
   echo $sql;
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
<link rel="stylesheet" href="death.css">
    <title>Death Certificate</title>
</head>
<body>
<div class="container">
    <div class="block">
        <div class="item">
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
    <h2>DEATH CERTIFICATE</h2><br>
    <div class="form-group">
    <label for="date">Date of death</label><br>
    <input type="date" placeholder="Enter date..." name="date"><br>
    </div> 
    <div class="form-group">
    <label for="name" >Name of the deceased(Full name)</label><br>
    <input type="text" placeholder="Enter  name..." name="name"><br>
    </div>
    <div class="form-group">
    <label for="paddress">Permanent address</label><br>
    <input type="text" name="paddress"placeholder="enter address..."><br>
    </div>
    <div class="form-group">
    <label for="fname" >Name Of Father/Husband</label><br>
    <input type="text" placeholder="Enter  name..." name="fname"><br>
    </div>
    <div class="form-group">
    <label for="mname" >Name Of Mother </label><br>
    <input type="text" placeholder="Enter  name..." name="mname"><br>
    </div>
    <div class="form-group">
    <label for="address">Address of deceased at the time of death</label><br>
    <input type="text" placeholder="Enter address..." name="address"><br>
    </div>
    <div class="form-group">
    <label for="sex">Sex</label><br>
    <input type="text" placeholder="Enter sex..." name="sex"><br>
    </div>
    <div class="form-group">
    <label for="age">Age</label><br>
    <input type="text" placeholder="Enter age..." name="age"><br>
    </div>
    <div class="form-group">
    <label for="place" >Place Of death</label><br>
    <input type="text" placeholder="Enter  place..." name="place"><br>
    </div>
    <div class="form-group">
    <label for="religion">Religion</label><br>
    <input type="text" placeholder="Enter religion..." name="religion"><br>
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