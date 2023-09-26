<?php
include("dbconnect.php");
$weight=$_REQUEST['weight'];
$type=$_REQUEST['type'];
$flavour=$_REQUEST['flavour'];





$query=mysqli_query($db_connect,"INSERT INTO cake(weight,type,flavour) VALUES('$weight','$type','$flavour')");

if(!$query) 
        { echo "<script type='text/javascript'>alert('Error in Submission! Try Again ');

  window.location = 'cake.php';
</script>";}
    else
    {
        echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'cake.php';
</script>";
header('location: food.php');

    }


mysqli_close($db_connect);


?>
