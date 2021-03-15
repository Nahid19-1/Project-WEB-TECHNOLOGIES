
<?php

	$uploadOk = 1;
	$fileInfo = $_FILES['picture'];
	

	$ext= explode('.', $fileInfo['name']);
	$path ='../model/upload/'.$fileInfo['name'];
	if(isset($_POST["submit"]))
	{
		
		if (file_exists($path)) 
			{
			  echo "Sorry, file already exists.";
			  $uploadOk = 0;
			}
		elseif (move_uploaded_file($fileInfo['tmp_name'], $path))
			{
			  echo "Successfully uploaded";
			}
		else
			{
				echo "There is some problem please try again";
			}
	}
	

?>