<?php
	
	//***Database connecting****
	$database = mysqli_connect('localhost', 'sourav', 'sourav123', 'phpproject');

		if(!$database){
			echo "Connection Error: ". mysqli_connect_error();
		}

?>