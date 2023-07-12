<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>{{$book->name}}</h1>
	<h2>ISBN : {{$book->barCode}}</h2>

	@if(count($book->pisatel) == 1)
 	 	<h2>Avtor : {{$book->pisatel[0]->Name}}</h2>
	@else
	 	<h2>Avtori : </h2>
	 	<ul>
	 		@foreach($book->pisatel as $pisatel)
	 			<li>{{$pisatel->Name}}</li>
	 		@endforeach
	 	</ul>
 	@endif
</body>
</html>