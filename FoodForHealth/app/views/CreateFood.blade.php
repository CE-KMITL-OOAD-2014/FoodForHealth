<html>
<head>
	<title>testderja</title>
</head>
<body>
	<form action="{{ URL::to('createfood') }}" method="POST">
		name : 
		<input type="text" name="name"><br>
		calories : 
		<input type="number"name="calories"><br>
		<input type="submit">
	</form>
</body>
</html>