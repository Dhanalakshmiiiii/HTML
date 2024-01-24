<html>
<head>
 <style>
   tr,td{
	padding:1em;
   }
 </style>
</head>
<body>
<?php
   $con=Mysqli_Connect("localhost","root","","dhanam");
   if(!$con){
	echo "Error in connection";
   }
   else{
	$qry="SELECT * FROM ammu";
	$val=mysqli_query($con,$qry);
	echo '<table border="1">
		<th>Name</th>
		<th>Email</th>
		<th>Password</th>
		<th>Phone</th>';
	if(mysqli_num_rows($val)){
		while($row=mysqli_fetch_assoc($val)){
			echo '<tr>';
				echo '<td>';
					echo $row["Name"];
				echo '</td>';
				echo '<td>';
					echo $row["Email"];
				echo '</td>';
				echo '<td>';
					echo $row["Password"];
				echo '</td>';
				echo '<td>';
					echo $row["Phone"];
				echo '</td>';
			echo '</tr>';
		}
	}
	else{
		echo "Error".$query_mysqli_error($con);
	}
   }
?>
</body>
</html>