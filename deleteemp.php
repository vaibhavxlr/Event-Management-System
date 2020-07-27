<?php
$id=$_GET['emp_id'];
include('db.php');
$qq=mysqli_query($con,"DELETE FROM `employee` WHERE emp_id='$id'");
if($qq==true)
		{
			echo "
			<script>
			alert('deleted');
			window.location='viewEmployee.php';
			</script>
			";

		} 
		else
			{
				echo "
			<script>
			alert('error');
			window.location='viewEmployee.php';
			</script>
			";

			 }
	
	?>
