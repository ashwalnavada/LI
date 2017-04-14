
	<h3>Enter your details to register:</h3> <!--For new Users-->
	<form action="" method="POST"><!--form open-->
	<br>First Name:<input type="text" name="fname">
	<br>Last Name:<input type="text" name="lname">
	<br>E-mail:<input type="email" name="email">
	<br>Set password:<input type="password" name="password">
	<br>Gender:<input type="radio" name="gender" value="m" checked> Male
	<input type="radio" name="gender" value="f">Female<br>
	Major:<select>
		<option value="ECE"> ECE</option>
		<option value="CSE"> CSE</option>
		<option value="ISE"> ISE</option>
		<option value="ME"> ME</option>
		<option value="CE"> CE</option>
	</select>
	<br>Known Laguages:<input type="checkbox" name="laguage" value="C">C
					<input type="checkbox" name="laguage" value="C++">C++
					<input type="checkbox" name="laguage" value="Java">Java
					<input type="checkbox" name="laguage" value="Python">Python
					<input type="checkbox" name="laguage" value="Ruby">Ruby
					<input type="checkbox" name="laguage" value="Perl">Perl
	<br>City:<input type="text" name="city">
	<br>State:<input type="text" name="state">
	<br>Phone no:<input type="tel" name="phone" min="10" max="10">
	<br><input type="reset" value="Reset">
	<input type="submit" value="Submit">
	</form>
