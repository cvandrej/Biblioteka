<h2>{{ $author->Name }} : </h2>
<p>{{$author->Biografija}}</p>

@foreach($author->knigi as $kniga)
	<li><a href="{{ route('kniga.prikazi', ['id' => $kniga->id]) }}">{{$kniga->name}}</a></li>
@endforeach


