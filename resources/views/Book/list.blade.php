@extends('_layout.cork')

@section('content')
<div class="fq-header-wrapper">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12 align-self-center order-md-0 order-1">
	            <div class="faq-header-content">
	                <h1 class="mb-4">Books</h1>
	            </div>
	        </div>
	    </div>
	</div>
	
	<div class="faq container">
	    <div class="faq-layouting layout-spacing">
	        <div class="kb-widget-section">
				<div class="row justify-content-center">
				@foreach ($books as $book)
				<div class="col-xxl-2 col-xl-3 col-lg-3 mb-lg-0 col-md-6 mb-3">
					    <div class="card">
					        <div class="card-body">
					            <div class="card-icon mb-4">
					                <img src="{{ asset('sliki/'.$book->slika) }}" height="100px">
					            </div>
    							<a href="{{ route('kniga.prikazi', ['id' => $book->id]) }}">{{$book->name}}</a>
							</div>
					    </div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection