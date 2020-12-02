<!DOCTYPE html>
<html lang="en">

		
	
		<div>
			<?php
				include("header.php");
			?>
		</div>

		<div>
			<?php
				include("function.php");
			?>
		</div>

		<div class="section">
			<div class="card">
				<div class="card-body">
					<form id="form" action="" method="POST">
						<div class="form-group">
						    <label for="exampleInputFirstName">First Name</label>
						    <input type="text" name="firstName" class="form-control" id="exampleInputFirstName">
					  	</div>

						  	<p style="color: red;">
							    <?php
									echo $Error;
								?>
						  	</p>

					  	<div class="form-group">
						    <label for="exampleInputLastName">Last Name</label>
						    <input type="text" name="lastName" class="form-control" id="exampleInputLastName">
					  	</div>

						  	<p style="color: red;">
							    <?php
									echo $Error;
								?>
						  	</p>

					  	<div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="text" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					  	</div>

						  	<p style="color: red;">
								<?php
									echo $Error;
									echo $emailErr;
									echo $emailerr;
								?>	
						  	</p>

					  	<div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" name="Pass" class="form-control" id="exampleInputPassword1">
					  	</div>

						  	<p style="color: red;">
							    <?php
									echo $Error;
								?>
						  	</p>
					  	<div class="form-group">
						    <label for="exampleInputPassword1">Confirm Password</label>
						    <input type="password" name="cPass" class="form-control" id="exampleInputPassword1">
					  	</div>

						  	<p style="color: red;">
							    <?php
									echo $Error;
									echo $passerr;
								?>
						  	</p>

					  	<button type="submit" name="Submit" class="btn btn-primary">Sign Up</button>

					  	<!-- <p>
						  	<?php
							  	echo $email;
								echo $password;
							?>
					  	</p>
 -->
					</form>
				</div>
			</div>		
		</div>

		<div>
			<?php
				include("footer.php");
			?>
		</div>

</html>