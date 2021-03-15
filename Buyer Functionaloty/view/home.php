<?php
	$title = "Home Page";
	include('header.php');
?>

	<div id="page_title">
		<table>
			<td><img src="../model/1.jpg" height="100" width="120"></td>
			<td>
				<h1>Welcome Home,<?php 
							$myfile = fopen('../model/userData.json','r');
							$userinfo =fread($myfile, filesize('../model/userData.json'));
							$jsonDocode = json_decode($userinfo,true);
							$username =$jsonDocode[0]['username'];
							echo($username);
						 ?>
								
		</h1>		
			</td>
		</table>
		
	</div>

	<hr>

	<div class="topnav">
		<table  width="100%">
			<tr align="center">
				<td > <a  href="home.php">Home</a> </td>
				<td >
						<form method="post" action="../controller/searchCheck.php">
	

							<input type="text" name="search" placeholder="What are you looking for?">
							<input type="submit" name="search" value="Search">

						</form>
			
				</td>
				<td >
					Login as,<?php 
							$myfile = fopen('../model/userData.json','r');
							$userinfo =fread($myfile, filesize('../model/userData.json'));
							$jsonDocode = json_decode($userinfo,true);
							$username =$jsonDocode[0]['username'];
							echo($username);
						 ?>
					<a href="../controller/logout.php">Logout</a>
					<a href="deleteId.php">View Profile</a>

				</td>
			</tr>
		</table>
		 
	</div>

	<hr>
	<br>


	<div id="nav_bar">

		<ul><a href="profileUpdate.php">Update your profile</a></ul> 
		<ul><a href="payment.php">Payment</a> </ul>	
		<ul><a href="contact.php">CUSTOMER CARE</a> </ul>
		<ul><a href="pictureSend.php">Upload Picture</a></ul> 
		<ul><a href="orderHistory.php">Order History</a> </ul>	
		<ul><a href="productQuantity.php">All Product List</a> </ul>
		<ul><a href="orderToCart.php"> View Cart</a></ul>
		<ul><a href="comment.php">Comment</a> </ul>
		<ul><a href="download.php">Downlod</a> </ul>





	</div>

	<hr>

	<div id="main_content">
		<br>
		<br>
		<br>
	</div>

<?php  include('footer.php')  ?>