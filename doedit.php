<?php
include("dbconnect.php");
$eventid=$_REQUEST['eventid'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$gender=$_REQUEST['gender'];



$query=mysqli_query($db_connect," UPDATE customer SET name='$name',email='$email',phone='$phone',gender='$gender' WHERE eventid='$eventid' ");

if(!$query) 
        { echo "<script type='text/javascript'>alert('Error in Submission! Try Again ');

  window.location = 'edit.php';

</script>";}
    else
    {
        echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'edit.php';

</script>";

    }

    mysqli_close($db_connect);

?>