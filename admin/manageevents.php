<?php
if(isset($_POST['cancel'])){
  header("Location:admin.php");}
include "connection.php";
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
    <div class="col-lg-5">
  <h2>EVENTS</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="date">Date:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter date" name="date" >
    </div>
    <div class="form-group">
      <label for="time">Time:</label>
      <input type="time" class="form-control" id="time" placeholder="Enter time" name="time" >
    </div>
    <div class="form-group">
      <label for="venue">Venue:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter venue" name="venue">
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit" name="update" class="btn btn-default">Update</button>
    <button type="delete"name="delete"  class="btn btn-default">Delete</button>
  </form>
</div>
</div>
<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
      <th>ID</th>
        <th>Title</th>
        <th>Date</th>
        <th>Time</th>
        <th>Venue</th>
        <th>Edit</th>
        <th>Delete</th>
    <tbody>
<?php
    $res=mysqli_query($link,"select * from events");
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
      echo "<td>"; echo $row["id"]; echo "</td>";
      echo "<td>"; echo $row["title"]; echo "</td>";
      echo "<td>"; echo $row["date"]; echo "</td>";
      echo "<td>"; echo $row["time"]; echo "</td>";
      echo "<td>"; echo $row["venue"]; echo "</td>";
echo "<td>" ?><a href="edit.php?id=<?php echo $row["id"] ;?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
echo "<td>" ?><a href="delete.php?id=<?php echo $row["id"] ;?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
echo "</tr>";
    }
?>
</tbody>
</table>
</div>
</body>
<?php
if(isset($_POST["insert"]))
{
   mysqli_query($link,"INSERT INTO events VALUES(NULL,'$_POST[title]','$_POST[date]','$_POST[time]','$_POST[venue]')");
?>
  <?php
    }
    if(isset($_POST["delete"]))
    {
      mysqli_query($link,"DELETE FROM events WHERE title='$_POST[title]'") or die(mysqli_error($link));
      ?>
     <script type="text/javascript">
     window.location.href=window.Location.href;
     </script>
     <?php
       }   if(isset($_POST["update"]))
        {
          mysqli_query($link,"update events set title='$_POST[venue]' where title='$_POST[title]'" or die(mysqli_error($link)));
       ?>
          <script type="text/javascript">
            window.location.href=window.Location.href;
            </script>
            <?php
        }
      ?>
</html>