<html>
<head>
	<title>AJAX - Live Validation</title>

	<style type="text/css">

	.success{
		color: #4cae4c;
	}
	.error{
		color: #d43f3a;
	}
	
	</style>

</head>
<body>
	<h1>Live Validation</h1>
	<form id="register">
		<h2>Register</h2>

		<div>
			<label for="username">Username: </label>
			<input type="text" id="username" placeholder="username">
			<span id="username-message"></span>
		</div>

		<div>
			<label for="email">Email: </label>
			<input type="email" id="email" placeholder="email">
			<span id="email-message"></span>
		</div>

		<input type="submit" value="Register!">
	</form>

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
</body>
</html>