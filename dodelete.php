
<?php
include("dbconnect.php");
$eventid=$_REQUEST["eventid"];
$query=mysqli_query($db_connect, "delete from customer  where eventid = '$eventid' ");
mysqli_close($db_connect);
if($query) {

    echo "<script type='text/javascript'>alert('Succesfully Deleted! ');

  window.location = 'delete.php';


</script>";
}
?>