<!-- Fourth (Sign In) section -->
@extends('index')

@section('body')

<section class="section" >
	<form action="{{ URL::to('signin') }}" method="POST">
		<div class="container">

			<h2 class="text-center title">Sign In</h2>

			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 ">
					<div class="thumbnail">
						<center>
							<img src="assets/images/user.jpg" class="img-responsive img-circle" alt="Responsive image" >
						</center>
						<br>
						<form class="form-horizontal" role="form">
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="username" id="inputEmail3" placeholder="Username">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
								</div>
							</form>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label><input type="checkbox"> Remember me</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-info" href="food">Sign in</button>
							</div>
						</div>
					</form>
				</div>									
			</div>
		</div>
	</div>
</form>
@stop

<!--<html>
<head>
	<title>testderja</title>
</head>
<body>
	<form action="{{ URL::to('login') }}" method="POST">
		username : 
		<input type="text" name="username"><br>
		password : 
		<input type="password"name="password"><br>
		<button type="submit">log in</button>
	</form>
</body>
</html>