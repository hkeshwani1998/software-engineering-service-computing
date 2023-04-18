<!DOCTYPE html>
<html>
<head>
	<title>Student Portal</title>
	<!-- Add Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="card text-center">
	<div class="card-body">
		<h5 class="card-title">Welcome to the Student Portal!</h5>
		<a href="{{ route('login') }}" class="btn btn-primary mx-2">Login</a>
		<a href="{{ route('register') }}" class="btn btn-secondary mx-2">Register</a>
	</div>
</div>
</body>
</html>
