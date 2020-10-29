@extends('templates.dashboard')
@section('content')
<div class="container-fluid">
    <section class="section card mb-5">
        <h2 class="h1-responsive font-weight-bold pink-text text-center my-4">Create Header Banner</h2>
        @if ($errors->any())
        <div class='alert alert-danger'>
        @foreach ($errors->all() as $error)
            <p>{{  $error  }}</p>
        @endforeach
        </div>
        @enderror
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" class="container"
                    action='{{ route('header.store') }}' method="post" enctype="multipart/form-data" >
                    @csrf
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="title" class="form-control">
                                <label for="name" class="">Titre</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="subtitle" class="form-control">
                                <label for="email" class="">Sous Titre</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="subtitle2" name="subtitledate" class="form-control">
                                <label for="subtitle2" class="">Sous Titre Date</label>
                            </div>
                        </div>
                        <!--Grid column-->
                        
                        <!--Grid row-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="date" id="subject" name="date" class="form-control">
                                    <label for="subject" class="">Date</label>
                                </div>
                            </div>
                        <!--Grid row-->

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="file" name="img" class="form-control-file pink-text" id="exampleFormControlFile1">
                            </div>
                            {{-- <div class="md-form mb-0">
                                <input type="text" id="img" name="img" class="form-control">
                                <label for="img" class="">img</label>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Grid column -->
                    <div class="text-center">
                        <button type="submit" class="btn blue-gradient text-center">Créer</button>
                    </div>
                    <div class="status"></div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection