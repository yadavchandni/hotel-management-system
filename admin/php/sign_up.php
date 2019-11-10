
<!----------------------- php code ----------------------------------->



<?php
	

include('dbconn.php');





	//$con=mysqli_connect('localhost','root','') or die(mysqli_error());


	//$db=mysqli_select_db('hmp',$con) or die(mysqli_error());


	if (isset($_POST['submit'])) 


	{




		$id=$_POST['id'];

		$status=$_POST['status'];


		$username=$_POST['username'];


		$password=$_POST['password'];



		$address=$_POST['address'];

		$city=$_POST['city'];

		$district=$_POST['district'];

		$state=$_POST['state'];


		$mobile_no=$_POST['mobile_no'];


		$email=$_POST['email'];
		



		$check_in_date=$_POST['check_in_date'];


		$check_out_date=$_POST['check_out_date'];


		$members=$_POST['members'];


		if($id=='')
		{

			echo " <script>alert(enter your id)</script>";


		}


		if($status=='')
		{

			echo " <script>alert(enter your status)</script>";

			
		}

		if($username=='')
		{

			echo " <script>alert(enter your name)</script>";

			
		}


		if($password=='')
		{

			echo " <script>alert(enter your password)</script>";

			
		}


		if($address=='')
		{

			echo " <script>alert(enter your address)</script>";

			
		}


		if($city=='')
		{

			echo " <script>alert(enter your city)</script>";

			
		}



		if($district=='')
		{

			echo " <script>alert(enter your district)</script>";

			
		}


		if($state=='')
		{

			echo " <script>alert(enter your state)</script>";

			
		}



		if($mobile_no=='')
		{

			echo " <script>alert(enter your mobile_no)</script>";

			
		}



		if($email=='')
		{

			echo " <script>alert(enter your email)</script>";

			
		}



		if($check_in_date=='')
		{

			echo " <script>alert(enter your check_in_date)</script>";

			
		}


		if($check_out_date=='')
		{

			echo " <script>alert(enter your check_out_date)</script>";

			
		}



		if($members=='')
		{

			echo " <script>alert(enter your members)</script>";

			
		}



		else

		{


			$query = "INSERT INTO `reg_form`('id', `status`, `username`, `password`, `address`, `city`, `district`, `state`, `mobile_no`, `email`, `check_in_date`, `check_out_date`, `members`) 


			VALUES('$id' ,'$status', '$username', '$password', '$address', '$city', 

			'$district', '$state', '$mobile_no', '$email', '$check_in_date', 

			'$check_out_date', '$members')";



			if(mysqli_query($con,$query))

			{

			?>


			<script>
				

				alert('data insert successfully !!!');


			</script>


		<?php	




		}

		else


		{

			
			echo "error";


		}

		
		}







	
	}









?>


<html>


<head>

		<title>


			hotel management system


		</title>

		<link rel="stylesheet" type="text/css" href="http://localhost/hotel_management_system/css/style.css">


		


	</head>


<body>


	<!-------------------FOR REGISTRATION FORM -------------------------------------->


	<div id="full" style="background-color: #d9d9e1;">


		
		<div id="header">


<!-------LOGO--------------->	


			<div id="logo">


				<h1>

					<strong><i>


						SMKD-HOTEL 


					</i></strong>


				</h1>
				

			</div>

<!--------------NAVIGATION BAR----------------------------->



				<div id="nav">


					<ul>


						<li>

							<a href="http://localhost/hotel_management_system/php/index.php">HOME</a>

						</li>

						<li>

							<a href="http://localhost/hotel_management_system/php/

							contact_us.php">CONTACT NO</a>

						</li>


						<li>

							<a href="http://localhost/hotel_management_system/php/


							book_my_stay.php">BOOK MY STAY</a>

						</li>


						<li>

							<a href="our_details.php">OUR-DETAILS</a>

						</li>


						<li>

							<a href="help.php">HELP</a>

						</li>


					</ul>


				</div>

		</div>

<!----------------------banner---------------------->


		<div id="banner">



			<div id="reg_form_img">


				<img src="../image\badroom_for_form.jpg" style="width: 100%;height:95%;">

				
			</div>


<!-----------for registration form----------->




			<div id="reg_from1">


				<center>


					<form  action=""  method="post" >
				


				
						<table style="margin-top: -579px;margin-left: -206px">

						



							<td><h3> Please sign up to continue </h3>

</td>


