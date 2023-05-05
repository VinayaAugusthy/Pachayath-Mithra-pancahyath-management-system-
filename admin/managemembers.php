<?php
include "connection.php"
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
  <h2>LIST OF MEMBERS</h2>
  <form action="" name="form1" method="post">
<div class="form-group">
      <label for="number">Ward:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter ward" name="ward" >
    </div>
    <div class="form-group">
      <label for="title">Name:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
    </div>
    <div class="form-group">
      <label for="phone">Phone:</label>
      <input type="number" class="form-control" id="number" placeholder="Enter number" name="phone">
    </div>
    <button type="submit" name="insert" class="btn btn-default">Insert</button>
    <button type="submit"name="update"  class="btn btn-default">Update</button>
  </form>
</div>
</div>
<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
      <th>ID</th>
        <th>Ward</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
  <?php
    $res=mysqli_query($link,"select * from members");
    while($row=mysqli_fetch_array($res))
    {
      echo "<tr>";
      echo "<td>"; echo $row["id"]; echo "</td>";
      echo "<td>"; echo $row["ward"]; echo "</td>";
      echo "<td>"; echo $row["name"]; echo "</td>";
      echo "<td>"; echo $row["email"]; echo "</td>";
      echo "<td>"; echo $row["phone"]; echo "</td>";
      echo "<td>" ?><a href="medit.php?id=<?php echo $row["id"] ;?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
      echo "<td>" ?><a href="mdelete.php?id=<?php echo $row["id"] ;?>"><button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
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
   mysqli_query($link,"INSERT INTO members VALUES(NULL,'$_POST[ward]','$_POST[name]','$_POST[email]','$_POST[phone]')");
?>
   <?php
    }
    if(isset($_POST["delete"]))
    {
      mysqli_query($link,"DELETE FROM members WHERE name='$_POST[name]'") or die(mysqli_error($link));
      ?>
      <script type="text/javascript">
     window.location.href=window.Location.href;
     </script>
     <?php
       }   if(isset($_POST["update"]))
        {
          mysqli_query($link,"update members set name='$_POST[email]' where name='$_POST[name]'" ) or die(mysqli_error($link));
       ?>
          <script type="text/javascript">
            window.location.href=window.Location.href;
            </script>
            <?php
               }
            ?>
</html>