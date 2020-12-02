<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
		<div>
			<?php
				include("header.php");
			?>
		</div>

		<?php
			include("db_connect.php");

			if(isset($_POST['update'])){

				$update = " ";
				$notupdate = " ";

				$email = $_POST["email"];
				$password = $_POST["password"];
				$firstName = $_POST["firstName"];
				$lastName = $_POST["lastName"];
				$id = $_POST["id"];

				$sql = "UPDATE users SET firstName='$firstName', lastName='$lastName', email='$email', password='$password' WHERE id='$id' ";
				$result = mysqli_query($database,$sql);
				

				if($result){
    				$update = "Data Updated";
				}else{
					$notupdate = "Data Not Updated";
				}
			}
		?> 
		



		<div class="section">
			<div class="card">
				<div class="card-body">
					<form id="form" action="" method="POST">
						<div class="form-group">
						    <label for="exampleInputID">ID No</label>
						    <input type="text" name="id" class="form-control" id="exampleInputID">
					  	</div>
						<div class="form-group">
						    <label for="exampleInputFirstName">First Name</label>
						    <input type="text" name="firstName" class="form-control" id="exampleInputFirstName">
					  	</div>

					  	<div class="form-group">
						    <label for="exampleInputLastName">Last Name</label>
						    <input type="text" name="lastName" class="form-control" id="exampleInputLastName">
					  	</div>

					  	<div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					  	</div>

					  	<div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
					  	</div>

					  	<button type="submit" name="update" class="btn btn-primary">Update</button>
					  		<p style="color: red;">
							    <?php
									echo $update;
									echo $notupdate;
								?>
						  	</p>
					</form>
				</div>
			</div>		
		</div>

		<div>
			<?php
				include("footer.php");
			?>
		</div>
</body>
</html>