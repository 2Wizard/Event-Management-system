<?php
function fetch_data()
{
    $output = '';
    $conn = mysqli_connect("localhost", "root", "", "project");
    $sql = "SELECT * FROM   customer ORDER BY eventid";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result))
    {
        $output .= '<tr>  
<td style="background-color:#fff;">'.$row["eventid"].'</td>
<td style="background-color:#fff;">'.$row["name"].'</td>  
<td style="background-color:#fff;">'.$row["email"].'</td>  
<td style="background-color:#fff;">'.$row["phone"].'</td>
<td style="background-color:#fff;">'.$row["gender"].'</td>
 
</tr>  
';
    }
    return $output;
}
 ?>
<?php include('header.php'); ?>

<center>
<h3 style="padding: 20px; color:white;">Records In Database:</h3>
<div class="table-responsive table-hover table-bordered col-10" >
<table class="table" >
  <thead > 
    <tr class="table-primary">
                <th width="1%">eventid</th>
                <th width="1%">Name</th>
                <th width="1%">Email</th>
                <th width="1%">Phone</th>
                <th width="1%">Gender</th>
                
            </tr>


    <tbody>
            <?php
            echo fetch_data();
            ?>
        </tbody>
    </table>
        </thead>
        </table>
    </div>
    </div>
<h3 style="padding: 20px;color:white;">Edit Registration:</h3>

<div class="jumbotron col-6" style=" font-weight: bold;">
<form  action='doedit.php' method='post'>

<div class="form-group row">
    <label for="eventid" class="col-4">ID:</label>
    <input type="int" class="form-control col-7" id="eventid" name="eventid" placeholder="Enter eventid to be edited" required>
 </div>
  <div class="form-group row">
    <label for="name" class="col-3">Name:</label>
    <input type="text" class="form-control col-8" id="name" name="name" placeholder="Enter name" required>
 
  </div>
  <div class="form-group row">
    <label for="exampleInputEmail1" class="col-3">Email address:</label>
    <input type="email" class="form-control col-8" id="email" name="email" placeholder="Enter email" required>
 
  </div>
  <div class="form-group row">
    <label for="phone" class="col-3">Phone:</label>
    <input type="int" class="form-control col-8" id="phone" name="phone" placeholder="Enter phone number" required>
   
  
   
  </div>
  <div class="form-group row">
    <label for="title" class="col-3">Gender:</label>
     <label class="col-4">male<input class="form-check-input col-4" type="radio" name="gender" value="male" required></label>
     <label class="col-4">female<input class="form-check-input col-4" type="radio" name="gender" value="female" required></label>
  </div>

  </div>
 
 


  <button class="btn btn-primary" type="submit"  value='submit' >Submit</button>
  <button class="btn btn-warning" type="reset"  value='Reset' >Reset</button>
</form>
</div>
</div>

</center>

<?php include('footer.php'); ?>

