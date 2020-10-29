@extends('templates.dashboard')
@section('content')
<div class="container-fluid">
    <section class="section card mb-5">
        <h2 class="h1-responsive font-weight-bold pink-text text-center my-4">Edit Gallery</h2>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" class="container"
                    action='{{ route('gallery.update',$gallery) }}' method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('put')
                    <!-- Collapsible element -->
                    <div>
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
<br>
<br>
<br>
<br>
<br>
<br>
@endsection