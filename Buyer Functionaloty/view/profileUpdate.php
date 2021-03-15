<?php
	
	$myfile = fopen('../model/userData.json', "r");
				$userData = fread($myfile, filesize('../model/userData.json'));
				$jsonen = json_decode($userData, true);
	$name=($jsonen[0]['name']);
	$username=($jsonen[0]['username']);
	$email=($jsonen[0]['email']);
	


 ?>
<?php
	$title = "Profile Update";
	include('header.php');
?>
<div>
	<form>
		<fieldset>
		<legend><h2>Update Your Profile</h2></legend>
		<table width="30%" >
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name" value="<?=$name ?>"></td>
				
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="name" value="<?=$username ?>"></td>

			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="name" value="<?=$email ?>"></td>
			</tr>
			<tr>
				<td>Previous Password</td>
				<td>:</td>
				<td><input type="password" name="ppassword"> </td>
			</tr>
			<tr>
				<td>New Password</td>
				<td>:</td>
				<td><input type="password" name="npassword"> </td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="submit" value="Save Changes"> </td>
			</tr>

		</table>
		
		</fieldset>
		
	</form>

</div>

<div id="nav_bar" align="center">
		
		<a href="home.php">Back to Home</a> 
			
				
	</div>
	<br>

<?php include('footer.php') ?>