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
<?php var_dump($users) ?>
	<div class="container">
		<h1>Friends</h1>
		<!-- <h2>Hello, <?= $friends["alias"]?>!</h2> -->
		<p><a href="/main/logout">Logout</a></p>

		<h3>Here is a list of your friends:</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Alias</th>
						<th colspan="2">Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nate</td>
						<td><a href="">View Profile</a></td>
						<td><a href="">Remove as Friend</a></td>
					</tr>
				</tbody>
			</table>
		<h3>Other Users not on your friend list:</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Alias</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Karessa</td>
						<td><a href="">Add as Friend</a></td>
					</tr>
					<tr>
						<td>Miko</td>
						<td><a href="">Add as Friend</a></td>
					</tr>
				</tbody>
			</table>
	</div>
</body>
</html>