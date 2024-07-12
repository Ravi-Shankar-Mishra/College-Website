<?php include'header.php' ?>

<div class="register-bodypart">

			<center>
				
				<div class="register">
				<h1>Registration</h1>
				</div>
			</center>

			


			<form method="post" action="register.php" style="border-radius: 0px 0px 10px 10px;padding: 20px;
				width: 35%;	margin: 0px auto;	background: white;	border:1px solid #B0C4DE;" >

										

					<div class="input-group" style="margin: 10px 0px 10px 0px;">
						<label><b>Name</b></label>
						<input type="text" name="Name" required="fill this section" >
					</div>
					<div class="input-group">
						<label><b>Password</b></label>	
						<input type="password" name="password_1" required="">
					</div>
					<div class="input-group">
						<label><b>Confirm-Password</b></label>
						<input type="password" name="password_2" required="" >
					</div><br>
					<div style="font-size: 20px;">
						<label><b>Gender</b></label>
						<input type="radio" name="gender" value="male">male
						<input type="radio" name="gender" value="female">female
					</div><br>
					<div class="input-group">
						<label><b>Choose a photo</b></label>
						<input type="file" name="image" value="upload" required="">
					</div>
					<div class="input-group">
						<label"><b>Email</b></label>
						<input type="email" name="Email" required="">
					</div>
					<div class="input-group">
						<label ><b>Mobile</b></label>
						<input type="number" name="Mobile" required="">
					</div></br>
					<div class="btn">
						<button type="submit" name ="register"class="btn"><b>Register</b></button>
					</div></br>
					<div class="bt">
						<button type="reset" name ="reset"class="btn"><b>Reset</b></button>
					</div>
				<p>
					Already a member ? <a href="login.php">sign in</a>
				</p>
	
	</form>


</div>




<?php include'footer.php' ?>