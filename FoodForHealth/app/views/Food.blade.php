<!-- Second (Food Diary) section -->
@extends('index')

@section('body')
@if (!Auth::guest())
<?php if(!isset($histories)){echo "string";}?>
<div class="container">	
	<h2 class="text-center title">Food Diary</h2>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-2">    
			<div class="panel panel-primary " >
				<div class="panel-heading text-center">Search Menu</div>
				<div class="panel-body">
					<div>
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li><a href="createfood">Add Menu Food</a></li>
							<li><a href="showhistorytoedit">Edit</a></li>
							<li><a href="searchfood">Delete</a></li>
						</ul>
					</div>
					<form action="{{ URL::to('results') }}" method="POST">	
						<div class="input-group">
							<input type="text" class="form-control" placeholder="search" name="keyword">
							<span class="input-group-btn">
								<input type="submit" class="btn btn-default" value="go">
							</span>
						</div><!-- /input-group -->
					</form>		
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="panel panel-primary " >
				<div class="panel-heading text-center">Food and Calories</div><a href="{{ URL::to('logout') }}">Logout</a><br>
				<div class="panel-body ">
					<?php $totalCal=0;;
							for($i=0;$i<count($histories);$i++){
								$temp = Food::find($histories[$i]->id_food);
								$totalCal=$temp->calories+$totalCal;

							}
							$percentOfCal=($totalCal/Auth::User()->caloriesForOneDay)*100;
							$totals = 'width:'.$percentOfCal.'%';
						 echo "<center>".$totalCal."/".Auth::User()->caloriesForOneDay."</center>";
						?>
					<table class="table table-striped">
						
						<tr>
							<?php
							echo '<div class="progress">';
							echo '<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
									aria-valuemax="100" style='.$totals.'>';
								echo "<center>".$percentOfCal." %"."</center>";
							echo'</div>
						</div>'?>

					</tr>
					<th>Name</th>
					<td>calories</td>
					<td>Y-m-d H:i:s</td>

				<?php
				for($i=0;$i<count($histories);$i++){
					echo"<tr>";
					$tmp = Food::find($histories[$i]->id_food);
					echo "<th>".$tmp->name."</th>";
					echo "<td>".$tmp->calories."</td>";
					echo "<th>".$histories[$i]->updated_at."</th>";
					echo"</tr>";
				}
				?>


			</table>							
		</div>
	</div>
</div>
</div>
</div>
@else
<div class="container">
	<h2 class="text-center title">User Info</h2>
	<p class="lead text-center">
		Please Sign-in <a href="{{ URL::to('signin') }}">Click Here</a><br>
		<!--their photos at <a href="http://unsplash.com">Unsplash</a>, thank you guys!-->
	</p>
</div>
@endif
@stop