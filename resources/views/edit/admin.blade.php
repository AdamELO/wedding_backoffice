@extends('templates.dashboard')
@section('content')
<div class="container-fluid">
    <section class="section card mb-5">
        <h2 class="h1-responsive font-weight-bold pink-text text-center my-4">Edit Admin profil</h2>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" class="container"
                    action="/adminpro/{{Auth::id()}}" method="post" >
                    @csrf
                    @method('put')
                    <!--Grid row-->
                    <div class="row">
                        
                        <!--Grid column-->
                        <div class=" col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" value="{{Auth::user()->name}}" id="name" name="name" class="form-control">
                                <label for="name" class="">Nom</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <input id="form10" class="form-control" value="{{Auth::user()->password}}" name="password" type="password">
                                <label for="form10">Mot de passe</label>
                              </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form">
                                <input id="form10" class="form-control" value="{{Auth::user()->email}}" name="email" type="email">
                                <label for="form10">Email</label>
                              </div>
                        </div>
                        <!--Grid column-->

                    </div>

                    <!-- Grid column -->
                    <div class="text-center">
                        <button type="submit" class="btn blue-gradient text-center">Editer</button>
                    </div>
                    <div class="status"></div>
                </form>
            </div>
        </div>
    </section>
    <br><br>
</div>
@endsection