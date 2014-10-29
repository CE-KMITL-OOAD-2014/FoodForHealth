
<!-- Third (User Info) section -->
@extends('index')

@section('body')

<?php if (!Auth::guest()):?>
	<a href="{{ URL::to('logout') }}">Logout</a>
	<div class="container">
		<h2 class="text-center title">User Info</h2>
		<p class="lead text-center">
			Huge thank you to all people who publish<br>
			their photos at <a href="http://unsplash.com">Unsplash</a>, thank you guys!
		</p>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">
				<div class="panel panel-primary " >
					<div class="panel-heading text-center">User Information</div>
						<div class="panel-body ">
							<table class="table table-striped">
  								<tr>
  									<th>Name</th>
  									<td><?php echo Auth::User()->name; ?></td>
  								</tr>
  								<tr>
  									<th>Age</th>
  									<td><?php echo Auth::User()->age; ?></td>
  								</tr>
  								<tr>
  									<th>Weight</th>
  									<td><?php echo Auth::User()->weight; ?></td>
  								</tr>
  								<tr>
  									<th>Hieght</th>
  									<td><?php echo Auth::User()->height;  ?></td>
  								</tr>
  								<tr>
  									<th>Gender</th>
  									<td><?php echo Auth::User()->gender;  ?></td>
  								</tr>
							</table>
						</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-primary " >
					<div class="panel-heading text-center">Calulation</div>
						<div class="panel-body ">
  							<p>Your calories for a day</p> 
  							<div class="alert alert-success text-center" role="alert">
  								<?php if(Auth::User()->gender=="Male"):?>
  								<p><?php echo $cal=370+(21.6*(0.32810*Auth::User()->weight)+(0.33929 *Auth::User()->height)-29.5336 );?></p>
  							<?php else :?>
  							<p><?php echo $cal=370+(21.6*(0.29569 *Auth::User()->weight)+(0.42813 *Auth::User()->height)-43.2933 );?></p>
  						<?php endif;?>
  							</div>
	  							<div class="panel panel-primary " >
									<div class="panel-heading text-center">Disease from food related</div>
										<div class="panel-body ">
											<table class="table table-striped">
							  					<tr>
							  						<p>Your calories for a day</p> 
							  					</tr>
							  					<tr>
								  					<th>Disease</th>
								  					<th>Food</th>
							  					</tr>
							  					<tr>
							  						<td></td>
							  						<td></td>
							  					</tr>
							  				</table>
										</div>
								</div>
						</div>									
				</div>
			</div>
		</div>
	</div>
<?php else:?>
		<div class="container">
		<h2 class="text-center title">User Info</h2>
		<p class="lead text-center">
			Please Sign-in <a href="{{ URL::to('signin') }}">Click Here</a><br>
			<!--their photos at <a href="http://unsplash.com">Unsplash</a>, thank you guys!-->
		</p>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">
				<div class="panel panel-primary " >
					<div class="panel-heading text-center">User Information</div>
						<div class="panel-body ">
							<table class="table table-striped">
  								<tr>
  									<th>Name</th>
  									<td></td>
  								</tr>
  								<tr>
  									<th>Age</th>
  									<td></td>
  								</tr>
  								<tr>
  									<th>Weight</th>
  									<td></td>
  								</tr>
  								<tr>
  									<th>Hieght</th>
  									<td></td>
  								</tr>
  								<tr>
  									<th>Gender</th>
  									<td></td>
  								</tr>
							</table>
						</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-primary " >
					<div class="panel-heading text-center">Calulation</div>
						<div class="panel-body ">
  							<p>Your calories for a day</p> 
  							<div class="alert alert-success text-center" role="alert"><p>Calories</p></div>
	  							<div class="panel panel-primary " >
									<div class="panel-heading text-center">Disease from food related</div>
										<div class="panel-body ">
											<table class="table table-striped">
							  					<tr>
							  						<p>Your calories for a day</p> 
							  					</tr>
							  					<tr>
								  					<th>Disease</th>
								  					<th>Food</th>
							  					</tr>
							  					<tr>
							  						<td></td>
							  						<td></td>
							  					</tr>
							  				</table>
										</div>
								</div>
						</div>									
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>
@stop