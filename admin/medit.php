<?php
include "connection.php";
if(isset($_POST['cancel'])){
    header("Location:managemembers.php");}
$id=$_GET["id"];
$ward="";
$name="";
$email="";
$phone="";
$res=mysqli_query($link,"select * from members where id=$id");
while($row=mysqli_fetch_array($res))
{
    $ward=$row["ward"];
    $name=$row["name"];
    $email=$row["email"];
    $phone=$row["phone"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Members' List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-5">
  <h2>MEMBERS' LIST</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="ward">Ward:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter ward" name="ward" value="<?php echo $ward; ?>">
    </div>
    <div class="form-group">
      <label for="text">Name:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter name" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>" >
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter number" name="phone" value="<?php echo $phone; ?>" >
    </div>
  <button type="submit" name="update"  class="btn btn-default">Update</button>
  </form>
</div>
</div>
</div>
</body>
<?php
if(isset($_POST["update"]))
{
    mysqli_query($link, "update members set ward='$_POST[ward]',name='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]' where id=$id");

    ?>
    <script type="text/javascript">
    window.location="managemembers.php";
    </script>
    <?php
}
   ?>
</html>