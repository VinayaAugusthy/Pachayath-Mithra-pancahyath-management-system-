<?php
include "connection.php";
$id=$_GET["id"];
$title="";
$date="";
$time="";
$venue="";
$res=mysqli_query($link,"select * from events where id=$id");
while($row=mysqli_fetch_array($res))
{
    $title=$row["title"];
    $date=$row["date"];
    $time=$row["time"];
    $venue=$row["venue"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="col-lg-4">
  <h2>EVENTS</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter title" name="title" value="<?php echo $title; ?>">
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter date" name="date" value="<?php echo $date; ?>">
    </div>
    <div class="form-group">
      <label for="time">Time:</label>
      <input type="time" class="form-control" id="time" placeholder="Enter time" name="time" value="<?php echo $time; ?>" >
    </div>
    <div class="form-group">
      <label for="venue">Venue:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter venue" name="venue" value="<?php echo $venue; ?>" >
    </div>
    <button type="delete"name="update"  class="btn btn-default">Update</button>
  </form>
</div>
</div>
</div>
</body>
<?php
if(isset($_POST["update"]))
{
    mysqli_query($link, "update events set title='$_POST[title]',date='$_POST[date]',time='$_POST[time]',venue='$_POST[venue]' where id=$id");
?>
    <script type="text/javascript">
    window.location="manageevents.php";
    </script>
    <?php
}
?>
</html>