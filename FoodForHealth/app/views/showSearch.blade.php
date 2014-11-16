
<html>
<head>
	<title>testderja</title>
</head>
<body>

	<form action="{{ URL::to('searchfood') }}" method="POST">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="search" name="keyword">
			<span class="input-group-btn">
				<input type="submit" class="btn btn-default" value="go">
			</span>
		</div>
	</form>
</body>
</html>