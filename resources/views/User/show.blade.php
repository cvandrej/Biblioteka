@extends('_layout.cork')

@section('content')

	<h3>Korisnik</h3>
	<p>Ime : {{$user->name}}</p>
	<p>Email : {{$user->email}}</p>
    <img src="https://0.gravatar.com/avatar/{{ md5($user->email) }}">

    <div style="display: flex;">
        <div style="flex: 1; margin-right: 10px;">

            <form action="{{ route('vrati.kniga') }}" method="POST">
            @csrf
            <input type="hidden" name="userId" value="{{ $user->id }}"/>

            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Iznajmeni knigi</th>
                            <th>Akcija</th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($iznajmeni as $book)
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="avatar me-2">
                                        <img alt="avatar" src="{{ asset('sliki/'.$book->slika) }}" class="rounded-circle" />
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h6 class="mb-0">{{$book->name}}</h6>
                                        <span>@if($book->pisatel !== null)
                                                @if(count($book->pisatel) == 1)
                                                    {{$book->pisatel[0]->Name}}
                                                @else
                                                    @foreach($book->pisatel as $pisatel)
                                                        {{$pisatel->Name}}
                                                    @endforeach
                                                @endif
                                            @endif</p></span>
                                        </div>
                                </div>
                            </td>
                            @if($book->Returned == NULL)
                            <td><button type="submit" name="userId" value="{{ $book->id }}">Vrati</button></td>
                                @else
                                <td>{{$book->Returned}}</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </form>

    </div>
    <div style="flex: 1; margin-left: 10px;">
        
        <form action="{{ route('rent.kniga') }}" method="POST">
            @csrf
            <input type="hidden" name="userId" value="{{ $user->id }}" />
            <input type="hidden" name="redirectTo" value="{{ route('rent.kniga') }}" />

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Dostapni knigi</th>
                        <th>Akcija</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($books as $book)
                    <tr>
                        <td>
                            <div class="media">
                                <div class="avatar me-2">
                                    <img alt="avatar" src="{{ asset('sliki/'.$book->slika) }}" class="rounded-circle" />
                                </div>
                                <div class="media-body align-self-center">
                                    <h6 class="mb-0">{{$book->name}}</h6>
                                    <span>@if(count($book->pisatel) == 1)
        									{{$book->pisatel[0]->Name}}
        									@else
        										@foreach($book->pisatel as $pisatel)
        										{{$pisatel->Name}}
        										@endforeach

        								@endif</p></span>
                                </div>
                            </div>
                        </td>
                        <td><button type="submit" name="bookId" value="{{ $book->id }}">Iznajmi</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        </form>
    </div>
</div>
@endsection