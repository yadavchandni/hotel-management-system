<?php

include('dbconn.php');

error_reporting(0);


//echo $r=$_GET['destination'];


//echo $c1=$_GET['check_in_date'];


//echo $c0=$_GET['check_out_date'];








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


					<ul style="margin-left: 20px">


						
						
						<li>

							<a href="book_my_stay.php">BOOK MY STAY</a>

						</li>


						


						<li>

							<a href="../admin/php/sign_up.php">SIGN_UP</a>

							

						</li>


						<li>

							<a href="../admin/php/login_form.php">LOGIN</a>

							

						</li>


						


						<li>

							<a href="http://localhost/hotel_management_system/admin/php/room_detail.php">ROOM_DETAIL</a>


							
						</li>


						<li>

							<a href="contact_us.php">CONTACT NO</a>

						</li>



						<li>

							<a href="../admin/php/our_details.php">ABOUT US</a>

							
						</li>

					</ul>


				</div>

		</div>


<!----------------------banner---------------------->



		<div id="banner">


			<div id="index_img">


			

				
			</div>

	


		<div id="f1">


			<!---for table-->

		<form action="reg_form_page1.php" method="get">


			<center>

				<table>

					<tr>
						

						<th class="row">DESTINATION</th>

						<th class="row">CHECK IN DATE</th>

						<th class="row"> CHECK OUT DATE</th>

						<th class="row">ROOM NO</th>
						
							
					</tr>



					<tr >


						<!----for data --->



						<td class="data">



							<input style="width: 100%; height: 80%;color: rgb(243,35,50); font-size:16px;text-align:center;" 


							type="text" name="destination" placeholder="ENTER DESTINATION">




						</td>



						<td class="data">



							<input style="width: 100%; height: 80%;color: rgb(243,35,50); font-size:16px;text-align:center;"


							 type="text" name="cid" placeholder="DD/MM/YY">



						</td>



						<td class="data">




							<input style="width: 100%; height: 80%;color: rgb(243,35,50); font-size:16px;text-align:center;" 


							type="text" name="cod" placeholder="DD/MM/YY">



						</td>



						<td  style="width: 20%; height: 80%;color: rgb(243,35,50); font-size:16px;text-align:center;" 

						class="data">


							<select class="choose" name="room">

								<option>1</option>

								<option>2</option>

								<option>3</option>

								<option>4</option>

								<option>5</option>
								


							</select>




								<!------------SUBMIT BUTTON--------->



							<td><center>



								<input type="submit" name="submit" value="check"


								 style="width: 135px;height: 36px;background-color: black;


								 color: white;


								 /*! margin-top: -9px; */text-align: center;">


								</center>


							</td>


						</td>		


					</tr>


					

				</table>


			</center>	

		</from>

		</div>




<hr style="width: 100%;color: red">



<!--------WELCOME -------------------->



		<div>
			


			<h1 id="welcome">


				<center>


				WELCOME IN MY HOTEL


				</center>


			</h1>



				<div id="welcome_image">


					

				<img src="../image\banner_wlcm_index.jpg" style="width: 100%;">

				
		

					

					<p style="margin-top:15px;">




						Zum Nürnberger Hauptmarkt sind es nur wenige Gehminuten. Jedes Jahr öffnet dort Deutschlands berühmtester Weihnachtsmarkt, der Nürnberger Christkindlesmarkt, seine Buden für Besucher aus der ganzen Welt. Bis zum Heiligen Abend besuchen jährlich mehr als zwei Millionen Menschen aus aller Welt den Nürnberger Christkindlesmarkt. 


					</p>
					


				</div>	


		</div>



<br>



<hr style="width: 100%;color: red">



		<!------------------OUR BRANDS---------------------------->



	<div>	



		<div>


			<center>


				<h1 style="margin-top: 305px;margin-top: -15px; ">OUR BRANDS</h1>

			</center>



		</div>


		<div class="our_brands">


			<img src="../image\paris_brands.jpg">


			<img src="../image\taj_brands.jpg">


			<img src="../image\georgian_brands.jpg">



		</div>


		<div>


			<h1 style="float:left;margin-top: -21px;margin-left: 75px;">


				PARIS

				


				<a style="font-size: 20px; color:red;"


				href="more.php">


					[More]

				</a>

			</h1>

			<h1>


				<center style="float: center;margin-top: -21px;margin-right: 186px;">


				TAJ


				<a style="font-size: 20px; color:red;"


				href="more_taj.php">


					[More]

				</a>

				</center>


			</h1>



			<h1 style="float: right;margin-top: -90px;margin-right: 50px;">


				 GEORGIAN


				 <a style="font-size: 20px; color:red;"


				href="more_georgian.php">


					[More]

				</a>

			</h1>

			

		</div>


		
			




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


<!---------------------- php code ---------------------------------->

















