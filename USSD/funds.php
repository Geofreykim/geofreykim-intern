<?php 
require('www.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	 	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>

	<?php

	  $records = $sqliCon->query("SELECT phone_number, name, funds_given FROM members,funds WHERE funds.member_id = members.id");

	 ?>

	<div class="container">

		<h2>Charity for the Needy</h2>
		<hr>
		<table class="table">

			<thead>
				<th>Phone Number</th> <th>Name</th> <th>Funds</th>
			</thead>

			<tbody>
				 <?php

				   if($records){

				   	 foreach ($records as $key => $value) {

				   	 	$phone = $value["phone_number"];
				   	 	$name = $value["name"];
				   	 	$total = $value["funds"];
				   	 	 echo "
				   	 	 <tr> 
				   	 	    <td>$phone </td>
				   	 	    <td>$name </td>
				   	 	    <td>$total </td>
 
				   	 	  </tr>
				   	 	 ";
				   	 }




				   }else{
				   	echo "Bad queery: ".$sqliCon->error;
				   } 


				  ?>
			</tbody>


		</table>
	</div>



</body>
</html>