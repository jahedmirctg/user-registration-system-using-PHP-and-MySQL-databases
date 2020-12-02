<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Home</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <link rel="stylesheet" href="style.css">
	</head>
<body>
		
	
		<?php
			include("db_connect.php");
		?> 

		<?php
			 $error = " ";

			if(isset($_POST['Submit'])){
				$email = $_POST["email"];
				$password = $_POST["password"];

				$sql = "SELECT * FROM users WHERE email='$email' && password='$password' ";
				$result = mysqli_query($database,$sql);
				$rows = mysqli_num_rows($result);

				if($rows == 1){
    				header("location: home.php");
				} else {
   					$error = "Invalid email or password";
				}
			}
		?> 
		

		<div class="section">
			<div class="card">
				<div class="card-body">
					<form id="form" action="" method="POST">						
					  	<div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					  	</div>
					  	<p>
						    <?php
								echo $error;
							?>
					  	</p>

					  	<div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
					  	</div>
					  	<p>
						    <?php
								echo $error;
							?>
					  	</p>

					  	<button type="submit" name="Submit" class="btn btn-primary">Sign In</button>
					</form>
				</div>
			</div>		
		</div>











 
		<!-- <?php
			include("db_connect.php");
		?> 

		<?php
			$sql = 'SELECT * FROM users';
			$fetch = mysqli_fetch_all(mysqli_query($database,$sql),MYSQLI_ASSOC);

			if(isset($_POST['delete'])){
				$id_value = $_POST['id_value'];

				$sql = "DELETE FROM users WHERE id=$id_value";

				if(mysqli_query($database,$sql)){
					header("location: home.php");
				}else{
					echo "error";
				}
			}
		?>   



		<div class="container">
			<div class="row">
				<?php
					//***Showing results****
					foreach ($fetch as $result) { ?>

						<div class="col-md-4">
							<div class="card" style="width: 20rem; margin: 50px 10px;">
		  						<div class="card-body">
		   							<h5 class="card-title"> <?php echo $result['email'] ?> </h5>
		    						<p class="card-text"> <?php echo $result['password'] ?> </p>
		    						<p class="card-text"> <?php echo $result['firstName'] ?> </p>
		    						<p class="card-text"> <?php echo $result['lastName'] ?> </p>
		    						<hr>
		    						<form action="" method="POST">
		    							<input type="hidden" name="id_value" value=" <?php echo $result['id'] ?> ">
		    							<input type="submit" name="delete" value="Delete">
		    						</form>
			 				 	</div>
							</div>
						</div>
						
				<?php } ?>

			</div>
		</div>
 
 -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>