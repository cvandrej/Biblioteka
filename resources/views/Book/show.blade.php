@extends('_layout.cork')

@section('content')


<h6>{{$book->name}}</h6>                                        
<p>{{$book->barCode}}</p>
<p>@if(count($book->pisatel) == 1)
    {{$book->pisatel[0]->Name}}
@else
	<ul>
		@foreach($book->pisatel as $pisatel)
			<li>{{$pisatel->Name}}</li>
		@endforeach
	</ul>
@endif
<br>

<img src="{{ asset('sliki/'.$book->slika) }}" height="150px">


<div style="display: flex;">
    <div style="flex: 1; margin-right: 10px;">

        <form action="{{ route('vrati.kniga') }}" method="POST">
         @csrf
        <input type="hidden" name="bookId" value="{{ $book->id }}"/>

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Korisnici so kniga</th>
                        <th>Akcija</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($iznajmeni as $iznajmenaKniga)
                    <tr>

                        <td>

                            <div class="media">
                                <div class="avatar me-2">
                                   <img alt="avatar" src="https://0.gravatar.com/avatar/{{ md5($iznajmenaKniga->email) }}" class="rounded-circle" />
                               </div>
                                <div class="media-body align-self-center">
                                <h6 class="mb-0">{{$iznajmenaKniga->name}}</h6>
                                </div>
                            </div>
                            @if($book->Returned == NULL)
                                <td><button type="submit" name="rentId" value="{{ $iznajmeni->id }}">Vrati</button></td>
                            @else
                                <td>{{$book->Returned}}</td>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </form>

    </div>
    <div style="flex: 1; margin-left: 10px;">
        
        <form action="{{ route('rent.kniga') }}" method="POST">
            @csrf
            <input type="hidden" name="bookId" value="{{ $book->id }}" />

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Korisnici</th>
                        <th>Akcija</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($iznajmeni as $iznajmenaKniga)
                    <tr>
                        <td>
                            <div class="media">
                                <div class="avatar me-2">
                                    <img alt="avatar" src="https://0.gravatar.com/avatar/{{ md5($iznajmenaKniga->email) }}" class="rounded-circle" />
                                </div>
                                <div class="media-body align-self-center">
                                    <h6 class="mb-0">{{$iznajmenaKniga->name}}</h6>
                                </div>
                            </div>
                        </td>
                        <td><button type="submit" name="userId" value="{{ $iznajmenaKniga->id }}">Iznajmi</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        </form>
    </div>
</div
@endsection