<html>
<head>
	<title>testderja</title>
</head>
<body>
	<form action="{{ URL::to('fooddisease') }}" method="POST">
		food : 
		<input type="number" name="food_id"><br>
		disease : 
		<input type="number"name="disease_id"><br>
		<input type="submit">
	</form>
</body>
</html>