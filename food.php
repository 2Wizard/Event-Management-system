
<?php include('header.php'); ?>
<?php  include("dbconnect.php"); ?>

<center>
<h3 style="padding: 10px;color:Black; background-color:#B0C4DE">Birthday Event Registration:</h3>
<div class="jumbotron col-6" style=" font-weight: bold;">
<form  action='submit3.php' method='post'>
 
 
  <div class="form-group row">
    <label for="noofpeople" class="col-3">No. of People:</label>
    <input type="int" class="form-control col-8" id="noofpeople"  name="noofpeople" placeholder="Enter number of people" required>
  </div>
  
 <div class="form-group row">  
  <label for="types" class="col-3">FoodType:</label>
     <label class="col-4">North-Indian <input class="form-check-input col-4" type="radio" name="types" value="North-Indian" required></label>
     <label class="col-4">South-Indian<input class="form-check-input col-4" type="radio" name="types" value="South-Indian" required></label>
  </div>
   
 
 

    </label>
  </div>
 
<button class="btn btn-info" type="submit"  value='submit' >Submit</button>
<button class="btn btn-warning" type="reset"  value='reset' >Reset</button>
 
  
</form>
</div>
</div>
</center>
<?php include('footer.php'); ?>