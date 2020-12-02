<?php
		include("db_connect.php");
		$firstName = " ";
		$lastName = " ";
		$email = " ";
		$password = " ";
		$cpassword = " ";
        $emailErr = " ";
        $emailerr = "";
        $passerr = " ";
        $Error = " ";

		if(isset($_POST["Submit"])){
			if(empty($_POST["firstName"])){
				$Error = "Please fill out this form<br>";
			}else{
				$firstName = $_POST["firstName"];
			}
			if(empty($_POST["lastName"])){
				$Error = "Please fill out this form<br>";
			}else{
				$lastName = $_POST["lastName"];
			}

			if(empty($_POST["Email"])){
				$Error = "Please fill out this form<br>";
			}
			else if(filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL)){
				$email = $_POST["Email"];
			}else{
				$emailErr = "Invalid Email Format";
			}

			if(empty($_POST["Pass"])){
				$Error = "Please fill out this form<br>";
			}else{
				$password = $_POST["Pass"];
			}

			if(empty($_POST["cPass"])){
				$Error = "Please fill out this form<br>";
			}else{
				$cpassword = $_POST["cPass"];
			}

            
				$emailquery = "SELECT * FROM users WHERE email='$email' ";
				$result = mysqli_query($database,$emailquery);
				$rows = mysqli_num_rows($result);

				if($rows > 0){
    				$emailerr = "Email Already Exist<br>";
				} else {
   					if($password === $cpassword){

   						if($_POST["firstName"] && $_POST["lastName"] && $_POST["Email"] && $_POST["Pass"]){

			                $sql = "INSERT INTO users(firstName,lastName,email,password) VALUES('$firstName','$lastName','$email','$password')";

								if(mysqli_query($database,$sql)){
									header("location: signin.php");
								}else {
									echo "error";
								}
			             }

   					}else{
   						$passerr = "Password Not Matching<br>";
   					}
				}

		}
		
?>
