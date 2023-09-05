@extends('_layout.cork')

@section('content')

<div id="tabsSimple" class="col-xl-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>{{$author->Name}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="vertical-pill">
                                        
                                        <div class="d-flex align-items-start">
                                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link active" id="v-pills-home-icon-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home-icon" type="button" role="tab" aria-controls="v-pills-home-icon" aria-selected="true">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                                    Biografija
                                                </button>
                                                <button class="nav-link" id="v-pills-profile-icon-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile-icon" type="button" role="tab" aria-controls="v-pills-profile-icon" aria-selected="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                    Knigi
                                                </button>
                                            </div>
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home-icon" role="tabpanel" aria-labelledby="v-pills-home-icon-tab" tabindex="0">
                                                    <p>{{$author->Biografija}}</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile-icon" role="tabpanel" aria-labelledby="v-pills-profile-icon-tab" tabindex="0">
                                                    <p>@foreach($author->knigi as $kniga)
														<li><a href="{{ route('kniga.prikazi', ['id' => $kniga->id]) }}">{{$kniga->name}}</a></li>
													@endforeach</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                
            </div>
@endsection


