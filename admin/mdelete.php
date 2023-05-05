<?php
include "connection.php";
$id=$_GET["id"];
mysqli_query($link,"delete from members where id=$id");
?>
<script type="text/javascript">
    window.location="managemembers.php";
</script>