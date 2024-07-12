<?php include'header.php' ?>




<div class="faculty-login" style="border-style: groove;height: 600px;">

	<center>
			<form action="#" method="post" style="background-color: #E2EAA7; width: 38%;border-radius: 10px 10px 10px 10px;transform: translate(0%, 20%);">

				<div class="login-box" style="width: 280px;position: relative;top: 50%;left: 50%;			transform: translate(-80%, -10%);color: black;"><br>

					<h1 style="float: left;font-size: 40px;border-bottom: 5px solid #4caf50;margin-bottom: 50px;	padding: 13px 0;">Login</h1>

					<div class="texbox" style="width: 100%;overflow: hidden;font-size: 20px;padding: 8px 0;margin: 8px 0;	border-bottom: 1px solid #4caf50;">
						<i class="fa fa-user" aria-hidden="true" style="width: 26px;float: left; 			text-align: center;"></i>
						<input type="text" placeholder="user name" required="enter name" style="border: none;	outline: none;	background: none;	color: white;	font-size: 18px;	width: 80%;	float: left;	margin: 0 10px;">
					</div>
					<div class="texbox" style="width: 100%;overflow: hidden;font-size: 20px;padding: 8px 0;margin: 8px 0;	border-bottom: 1px solid #4caf50;">
						<i class="fa fa-lock" aria-hidden="true" ></i>
						<input type="password" name="name" placeholder="password" value="" style="border: none;	outline: none;	background: none;	color: white;	font-size: 18px;	width: 80%;	float: left;	margin: 0 10px;">
					</div  >
					<a href="user.html"><input class="btn"  type="button" name="" value="Sign in" style="width: 100%;background: none;border: 2px solid #4caf50;color: white;padding: 10px;	font-size: 18px;cursor: pointer;	margin: 12px 0;"></a>
				</div>
				<div><p>
						Create new account ? <a href="registration.php">sign up</a><br><br><br>
					</p></div>
			</form>
	</center>
</div>







<?php include'footer.php' ?>