<!DOCTYPE html>
<html>
<?php require('pp.php') ?>
<head>
	<title>Registraion</title>
	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
		<?php
include 'head.php';

	 ?>

	    <div class="container">
            	<h1>PLEASE REGISTER HERE</h1>
            	<hr>

            	<h2>Create an account</h2>
            	<hr>

            	<form method="POST" action="save_member.php">
            		<div class="row">
            			<div class="col-md-6 col-ld-6 col-sm-12 col-xs-12">
            				<label>Name</label><br>
            				<input type="text" name="person_name" class="form-control" required>

            			    <label>Phone_number</label><br>
            				<input type="text" name="phone_number" class="form-control" required>

            				<label>Email</label><br>
            				<input type="email" name="email_address" class="form-control" required>

            				<label>Password</label>
            				<input type="password" name="password" class="form-control" required>

            				<label>Confirm password</label>
            				<input type="password" name="password" class="form-control" required>
            				
            					<?php
            				$results = $sql_connection->query("SELECT ID, NAME FROM districts ORDER BY ID ASC");?>
            			
            				<label>District_of_origin</label>
            			    <select class="form-control" name="district_id">
            			    	<?php
            			    	foreach ($results as $key => $value) {
            			    		$id = $value["ID"];
            			    		$name = $value["NAME"];

            			    		echo"<option value='$id'>$name</option>";
            			    	}
            			    	?>
            			    </select><br>

                          <hr>

                          <button type="submit" class="btn btn-danger">Register</button>
                      </div>
                  </div>

            	</form>

</body>
</html>