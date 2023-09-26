<?php
$connect = mysqli_connect("localhost", "root", "", "project");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM symbols 
  WHERE name LIKE '%".$search."%'
 
 ";
}
else
{
 $query = "
  SELECT * FROM symbols ORDER BY name
 ";
}

 $result=$connect->query($query);
if($result->num_rows > 0)
{
 $output .= '
  <div class="table-responsive table col-12">
   <table class="table table bordered table-hover">
   <thead>
    <tr class="table-primary">
     <th>eventid</th>
     <th>Name</th>
     <th>Email</th>
     <th>phone</th>
     <th>Gender</th>
    </tr>
    </thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["eventid"].'</td>
    <td>'.$row["name"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["phone"].'</td>
    <td>'.$row["gender"].'</td>
    </tr>
  ';
 }
 echo $output;
}
else
{
 echo '<h3 style="padding:30px;">Data Not Found</h3>';
}

?>