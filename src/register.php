<?php include'header.php' ?>

<div>
	<center>
		<form action="login.php" method="post" style="width: 96.5%;">
			<div style="width: 70.5%; border-style: groove; border-radius: 10px 10px 0px 0px; background-color:gray;color:white; height: 15%" >
				<h2>Admission Form</h2>
			</div>
			<div style="width: 70.5%; border-radius:0px 0px 10px 10px;border-style: groove;">
			<table border="1" height="80px" >				
				<tr height="30px">
					<td style="width: 150px;" align="center">First Name</td>
					<td width="300px" align="center">
						<input type="text" name="f-name" style="border-radius: 5px;font-size:20px;width: 80%"></td>
					
					<td style="width: 150px; height: 55px;text-align: center;">Last Name</td>
					<td width="300px" align="center"><input type="text" name="l-name" style="border-radius: 5px;font-size:20px;width: 80%"></td>

				</tr>
				<tr height="30px">
					<td style="width: 150px;" align="center">Father Name</td>
					<td width="300px" align="center">
						<input type="text" name="father" style="border-radius: 5px;font-size:20px;width: 80%"></td>
					
					<td style="width: 150px; height: 55px;text-align: center;">Mother Name</td>
					<td width="300px" align="center"><input type="text" name="mother" style="border-radius: 5px;font-size:20px;width: 80%"></td>

				</tr>
				<tr height="30px">
					<td style="width: 150px;" align="center">Mother Name</td>
					<td width="300px" align="center">
						<input type="text" name="f-name" style="border-radius: 5px;font-size:20px;width: 80%"></td>
					
					<td style="width: 150px; height: 55px;text-align: center;">mother</td>
					<td width="300px" align="center"><input type="text" name="l-name" style="border-radius: 5px;font-size:20px;width: 80%"></td>

				</tr>
				<tr height="30px">
					<td style="width: 150px;" align="center">Email</td>
					<td width="300px" align="center">
						<input type="email" name="mail" style="border-radius: 5px;font-size:20px;width: 80%"></td>
					
					<td style="width: 150px; height: 55px;text-align: center;">Mobile</td>
					<td width="300px" align="center"><input type="number" name="mob" style="border-radius: 5px;font-size:20px;width: 80%"></td>

				</tr>
				<tr height="30px">
					<td  style="width: 150px;" align="center">Date of Birth</td>
					<td width="300px" align="center">
						<input type="date" name="birth" value="DD-MM-YYYY" min="2000-01-01" max="1995-01-01" style="font-size:20px;width: 80%"></td>
					
					<td style="width: 150px; height: 55px;text-align: center;">Gender</td>
					<td width="300px" align="center"><input type="radio" name="gender" value="male">male
													<input type="radio" name="gender" value="female">female	
					</td>

				</tr>
				<tr height="30px">
					<td style="width: 150px;" align="center">First Name</td>
					<td width="300px" align="center">
						<input type="text" name="f-name" style="border-radius: 5px;font-size:25px;width: 80%"></td>
					
					<td rowspan="2" style="width: 150px; height: 55px;text-align: center;">Address</td>
					<td rowspan="2" width="300px" align="center"><textarea cols="20" rows="5" style="border-radius: 5px;font-size:15px;width: 80%"></textarea> </td>
				</tr>
				<tr>
					
				</tr>
				<tr>
					<th></th>
					<th><input type="submit" name="submit" value="Save" style="background-color: gray;color: white; padding: 5px; width: 100px;"></th>
					<th><input type="reset" name="reset" value="Clear" style="background-color: gray;color: white; padding: 5px; width: 100px;"></th>
					<th></th>
				</tr>
			</table>
		</div>
		</form>
	</center>
</div>

<?php include'footer.php' ?>