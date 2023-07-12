<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	@foreach($users as $user)
	<li>{{$user -> firstName}} {{$user -> lastName}} {{$user -> email}}</li>
	@endforeach
</body>
</html>