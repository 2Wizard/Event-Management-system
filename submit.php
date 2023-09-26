<?php
include("dbconnect.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$gender=$_REQUEST['gender'];



$query=mysqli_query($db_connect,"INSERT INTO customer(name,email,phone,gender) VALUES('$name','$email','$phone','$gender')");

if(!$query) 
        { echo "<script type='text/javascript'>alert('Error in Submission! Try Again ');

  window.location = 'index.php';
</script>";}
    else
    {
        echo "<script type='text/javascript'>alert('Succesfully Submitted! ');

  window.location = 'index.php';
</script>";
header('location: event.php');

    }


mysqli_close($db_connect);


?>
