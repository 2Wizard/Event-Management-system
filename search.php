<?php include('header.php'); ?>

<center>
<h2 style="padding: 20px; background-color:#85C1E9">Search Registration:</h3>
 <div class="container">
   <br />
   
   <div class="col-lg-12">
    <div class="input-group">
      <input type="name" class="form-control" name='name' id='eventid' placeholder="Enter a name to Search. . . . . . ." aria-label="Enter a name to search">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>
   <br />
   <div id="result"></div>
  </div>
  </center>
 

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_int').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

</body>
</html>