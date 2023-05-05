<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from events where id=$id");
?>
<script type="text/javascript">
    window.location="manageevents.php";
</script>