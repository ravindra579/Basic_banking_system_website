<!--connect to mysql-->
<?php

	$conn = mysqli_connect('localhost','root','Ravindra1712@','spark_user');

	if(!$conn){
		die("Not connected to the database please check the error --> ".mysqli_connect_error());
	}

?>