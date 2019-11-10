<html>


<head>


		<title>


			hotel management system


		</title>

		<link rel="stylesheet" type="text/css" href="../css/style.css">


		


	</head>


<body>


	<!-------------------FOR REGISTRATION FORM -------------------------------------->


	<?php

			include('header2.php');

	?>


<!----------------------banner---------------------->



		<div id="banner"></div>


			<div class="banner-img">

				

				<img src="../image\rms _booking_bg.jpg" style="width: 100%;height: 85%;margin-left: -5px">
				
			</div>

			
		
		<div id="f1">


			<!---for table-->


			<center>


				<table style="margin-top: -191px;color: white;">


					<tr>

						
						<th class="row">DESTINATION</th>

						<th class="row">CHECK IN DATE</th>

						<th class="row"> CHECK OUT DATE</th>

						<th class="row">ROOM NO</th>

						
							
					</tr>


					<tr >



<!----for data --->

						<td class="data">

							<input style="color: red; padding: 8px;" type="text" name="d1" placeholder="ENTER DESTINATION">


						</td>


						<td class="data">

							<input style="color: red;padding: 8px;" type="text" name="d2" placeholder="DD/MM/YY">

						</td>


						<td class="data">

							<input  style="color: red;padding: 8px;" type="text" name="d3" placeholder="DD/MM/YY">

						</td>


						<td class="data">



<!----dropdown bar --->


							<select style="color: red;padding: 8px;" class="choose">

								<option>1</option>

								<option>2</option>

								<option>3</option>

								<option>4</option>

								<option>5</option>

								


							</select>



	<!------------SUBMIT BUTTON--------->


							<td><center>


								<input type="submit" name="sub" value="check" 


								style="width: 135px;height: 36px;/*! margin-top: -9px; */


								text-align: center;">


							</center>


							</td>


						</td>	



					</tr>

					
				</table>


			</center>

		

		</div>	
		

	</div>



</body>



</html>



