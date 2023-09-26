<?php

include("dbconnect.php");
$noofpeople=$_REQUEST['noofpeople'];
$types=$_REQUEST['types'];


$query=mysqli_query($db_connect,"INSERT INTO food(noofpeople,types) VALUES('$noofpeople','$types')");

if(!$query) 
        { echo "<script type='text/javascript'>alert('Error in Submission! Try Again ');

  window.location = 'food.php';

</script>";}
    else
    {
        echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'index.php';

</script>";

    }


mysqli_close($db_connect);


?>


$noofpeople=$_REQUEST['noofpeople'];
$types=$_REQUEST['types'];
$query=mysqli_query($db_connect,"INSERT INTO food(noofpeople,types) VALUES('$noofpeople','$types')");

if(!$query) 
        { echo "<script type='text/javascript'>alert('Error in Submission! Try Again ');

  window.location = 'food.php';
</script>";}
    else
    {
        echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'food.php';
</script>";

header('location: index.php');
    }


mysqli_close($db_connect);


?>
