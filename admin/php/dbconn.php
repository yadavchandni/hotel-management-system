<?php


	$dbserver='localhost';

	$dbusername='root';

	$dbpassword='';

	$dbname='hmp';

	
	$con=mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
	
	if($con==false)
		{
			echo 'connection is failed';

		}
	
	



?>