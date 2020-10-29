@extends('templates.dashboard')

@section('content')
    <div class="container">
        <div class="text-center">
            <h1 class="pink-text mt-4">Infos Sur La section About Us</h1>
        </div>
        <div class="text-center mt-3 mb-2 title-box">
            <h3>Titre commun : </h3>
            <h2>{{$abouts[0]->subtitle}} <span>&</span> {{$abouts[1]->subtitle}}</h2>
            <span>Ce titre sera automatiquement mis à jour</span>
        </div>
        <div class="row">
            @foreach ($abouts as $about)
            <div class="col-md-6 mb-4">
                <!-- Card -->
                <div class="card profile-card">
                  <!-- Avatar -->
                  <div class="avatar d-flex justify-content-center align-items-center border border-light p-5 mb-4">
                    @if (Storage::disk('public')->has($about->img))
                        <img width="150px" height="150px" src="{{asset('storage/'.$about->img)}}" class="rounded-circle">
                    @else
                        <img width="150px" height="150px"  src="{{$about->img}}" class="rounded-circle">
                    @endif
                  </div>
        
                  <div class="card-body pt-0 mt-0">
        
                    <!-- Name -->
                    <h3 class="mb-3 font-weight-bold text-info"><strong>{{$about->subtitle}}</strong></h3>
                    <p class="mt-4 text-muted">{{$about->text}}</p>
        
                    <form action='about/{{$about->id}}/edit' method="get" class="text-center mb-3">
                        @csrf
                        <button type="submit" class="btn-floating border-0 btn-lg sunny-morning-gradient text-white">
                            <i class="fas fa-edit text-white"></i>
                        </button>
                    </form>
        
                  </div>
        
                </div>
                <!-- Card -->
        
            </div>
            @endforeach
        </div>
    </div>
@endsection