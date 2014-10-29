<html>
<head>
	<title>testderja</title>
</head>
<body>
	<form action="{{ URL::to('createdisease') }}" method="POST">
		name : 
		<input type="text" name="name"><br>
		<input type="submit">
	</form>
</body>
</html>