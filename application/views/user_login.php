<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Friends</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Friends</h1>
		<div class="col-sm-6">
			<h2>Register</h2>
<?php			if($this->session->flashdata("registration_errors")) {
				echo $this->session->flashdata("registration_errors");
} ?>
			<form class="form-group" action="/main/process_registration" method="post">
				<label>Full Name</label>
				<input class="form-control" type="text" name="name"><br>
				<label>Alias</label>
				<input class="form-control" type="text" name="alias"><br>
				<label>Email</label>
				<input class="form-control" type="text" name="email"><br>
				<label>Password (Minimum 8 characters)</label>
				<input class="form-control" type="password" name="password"><br>
				<label>Confirm Password</label>
				<input class="form-control" type="password" name="confirm_password"><br>
				<label>Date of Birth</label>
				<input class="form-control" type="date" name="dob"><br>
				<button type="submit" class="btn btn-primary" value="Login">Register</button>
			</form>
		</div>

		<div class="col-sm-6">
			<h2>Login</h2>
<?php		if($this->session->flashdata("login_errors")) {
				echo $this->session->flashdata("login_errors");
} ?>
			<form class="form-group" action="/main/process_login" method="post">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email"><br>
				<label for="password">Password</label><input class="form-control" type="password" name="password"><br>
				<button type="submit" class="btn btn-primary" value="Login">Login</button>
			</form>
		</div>

	</div>
</body>
</html>