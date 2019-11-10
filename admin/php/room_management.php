<?php

	


	session_start();


	if(isset($_SESSION['uid']))


	{


	echo "";

	}



?>


<html>


<head>


		<title>


			hotel management system


		</title>

		<link rel="stylesheet" type="text/css" href="http://localhost/hotel_management_system/css/style.css">


		<style>
	


	.footer-distributed

		{

		background-color:black;
}
</style>


	</head>


<body>


	<!-------------------FOR REGISTRATION FORM -------------------------------------->


	<div id="full" style="background-color: #d9d9e1;">


		
		<div id="header">


<!-------LOGO--------------->	


			<div id="logo">


				<h1 style="text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;">

					<strong><i>


						SMKD-HOTEL 


					</i></strong>


				</h1>
				

			</div>

<!--------------NAVIGATION BAR----------------------------->



				<div id="nav">


					<ul style="margin-left: 20px;">


						<li>

							<a href="ahome.php">HOME</a>

						</li>

						<li>

							<a href="room_management.php">ROOM UPDATE</a>

						</li>


						<li>

							<a href="room_booking.php">BOOKING</a>

						</li>


						<li>

							<a href="room_detail.php">ROOM DETAILS</a>

						</li>


						<li>

							<a href="sign_up.php">SIGN_UP</a>

						</li>


						<li>
							
							<a href="our_details.php">ABOUT US</a>

						</li>



						


					</ul>



				</div>

		</div>

<!----------------------banner---------------------->



		<div id="banner">


			<div id="room-mgm">


				<img src="../image\room_mgm_bg.jpg" style="width: 100%;height: 85%;">


			</div>



<!-----------for registration form----------->



			<div id="update_form">



				<form  action=""  method="post">


					
					<table style="margin-top: -267px;margin-left: 448px;" >



						<center>
						



	<!------NAME and id---------->


						<tr>


							<td>ROOM-NO</td>


							<td>


								<input class="contain" type="text" name="room_no"  



								placeholder="enter your room no " >


							</td>


						</tr>


						<tr>


							<td> ROOM-TYPE</td>


							<td>


								<input class="contain" type="text" name="room_type" 



								 placeholder="enter your room-no" >



							</td>



						</tr>


	<!------price---------->



							<tr>

								<td>ROOM-PRICE</td>


								<td>


									<input class="contain" type="text" name="room_price" 


									 placeholder="enter your room-price" >



								</td>



							</tr>

								

	<!----------submit---------->



							<td>



								<center>


								<input id="submit" type="submit" name="submit" value="submit">


							</center>



							</td>


							</center>



					</table>



				
				

				</form>
	



			</div>

			
			
		</div>

|

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


<!----------------------- php code ------------------------------------------>


<?php



	include('dbconn.php');



 	if(isset($_POST['submit']))


 	{

 		$room_no=$_POST['room_no'];



 		$room_type=$_POST['room_type'];



 		$room_price=$_POST['room_price'];




 		if($room_no=='')
		{

			echo " <script>alert(enter your room_no)</script>";


		}


		if($room_type=='')
		{

			echo " <script>alert(enter your room_type)</script>";

			
		}

		if($room_price=='')
		{

			echo " <script>alert(enter your $room_price)</script>";

			
		}


		else

		{

			$query="INSERT INTO `room_management` (`room_no`, `room_type`, `room_price`)

			 

			 VALUES ('$room_no', '$room_type', '$room_price')";



			// echo $query;




			 if(mysqli_query($con,$query))


			{


			?>


			<script>


				alert('data insert successfully !!!');


			</script>


		<?php	




		}

	


		}


 		

 	}




?>


















