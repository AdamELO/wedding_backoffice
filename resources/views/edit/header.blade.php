@extends('templates.dashboard')
@section('content')
<div class="container-fluid">
    <section class="section card mb-5">
        <h2 class="h1-responsive font-weight-bold pink-text text-center my-4">Edit Header Banner</h2>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" class="container"
                    action='{{ route('header.update',$header) }}' method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('put')
                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input value="{{$header->title}}" type="text" id="name" name="title" class="form-control">
                                <label for="name" class="">Titre</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" value="{{$header->subtitle}}" id="email" name="subtitle" class="form-control">
                                <label for="email" class="">Sous Titre</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="subtitle2" value="{{$header->subtitledate}}" name="subtitledate" class="form-control">
                                <label for="subtitle2" class="">Sous Titre Date</label>
                            </div>
                        </div>
                        <!--Grid column-->
                        
                        <!--Grid row-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input  value="{{$header->date}}"type="date" id="subject" name="date" class="form-control">
                                    <label for="subject" class="">Date</label>
                                </div>
                            </div>
                        <!--Grid row-->

                    </div>
                    <!--Grid row-->


                    <!--Grid row-->

                    <!-- Collapse buttons -->
                    <div>
                        <a class="btn lady-lips-gradient indigo-text" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Cliquez ici si vous voulez changer l'image
                        </a>
                    </div>
                    <!-- / Collapse buttons -->
                    
                    <!-- Collapsible element -->
                    <div class="collapse" id="collapseExample">
                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="form-group">
                                    <input  type="file" name="img" class="form-control-file pink-text" id="exampleFormControlFile1">
                                </div>
                                {{-- <div class="md-form mb-0">
                                    <input type="text" id="img" name="img" class="form-control">
                                    <label for="img" class="">img</label>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <!-- / Collapsible element -->

                    
                    <!-- Grid column -->
                    <div class="text-center">
                        <button type="submit" class="btn blue-gradient text-center">Editer</button>
                    </div>
                    <div class="status"></div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection