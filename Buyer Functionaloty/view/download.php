<?php
	$title = "Downlod Page";
	include('header.php');
?>
	
	<h1>This Is Downlod Page</h1>
	<div  id="page_title">
		<p>To downlod image CLICK it:<p>
		<a href="../model//2.jpg" download="medlogo">

  			<img src="../model//2.jpg" width="120" height="150">

		</a>
		<br>
		<br>
		<a href="../model//1.jpg" download="homelogo">

  			<img src="../model//1.jpg" width="120" height="150">

		</a>

	</div>
<?php  include('footer.php')  ?>

