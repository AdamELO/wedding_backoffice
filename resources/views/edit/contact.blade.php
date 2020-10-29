@extends('templates.dashboard')
@section('content')
<div class="container-fluid">
    <section class="section card mb-5">
        <h2 class="h1-responsive font-weight-bold pink-text text-center my-4">Edit Mail</h2>
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12 mb-md-0 mb-5">
                <form id="contact-form" class="container"
                    action='{{ route('mail.update',$contact->id) }}' method="post" >
                    @csrf
                    @method('put')
                    <!--Grid row-->
                    <div class="row">
                        
                        <!--Grid column-->
                        <div class=" col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" value="{{$contact->title}}" id="email" name="title" class="form-control">
                                <label for="email" class="">Titre</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form">
                                <input id="form10" class="md-textarea form-control" value="{{$contact->textbtn}}" name="textbtn" type="text">
                                <label for="form10">Le texte du bouton</label>
                              </div>
                        </div>
                        <div class="col-md-12">
                            <div class="md-form">
                                <i class="fas fa-pencil-alt prefix"></i>
                                <textarea id="form10" class="md-textarea form-control" name="text" rows="3">{{$contact->text}}</textarea>
                                <label for="form10">Le texte du mail</label>
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
</div>
@endsection