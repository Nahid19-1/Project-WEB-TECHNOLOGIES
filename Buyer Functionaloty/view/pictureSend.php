<?php
	$title ="Picture Upload";
	include('header.php');
?>
	<div>
		<h1>Please choose picture </h1>
		<form method="post" action="../controller/pictureCheck.php" enctype="multipart/form-data">
			<input type="file" name="picture">
			<input type="submit" name="submit" value="upload">
			 <a  href="home.php">Back</a>

		</form>
	</div>
	<br>
<?php  include('footer.php')  ?>

