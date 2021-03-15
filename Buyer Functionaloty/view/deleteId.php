<!DOCTYPE html>
<html>
<head>
	<title>Delete Page</title>
</head>
<body>
	<form method="post" action="../controller/deleteIDCheck.php">
		<fieldset>
			<legend>Profile Information</legend>
			<table>

				<?php 
							$myfile = fopen('../model/userData.json','r');
							$userinfo =fread($myfile, filesize('../model/userData.json'));
							$jsonDocode = json_decode($userinfo,true);
				?>
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><input type="text" name="name" value="<?php $name =$jsonDocode[1]['name'];echo($name); ?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" value="<?php $username =$jsonDocode[1]['username'];echo($username); ?>"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>:</td>
					<td><input type="number" name="phone" value="<?php $phone =$jsonDocode[1]['phone'];echo($phone); ?>" ></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="email" name="email" value="<?php $email =$jsonDocode[1]['email'];echo($email); ?>"></td>
				</tr>

				<tr>
					<td><a href="login.html">Back to Home</a></td>
					<td></td>
					<td>
						<input type="submit" name="submit" value="Delete">
						<a href="login.html">Sign In</a>
					</td>
				</tr>

			</table>
		</fieldset>
	</form>
</body>
</html>