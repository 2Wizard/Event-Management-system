<?php
include("dbconnect.php");
$decoid=$_REQUEST['decoid'];
$venue=$_REQUEST['venue'];
$date=$_REQUEST['date'];
$people=$_REQUEST['people'];




$query=mysqli_query($db_connect,"INSERT INTO event(decoid,venue,date,people) VALUES('$decoid','$venue','$date','$people')");

if(!$query) 
        { echo "<script type='text/javascript'>alert('Error in Submission! Try Again ');

  window.location = 'event.php';
</script>";}
    else
    {
        echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'event.php';
</script>";
header('location: cake.php');

    }


mysqli_close($db_connect);


?>
