
<html>
<head>
	<title>testderja</title>
</head>
<body>
	<h1>Search Results</h1>
	<!--sfdusdgiodug-->

	@if(!$histories)

		<p>Not found please try again</p>

   		<a href="{{ URL::to('showfood') }}">Food Diary</a>
	@else
		<ul>
			@foreach($histories as $history)
			<li>
				
				 <?php echo Food::find($history->id_food)->name ;
				  ?>
				<a href="{{ 'deletehistory/'.$history->id }}">Click here to delete this history</a><br>
			</li>
			@endforeach
			<th>Back to </th><a href="{{ URL::to('showfood') }}">Food Diary</a>
		</ul>   
	@endif 
</body>
</html>