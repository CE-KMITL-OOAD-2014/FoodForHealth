
<html>
<head>
	<title>testderja</title>
</head>
<body>
	<h1>Search Results</h1>
	<!--sfdusdgiodug-->

	@if(!$result)

		<p>Not found please try again</p>

   		<a href="{{ URL::to('showfood') }}">Food Diary</a>
	@else
		<ul>
			@foreach($result as $food)
			<li>
				{{ $food->{'name'} }}
				{{ $food->{'calories'} }}<th>calories</th>
				<a href="{{'food/'.$food->id }}">Click here to add this food</a><br>
			</li>
			@endforeach
			<th>Back to </th><a href="{{ URL::to('showfood') }}">Food Diary</a>
		</ul>   
	@endif 
</body>
</html>