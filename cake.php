
<?php include('header.php'); ?>
<?php  include("dbconnect.php"); ?>

<center>
<h3 style="padding: 10px;color:Black; background-color:#B0C4DE">Birthday Event Registration:</h3>
<div class="jumbotron col-6" style=" font-weight: bold;">
<form  action='submit2.php' method='post'>
   
   <div class="form-group row">
    <label for="weight" class="col-3">Weight:</label>
    <input type="int" class="form-control col-8" id="weight"  name='weight' placeholder="Enter weight in KG" required>
   
  </div>
  
  <div class="form-group row">
    <label for="title" class="col-3">Type:</label>
     <label class="col-4">Pasteries<input class="form-check-input col-4" type="radio" name="type" value="pasteries" required></label>
     <label class="col-4">Cake<input class="form-check-input col-4" type="radio" name="type" value="Cake" required></label>
  </div>
 
<div class="form-group row">
    <label for="flavour" class="col-3">flavour:</label>
    <input type="text" class="form-control col-8" id="flavour" name="flavour" placeholder="Enter flavour" required>
   
  </div>


    </div>
  

    </label>
  </div>
 
<button class="btn btn-info" type="submit" value='submit'>Next</button>
<button class="btn btn-warning" type="reset"  value='reset' >Reset</button>

  
</form>
</div>
</div>
</center>
<?php include('footer.php'); ?>