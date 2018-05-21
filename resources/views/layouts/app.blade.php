<!DOCTYPE html>
<html>
<head>
	<title>&#9998; Todolist</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>
	<footer id="footer" class="text-center">
		<p>&copy; Brijesh | 2018</p>
	</footer>
</body>
</html>