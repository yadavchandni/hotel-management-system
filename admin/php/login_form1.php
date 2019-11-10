<?php

	include('dbconn.php');


	session_start();


	if(isset($_SESSION['uid']))


	{


	echo "";

	}



?>




<html>

	<head>

		<title>

			
			admin-login


		</title>



		
		<link rel="stylesheet" type="text/css" href="http://localhost/hotel_management_system/admin/css/style.css">


		
<style>
	
O

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



<div id="banner"></div>



			<div class="login_form_bg_img">



			<img src="../image\login_form_bg.jpg" style="width: 100%;height: 85%;">



			</div>



<hr color="red">



<div id="f1" style=" height: 10%">


	<p class="term-and-condition" >

			
			By creating or logging into an account you are agreeing with our 

			<a href="term_and_condition.php"> Terms and Conditions </a>

			and

			<a href="privacy_statement.php">Privacy Statement</a>

		
	</p>


	<p class="list-your-property">
		
		list your property
	</p>


		<h1 >


			<center style="margin-top: -580px;">


				ADMIN-LOGIN


			</center>


		</h1>


		<form action=""  method="post">


			<center>



			<table border="2" class="login-table">


			 


				<tr>

					<td class="admin_login" style="font-size: 25px;color:black;">
						

						USERNAME

					</td>

					<td>
						
						<input  style="width: 100%; height: 80%;color: rgb(243,35,50); 


						font-size:16px; text-align:center; padding: 7px;


						border:1px solid black;"class="input_box" type="text" name="username" placeholder="enter your name"  

						 required> 		


 						</td>

				</tr>


				<tr>
					
					<td  class="admin_login" style="font-size: 25px;">


						PASSWORD

					</td>

					<td border="2">
						 
						<input  style="width: 100%; height: 80%;color: rgb(243,35,50); 


							font-size:16px;text-align:center; padding: 7px;


							border:1px solid black;"



							 class="input_box" type="password" name="password" placeholder="enter your password" required>


							  



					</td>



				</tr>



				<tr>

					<td colspan="2">


						<center>
						
						<input  style="width: 40%; height: 100%;color: rgb(243,35,50); 


							font-size:20px; text-align:center; padding: 5PX;background-color:


							black; margin-left: 250px;" class="submit"  type="submit" name="login"  value="Login">



							
						</center>


					</td>





					
				</tr>


				
				

			</table>
			

		</form>



	</center>




<br><br><br><br>



		<p style="font-size: 25px;color:black; margin-left: 450px;margin-top:-5px;" >



			Dont't have an account yet? 



			<a style="margin-top: -50px;" href="http://localhost/hotel_management_system/php/


			reg_form_page1.php">

				Create your account

			</a>


		</p>


		
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






<?php


	if(isset($_POST['login']))


	{

			$username=$_POST['username'];

			
			$password=$_POST['password'];


		$query="select * from reg_form where username='$username' and password='$password'";

			$data=mysqli_query($con,$query);


			$total=mysqli_num_rows($data);


			if($total==1)

			{


//fetch id number


				$contain=mysqli_fetch_assoc($data);


				$id=$contain['id'];



//session is start ---				

				


				$_SESSION['uid']=$id;



//redirect that means, its reached on previous page (path);----



		header('ahome.php');



			}


			else


			{
				

?>	


<!-------here, start javascript for warning msg ----->

					

				<script>


					alert('You are not logging , plese Cretae your Account!!');



//window.open is using for redirect




					window.open('login_form1.php','_self');


				</script>



			<?php

				
			//header('location:http://localhost\hotel_management_system/php/reg_form_page1.php');


			}	
	


	}




?>
