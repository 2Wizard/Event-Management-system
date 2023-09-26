<?php include('createpdf.php') ?>

<?php include('header.php'); ?>

 <div class="container">
<center>

<h3 style="padding: 15px;color:black; background-color:#85C1E9">Registration Report</h3>

    <div class="table-responsive table-hover table-bordered col-13 " >

     <table class="table " >
  <thead > 
    <tr class="table-primary">
                 <th width="1%">Eventid</th>
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
        <div class="col-md-12 " align="right">
            <form method="post"><center>
                <input type="submit" class="btn btn-primary" name="generate_pdf" value=" Generate PDF" />
            </center>
            </form>
        </div>
        </thead>
        </table>
    </div>
    </div>
</center>
</div>
<?php include('footer.php'); ?>