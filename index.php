
<?php include('header.php'); ?>
<?php  include("dbconnect.php"); ?>

<center>
<h3 style="padding: 10px;color:Black; background-color:#B0C4DE">Birthday Event Registration:</h3>
<div class="jumbotron col-6" style=" font-weight: bold;">
<form  action='submit.php' method='post'>

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
    <label for="gender" class="col-3">Gender:</label>
     <label class="col-4">male<input class="form-check-input col-4" type="radio" name="gender" value="male" required></label>
     <label class="col-4">female<input class="form-check-input col-4" type="radio" name="gender" value="female" required></label>
  </div>

  </div>
  
   

    </div>
  </div>

    </label>
  </div>
 

<button  class="btn btn-info" type="submit">Next</button>


  <button class="btn btn-warning" type="reset"  value='reset' >Reset</button>
  
 

</form>
</div>
</div>
</center>
<?php include('footer.php'); ?>

