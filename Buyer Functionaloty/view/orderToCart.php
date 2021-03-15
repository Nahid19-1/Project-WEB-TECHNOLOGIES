<?php
	
	$title = "Cart page";
	include('header.php');

	echo $_GET['id'];

?>

	<div id="page_title">
		<h1>Shopping cart</h1>		
	</div>



	<div id="main_content">
	
		<table border="1" width="100%">
			
			<tr>
				<td>ID</td>
				<td>Details</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Action</td>
				
			</tr>
			<tr>
				<td>1</td>
				<td>PAMPERS LARGE(44S)</td>
				<td>1200tk</td>
				<td>10</td>
				<td><a href=""> Remove from cart </a> </td>
				
			</tr>
			<tr>
				<td>2</td>
				<td>Baby Bouncer</td>
				<td>1450tk</td>
				<td>2</td>
				<td><a href=""> Remove from cart </a> </td>
				
			</tr>
			<tr>
				<td>3</td>
				<td>Baby Safety Wrist Belt 360° Rotation</td>
				<td>700tk</td>
				<td>5</td>
				<td><a href=""> Remove from cart </a> </td>
				
			</tr>
			<tr>
				<td>4</td>
				<td>Veet Hair Removal Cream Couple Pack</td>
				<td>180tk</td>
				<td>2</td>
				<td><a href=""> Remove from cart </a> </td>
				
			</tr>
			<tr>
				<td>5</td>
				<td>Silicone Exfoliating Bath Body Scrubber</td>
				<td>480tk</td>
				<td>5</td>
				<td><a href=""> Remove from cart </a> </td>
				
			</tr>
			
			
		</table>
		<table align="Right">
			<tr>
				<td></td>
				<td></td>
				<td><a href="payment.php"><h3>Go to CheckOut</h3></a></td>				

			</tr>
		</table>	
		<br>		
	</div>
	<br>
	<br>

	<div id="nav_bar" align="center">
		
		<a href="home.php">Back to Home</a> &nbsp;&nbsp;
		<a href="productQuantity.php"> All Product List</a>	
				
	</div>
	<br>

<?php include('footer.php') ?>