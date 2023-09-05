@extends('_layout.cork')

@section('content')

<form action="{{ route('rent.kniga') }}" method="POST">
    @csrf

    <div class="fq-header-wrapper">
        @foreach($data['users'] as $user)
            <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <input type="radio" name="users_id" value="{{ $user->id }}">
                        {{$user->name}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="fq-header-wrapper">
        @foreach ($data2['books'] as $book)
            <div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon mb-4">
                            <img src="{{ asset('sliki/slika.png') }}">
                        </div>
                        <input type="checkbox" name="book_id[]" value="{{ $book->id }}">
                        <a href="{{ route('kniga.prikazi', ['id' => $book->id]) }}">{{$book->name}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <input type="submit" value="Iznajmi">
</form>

@endsection