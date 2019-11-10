<?php

error_reporting(0);

?>



<!DOCTYPE html>


<html>

	<head>

		<title>

			
			home page


		</title>



		<link rel="stylesheet" type="text/css" href="http://localhost\hotel_management_system\admin/css\style.css">


		<style>
	


	.footer-distributed

		{

		background-color:black;
}
</style>

		
	</head>


	<body class="body_bg">



	<!-------------------FOR REGISTRATION FORM -------------------------------------->


	<?php

		include('header.php');

	?>

<!----------------------banner---------------------->


		<div id="banner"></div>


			<div id="room-booking">


				<img src="../image\rms _booking_bg.jpg" style="width: 100%;height: 80% ;">


			</div>


			
		



<!---========================== for php code   -==============================-->

		
		
		<?php

				include('dbconn.php');


				$query="SELECT * FROM `reg_form`" ;


				$data=mysqli_query($con,$query);


				$total=mysqli_num_rows($data);



				//$result=mysqli_fetch_assoc($data);



				//echo $result['roll_no']." ".$result['name'];



					if($total!=0)


		   {




        ?>


		

			<center>

				
				<table  style="margin-top: -450px;color: white;border:2px solid black;">

				
					<tr>

						
						

						<th class="admin_data" style="margin-left: -5px">ID-NO</th>


						<th class="admin_data">NAME</th>



						<th class="admin_data">MOBILE-NO</th>


						<th class="admin_data">CITY</th>


						<th class="admin_data">DISTRICT</th>


						<th class="admin_data">STATE</th>


						<th class="admin_data">CHECK_IN_DATE</th>


						<th class="admin_data">CHECK_OUT_DATE</th>


						<th class="admin_data">MEMBERS</th>


					</tr>
					

<!------------------------

PHP CODE ==================

----------------->

				<?php



				while ($result=mysqli_fetch_assoc($data))

				{
					
					

					 	echo "<br/>


						<tr>

							<td>".$result['id']."</td>


							<td>".$result['username']."</td>


							<td>".$result['mobile_no']."</td>


							<td>".$result['city']."</td>


							<td>".$result['district']."</td>



							<td>".$result['state']."</td>



							<td>".$result['check_in_date']."</td>



							<td>".$result['check_out_date']."</td>



							<td>".$result['members']."</td>



							


						</tr>";
						
				}


		}


		else

		{


			echo "record not found";


		}



	?>

					<tr>


						


						<td class="admin_data"><?php echo $id?></td>


						<td class="admin_data"><?php echo $name?></td>


						<td class="admin_data"><?php echo $mobile_no?></td>


						<td class="admin_data"><?php echo $city?></td>


						<td class="admin_data"><?php echo $district?></td>


						<td class="admin_data"><?php echo $state?></td>


						<td class="admin_data"><?php echo $check_in_date?></td>


						<td class="admin_data"><?php echo $check_out_date?></td>


						<td class="admin_data"><?php echo $members?></td>



					</tr>



					
				</table>




			</center>
		

		</div>	
		
	</div>


<footer class="footer-distributed">
	


	<table>

		

		<td>
			<div class="footer-left">

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				

				</div>

				<p class="footer-company-name" style="color: white">Hotel Management System &copy;</p>

				
			</div>

		</td>
		
		<td>	

			<div class="footer-center" style="margin-left: 350px;padding:20px;">

				<div>
					<i class="fa fa-phone"></i>


					<p style="color: white">+91 9506 84 5999</p>

				</div>
				
				<div>
					<i class="fa fa-map-marker"></i>

					<p style="color: white"><span>21 Aziz Nagar,Madiyaon</span> 

					Lucknow, Uttar Pradesh (India)</p>

				</div>

				

				<div>

					<i class="fa fa-envelope"></i>

					<p  style="color: white"><a href="#" >doorpayhelp@gmail.com</a></p>

				</div>

			</div>

		</td>

		<td>

			<div class="footer-right" style="margin-left: 450px">

				<p class="footer-company-about" style="text-align: left;color: ">

					<span><p style="color: white">About Hotel Management System </p></span><br><br>

					<em style="color: white">We are a mobile marketplace for local services.

					We help customers hire trusted <br>  professionals for all their service needs.
					We are staffed with young,  passionate <br>people working tirelessly  to make a 
					difference in the lives of people  by <br>cateringto their service needs at their doorsteps.</em>


				</p>



				

			</div>


		</td>

	


	</table>
</footer>



</body>



</html>




