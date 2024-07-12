<?php include'header.php' ?>

<div class="bodypart-login">

	<center>
			<form action="#" method="post" style="background-color: #E2EAA7; width: 38%;border-radius: 10px 10px 10px 10px;transform: translate(0%, 20%);">
				<div class="login-box"><br>
					<h1>Login</h1>
					<div class="textbox">
						<i class="fa fa-user" aria-hidden="true" ></i>
						<input type="text" placeholder="user name" required="enter name">
					</div>
					<div class="textbox">
						<i class="fa fa-lock" aria-hidden="true" ></i>
						<input type="password" name="name" placeholder="password" value="">
					</div color="blue">
					<a href="user.html"><input class="btn"  type="button" name="" value="Sign in" ></a>
				</div>
				<div><p>
						Create new account ? <a href="registration.php">sign up</a><br><br><br>
					</p></div>
			</form>
	</center>
</div>




<?php include'footer.php' ?>