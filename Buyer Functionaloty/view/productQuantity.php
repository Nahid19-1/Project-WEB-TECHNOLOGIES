<?php
	
	$title = "Product Quantity";
	include('header.php');

?>

	<div id="page_title">
		<h1>Product List and Quantity</h1>

		<table align="Right">
			<td>
				<fieldset>
					<legend>Filter by</legend>
					 <select name="productFilter">
					 		<option value="default-">Default</option>
					 		<option value="az">Name(A-Z)</option>		
						 	<option value="za">Name(Z-A)</option>
						 	<option value="Price_LH">Price(Low-High)</option>	
						 	<option value="Price_HL">Price(High-Low)</option>		
					 </select> <br>

				</fieldset>
			</td>			
		</table>		
	</div>
	


	<div id="main_content">
	
		<table border="1" width="100%">
			<legend>Baby and Mom:</legend>
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
				<td><a href="orderToCart.php?id=01"> Add to Cart </a> </td>
			</tr>
			<tr>
				<td>2</td>
				<td>Baby Bouncer</td>
				<td>1450tk</td>
				<td>2</td>
				<td><a href="orderToCart.php?id=2"> Add to Cart </a> </td>
			</tr>
			<tr>
				<td>3</td>
				<td>Baby Safety Wrist Belt 360° Rotation</td>
				<td>700tk</td>
				<td>5</td>
				<td><a href="orderToCart.php?id=3"> Add to Cart </a> </td>
			</tr>
			
			
		</table>
			
	</div>
	<br>
	<br>

	<div id="main_content">
	
		<table border="1" width="100%">
			<legend>Hygiene:</legend>
			<tr>
				<td>ID</td>
				<td>Details</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>4</td>
				<td>Veet Hair Removal Cream Couple Pack</td>
				<td>180tk</td>
				<td>2</td>
				<td><a href="orderToCart.php?id=4"> Add to Cart </a> </td>
			</tr>
			<tr>
				<td>5</td>
				<td>Silicone Exfoliating Bath Body Scrubber</td>
				<td>480tk</td>
				<td>5</td>
				<td><a href="orderToCart.php?id=5"> Add to Cart </a> </td>
			</tr>
			<tr>
				<td>6</td>
				<td>Nannys Wet Wipes with Fliptop - 72 Pieces</td>
				<td>360tk</td>
				<td>3</td>
				<td><a href="orderToCart.php?id=6"> Add to Cart </a> </td>
			</tr>
			
		</table>
			
	</div>
	<br>
	<br>

	<div id="main_content">
	
		<table border="1" width="100%">
			<legend>Beauty Care:</legend>
			<tr>
				<td>ID</td>
				<td>Details</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>7</td>
				<td>Garnier Ultimate Blends Honey Treasures Restoring Body Lotion For Very Dry Skin - 400ml</td>
				<td>975tk</td>
				<td>1</td>
				<td><a href="orderToCart.php?id=7"> Add to Cart </a> </td>
			</tr>
			<tr>
				<td>8</td>
				<td>Dove Go Fresh Cucumber & Green Tea Underarm Deodorant Stick - 40ml</td>
				<td>400tk</td>
				<td>10</td>
				<td><a href="orderToCart.php?id=8"> Add to Cart </a> </td>
			</tr>
			<tr>
				<td>9</td>
				<td>T-Zone Charcoal & Bamboo Clearing Mud Night Treatment - 15ml</td>
				<td>450tk</td>
				<td>2</td>
				<td><a href="orderToCart.php?id=9"> Add to Cart </a> </td>
			</tr>
			<tr>
				<td>10</td>
				<td>The Body Shop Vitamin C Glow Boosting Moisturiser - 50ml</td>
				<td>1800tk</td>
				<td>2</td>
				<td><a href="orderToCart.php?id=10"> Add to Cart </a> </td>
			</tr>
			<tr>
				<td>11</td>
				<td>The Body Shop Tea Tree Mattifying Lotion - 50ml</td>
				<td>1099tk</td>
				<td>10</td>
				<td><a href="orderToCart.php?id=11"> Add to Cart </a> </td>
			</tr>
			<tr>
				<td>12</td>
				<td>Neutrogena Ultra Sheer Dry Touch Sunscreen with SPF45 - 88ml</td>
				<td>1220tk</td>
				<td>10</td>
				<td><a href="orderToCart.php?id=12"> Add to Cart </a> </td>
			</tr>
			
			
		</table>
			
	</div>
	
	<br>
	<div align="Center">
		<a href="home.php">Back to Home</a> &nbsp;&nbsp;
	    <a href="orderToCart.php"> View Cart</a>
	</div>
	<br>

<?php include('footer.php') ?>