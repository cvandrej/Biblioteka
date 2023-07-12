<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	@foreach($authors as $author)
		<li><a href="{{ route('avtor.prikazi', ['id' => $author->id]) }}">{{$author->Name}}</a></li>
	@endforeach
</body>
</html>