
<?php include('header.php'); ?>
<?php  include("dbconnect.php"); ?>

<center>
<h3 style="padding: 10px;">Birthday Event Registration:</h3>
<div class="jumbotron col-6" style=" font-weight: bold;">
<form  action='submit1.php' method='post'>
 
 
  
  <div class="form-group row">
    <label for="decoid" class="col-3">Decoration id:</label>
     <label class="col-4">Simple ballon decoration<input class="form-check-input col-4" type="radio" name="decoid" value="001" required></label>
     <label class="col-4">Helium ballon decoration<input class="form-check-input col-4" type="radio" name="decoid" value="002" required></label>
	 <label class="col-4">Ballon Arch decoration<input class="form-check-input col-4" type="radio" name="decoid" value="003" required></label>
	 <label class="col-4">Surprize decoration<input class="form-check-input col-4" type="radio" name="decoid" value="004" required></label>
  </div>
  
  <div class="form-group row">
    <label for="venue" class="col-3">Venue:</label>
    <input type="text" class="form-control col-8" id="venue" name="venue" placeholder="Enter venue" required>
   
  </div>

  

  <div class="form-group row">
    <label for="date" class="col-3">Date:</label>
    <input type="date" class="form-control col-8" id="date" name='date'  required>
   
  </div>
  <div class="form-group row">
    <label for="people" class="col-3">No. of People:</label>
    <input type="int" class="form-control col-8" id="people"  name='people' placeholder="Enter number of people" required>
  </div>
 
            
			

    </div>
  

    </label>
  </div>
 


 <button class="btn btn-info" type="submit" value='next'>Next</button>
 <button class="btn btn-warning" type="reset"  value='reset' >Reset</button>
  
</form>
</div>
</div>
</center>
<?php include('footer.php'); ?>