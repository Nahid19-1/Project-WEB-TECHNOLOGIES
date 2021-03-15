<?php
	
	if(isset($_POST['search']))

		$name 	= $_POST['search'];
		
		
				$myfile = fopen('../model/productList.json', "r");
				$userData = fread($myfile, filesize('../model/productList.json'));
				$jsonen = json_decode($userData, true);
				
				foreach ($jsonen as $key => $value) 
				{
    				if (in_array('2', $value)) 
    					{
	      			 
	      			 		print_r("Name  :".$jsonen[$key]['name']);
	      			 		print_r("Price  :".$jsonen[$key]['price']);

	      			 	}
	      		
	      		}



?>