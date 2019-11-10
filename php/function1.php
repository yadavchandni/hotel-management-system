<?php

	function showdetails($d1,$d2,$d3,$selection)

	{


		include('dbconn.php');


		$sql="SELECT * FROM `reg_form` WHERE d1='$d1' AND d2='$d2' AND d3='$d3' AND 


		selection=$'selection' ";


		$run=mysqli_query($con,$sql);


		if(mysqli_num_rows($run)>0)

		{

			$data=mysqli_fetch_assoc($run);


			?>



			<center>


		<table class="table-format-room-details">


			<tr>
				
				

						
						

						<th class="admin_data" style="margin-left: -5px">ROOM NO</th>


						<th class="admin_data">ROOM TYPE</th>



						<th class="admin_data">ROOM PRICE</th>


						<th class="admin_data">STATUS</th>



			</tr>




				





			<tr>
				
							
							

					
				
				<td class="admin_data"><?php echo $data['roll_no'];?></td>


				<td class="admin_data"><?php echo $room_type?></td>


				<td class="admin_data"><?php echo $room_price?></td>


				<td class="admin_data"><?php echo $status?></td>



			</tr>




			




		</table>


	</center>
		

		

<?php


		}


		else

		{


		echo "<script>

				alert('no student record found')


			</script>";

		}


	}






?>