<?php
	
	if(isset($_POST['submit']))

		$name 		= $_POST['name'];
		$username 	= $_POST['username'];
		$phone 		= $_POST['phone'];
		$email 		= $_POST['email'];
		
				$myfile = fopen('../model/userData.json', "r");
				$userData = fread($myfile, filesize('../model/userData.json'));
				$jsonen = json_decode($userData, true);
				
				foreach ($jsonen as $key => $value) 
				{
    				if (in_array('mom1', $value)) 
    				{
	      			 	 unset($jsonen[$key]);
	      			 }
	      		}



				$jsonEncode = json_encode($jsonen);
				$myfile = fopen('../model/userData.json','w');
				fwrite($myfile, $jsonEncode);
				fclose($myfile);

				header('location: ../view/login.html');
				echo $myfile;


?>