<?php

error_reporting(0);

?>


<html>


<head>


		<title>


			hotel management system


		</title>

		<link rel="stylesheet" type="text/css" href="../css/style.css">

<style>
	


	.footer-distributed

		{

		background-color:black;
}
</style>
		


	</head>



<body class="details-body-bg">




<div>

	<?php

		include('header.php');

	?>



	<h1 class="room-details-heading">
		

		WELCOME ADMIN

	</h1>
	

</div>


	
		<?php

				include('dbconn.php');


				$query="SELECT * FROM `room_management`" ;


				$data=mysqli_query($con,$query);


				$total=mysqli_num_rows($data);



				//$result=mysqli_fetch_assoc($data);



				//echo $result['roll_no']." ".$result['name'];



					if($total!=0)


		   {




        ?>





		<center>


		<table class="table-format-room-details">


			<tr>
				
				

						
						

						<th class="admin_data" style="margin-left: -5px">ROOM NO</th>


						<th class="admin_data">ROOM TYPE</th>



						<th class="admin_data">ROOM PRICE</th>


						<th class="admin_data">STATUS</th>



			</tr>




				<?php



				while ($result=mysqli_fetch_assoc($data))

				{
					
					

					 	echo "<br/>


						<tr>

							<td>".$result['room_no']."</td>


							<td>".$result['room_type']."</td>


							<td>".$result['room_price']."</td>


							<td>".$result['status']."</td>


							
						</tr>";
						
				}


		}


		else

		{


			echo "record not found";


		}



	?>



			<tr>
				
				<td class="admin_data"><?php echo $room_no?></td>


				<td class="admin_data"><?php echo $room_type?></td>


				<td class="admin_data"><?php echo $room_price?></td>


				<td class="admin_data"><?php echo $status?></td>



			</tr>




			




		</table>


	</center>
		

	</div>	



</div>

</body>




</html>

