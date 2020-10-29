@extends('templates.dashboard')
@section('content')
<div class="container-fluid">
    <section class="section card mb-5">
        <h2 class="h1-responsive font-weight-bold pink-text text-center my-4">Edit About Us</h2>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" class="container"
                    action='{{ route('about.update',$about) }}' method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('put')
                    <!--Grid row-->
                    <div class="row">
                        
                        <!--Grid column-->
                        <div class="col-md-4">
                            <div class="md-form mb-0"></div>
                        </div>
                        <div class=" col-md-4">
                            <div class="md-form mb-0">
                                <input type="text" value="{{$about->subtitle}}" id="email" name="subtitle" class="form-control">
                                <label for="email" class="">Nom</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix"></i>
                                <textarea id="form10" class="md-textarea form-control" name="text" rows="3">{{$about->text}}</textarea>
                                <label for="form10">La description</label>
                              </div>
                        </div>
                        <!--Grid column-->


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