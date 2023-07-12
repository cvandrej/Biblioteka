<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		<ul>
			@foreach ($books as $book)
    			<li><a href="{{ route('kniga.prikazi', ['id' => $book->id]) }}">{{$book->name}}</a></li>
			@endforeach
		</ul>
</body>
</html>