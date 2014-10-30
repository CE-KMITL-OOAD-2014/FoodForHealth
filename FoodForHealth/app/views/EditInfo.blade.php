
<!-- Fifth (Sign up) section -->
@extends('index')

@section('body')
<form action="{{ URL::to('editprofile') }}" method="POST">					
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 ">	

				<!-- Site Title, your name, HELLO msg, etc. -->
				<h1 class="text-center title">Sign Up</h1>
				<h2 class="text-center title">Free</h2>

				<!-- Short introductory (optional) -->
				<div class = "thumbnail">
								<table class="table table-bordered">
											<input type="hidden" name="id" required value="<?php echo Auth::User()->id; ?>">
											
											<tr>
												<td width="200">
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Name</font>
												</span>
												</td>
												<td><input type="text" name="name" required value="<?php echo Auth::User()->name; ?>"></td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Age</font>
												</span>
												</td>
												<td><input type="number" name="age" required value="<?php echo Auth::User()->age; ?>"> years</td>
											</tr>
											<tr>
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Weight</font>
												</span>
												</td>
												<td><input type="number" step="0.01" name="weight" required value="<?php echo Auth::User()->weight; ?>"> kg</td>
											</tr>
											<tr >
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Hieght</font>
												</span>
												</td>
												<td><input type="number" step="0.01" name="height" required value="<?php echo Auth::User()->height; ?>"> cm</td>
											</tr>
											<tr >
												<td>
												<span class="label label-info" style=" width:100%; display:block;">
												<font size = "4">Gender</font>
												</span>
												</td>										
												<td><input type="radio" checked name ="gender" value="Male" > Male<br>
													<input type="radio" name ="gender" value="Female"> Female<br>
												</td>
											</tr>
											<tr >
												<div class="form-group">
												    <td>
													<span class="label label-info" style=" width:100%; display:block;">
													<font size = "4">E-mail Address</font>
													</span>
													</td>		
												    <td><input type="email" name ="email"class="form-control" placeholder="Enter email" required value="<?php echo Auth::User()->email; ?>"></td>
												</div>
											</tr>
											<tr>
												<td>
													<span class="label label-info" style=" width:100%; display:block;">
													<font size = "4">Edit</font>
													</span>
												</td>		
												<td>
													<input buttom class = "btn btn-warning" type="submit" href="home" Submit value="Edit">
														
													</buttom>

												</td>
											</tr>
									
								</table>
							</div>
					</div>
			</div> <!-- /col -->
		</div> <!-- /row -->
	</div>
</form>
@stop