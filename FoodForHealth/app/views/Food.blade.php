<!-- Second (Food Diary) section -->
@extends('index')

@section('body')

	<div class="container">	
		<h2 class="text-center title">Food Diary</h2>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">    
				<div class="panel panel-primary " >
					<div class="panel-heading text-center">Search Menu</div>
						<div class="panel-body ">
							<div>
								<ul class="nav nav-tabs nav-justified" role="tablist">
								  <li><a href="#">Add</a></li>
								  <li><a href="#">Edit</a></li>
								  <li><a href="#">Delete</a></li>
								</ul>
							</div>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="search">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
								</span>
							</div><!-- /input-group -->
						</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="panel panel-primary " >
					<div class="panel-heading text-center">Food and Calories</div>
						<div class="panel-body ">
  							<table class="table table-striped">
  								<tr>
  									<div class="progress">
										<div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
										<span class="sr-only">45% Complete</span>
										</div>
									</div>

  								</tr>
  									<tr>
  										<th>Name</th>
  										<td>..1..</td>
  									</tr>
  								<tr>
  										<th>Age</th>
  										<td>..2..</td>
  								</tr>
  								<tr>
  									<th>Weight</th>
  									<td>..3..</td>
  								</tr>
  								<tr>
  									<th>Hieght</th>
  									<td>..4..</td>
  								</tr>
  								<tr>
  									<th>Gender</th>
  									<td>..5..</td>
  								</tr>
							</table>							
						</div>
				</div>
			</div>
		</div>
	</div>
@stop