<!-------------------- id ------------------------------------------>


							
						<tr>	

							<td> ID NO</td>


							<td>


								<input class="contain" type="number" name="id"

								 placeholder="enter your id-no" >


							</td>

						</tr>	
					
						



						<tr colspan="4">


							<td style="color:red">STATUS</td>
							

							<td>


								<input class="contain" type="text" name="status"

								 value="available"  >


							</td>


						</tr>	




	<!------NAME ------------------->


						<tr>


							<td >NAME</td>


							<td>


								<input class="contain" type="text" name="username" 


								placeholder="enter your name " >

							</td>


						</tr>


						

<!----address----------><tr>


							<td style="color: red">PASSWORD</td>


							<td>


								<input class="contain" type="password" name="password" placeholder="enter your password " >


								

							</td>


						</tr>



						<tr>


							<td style="color:white">ADDRESS</td>


							<td>


								<input class="contain" type="text" name="address" placeholder="enter your address " >


								


							</td>


						</tr>

	<!------city ---------->
							<tr>

								<td>CITY</td>


								<td>


									<select class="contain" name="city">


										<option value="Select">----Select-----</option>

										<option value="Lucknow">Lucknow</option>

										<option value="Delhi">Delhi</option>

										<option value="Mumbai">Mumbai</option>

										<option value="Hyderabad">Hyderabad</option>

										<option value="bengluru">Bengluru</option>

										<option value="Gorakhpur">Gorakhpur</option>

										<option value="Other">Other</option>
										

									</select>

								</td>

							</tr>

	<!------destrict---------->

							<tr>

								<td style="color:red">

									DISTRICT

								</td>

								<td>

									<select class="contain" name="district">


										<option value="Select">----Select-----</option>

										<option value="Lucknow">Lucknow</option>

										<option value="Delhi">Delhi</option>

										<option value="Mumbai">Mumbai</option>

										<option value="Hyderabad">Hyderabad</option>

										<option value="Bengluru">Bengluru</option>

										<option value="Gorakhpur">Gorakhpur</option>

										<option value="Other">Other</option>
										

										

									</select>
									
								</td>

							</tr>


	<!------states---------->


							<tr>

								<td style="color:white">

									STATE

								</td>


								<td>

									<select class="contain" name="state">


										<option value="Select">----Select-----</option>

										<option value="MP">M.P</option>


										<option value="Delhi">Delhi</option>

										<option value="Mumbai">Mumbai</option>

										<option value="Maharastra">MAHARASHTRA</option>

										<option value="AP">A.P</option>

										<option value="UP">U.P</option>

										<option value="Other">Other</option>
								
									</select>


								</td>


							</tr>



	<!----------MOBILE NO------------------------>


							<tr>


							<td style="color:red">MOBILE NO</td>


							<td>


								<input class="contain" type="number" name="mobile_no"  placeholder="enter your mobile-no" >

								


							</td>


						</tr>



	<!------EMAIL---------->


						<tr>

							<td style="color:black">ENTER  E-MAIL</td>

							<td>

								<input class="contain" type="email" name="email"  


								placeholder="enter your e-mail" >


							</td>

						</tr>

	<!-----------------CHECK IN  DATE---------------->
						<tr>

							<td style="color:red">CHECK IN DATE</td>

							<td>

								<input class="contain" type="text" name="check_in_date"  

								 placeholder="enter your check_in_date">


							</td>


						</tr>

	<!-----------------CHECK OUT DATE---------------->

						<tr>	

							<td style="color:white">CHECK OUT DATE</td>

							<td>

								<input class="contain" type="text" 


								name="check_out_date" placeholder="enter your check_out_date">


							</td>

						</tr>


	<!---------------MEMBER---------------------------------------->


						<tr>

							<td style="color:red">MEMBERS</td>

							<td>

								<input class="contain" type="text" name="members" 

								placeholder="enter your membership" >


							</td>

						</tr>


	<!----------submit---------->
							<td>

								<center>

								<input id="submit" type="submit" name="submit" value="submit"> 


								

								

							</center>


							</td>


							




							<td>


								<p style="margin-left: 30px;color: white;margin-bottom: -20px;

								font-size:22px;">Already a Member


									<a  href="http://localhost/hotel_management_system/admin/

									php/login_form1.php"> Sign-In</a>


								</p>

							</td>
							

							


							</center>


					</table>


				</form>



			</div>


			
			
		</div>



	</div>


</body>



</html>



