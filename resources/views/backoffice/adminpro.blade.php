@extends('templates.dashboard')
@section('content')
<div class="container">
    <div class="text-center ">
        <h1 class="pink-text mb-4">Infos Sur Mon profil</h1>
     </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center m-3">
                   <h2>Nom : {{Auth::user()->name}}</h2>
                   <h3>Mail : {{Auth::user()->email}}</h3>
                   <form action="adminpro/{{Auth::id()}}/edit" method="get">
                    @csrf
                        <button type="submit" class="btn-floating border-0 sunny-morning-gradient text-white">
                            <i class="fas fa-edit text-white"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
@endsection