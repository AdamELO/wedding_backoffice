@extends('templates.dashboard')
@section('content')
<div class="container">
    <div class="text-center ">
        <h1 class="pink-text mt-4">Infos Sur La section Gallery</h1>
        <a class="btn-floating btn-lg dusty-grass-gradient text-white" href='gallery/create'>
            <i class="fas fa-plus text-white"></i>
        </a>
     </div>
    <div class="row mt-5">
        @foreach ($galleries as $gallery)
        <div class="col-md-3 mb-4">

            <!-- Section: Live preview -->
            <section>

              <!-- Card -->
              <div class="card card-cascade wider card-transparent">

                <!-- Card image -->
                <div class="view view-cascade overlay">
                    @if (Storage::disk('public')->has($gallery->img))
                        <img src="{{asset('storage/'.$gallery->img)}}" class="card-img-top">
                    @else
                        <img src="{{$gallery->img}}" class="card-img-top">
                    @endif
                  <a href="#!">
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                  </a>
                </div>
                <!-- Card image -->

                <!-- Card content -->
                <div class="card-body card-body-cascade text-center">
                    <div class="row">
                        <div class="col-6">
                            <form action='gallery/{{$gallery->id}}/edit' method="get">
                                @csrf
                                <button type="submit" class="btn-floating border-0 sunny-morning-gradient text-white">
                                    <i class="fas fa-edit text-white"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-6">
                            <form action='gallery/{{$gallery->id}}' method='POST'>
                                @csrf
                                @method('delete')
                                <button type="submit"
                                    class="btn-floating border-0 young-passion-gradient text-white"><i
                                    class="fas fa-trash-alt text-white"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Card content -->

              </div>
              <!-- Card -->

            </section>
            <!-- Section: Live preview -->

          </div>
        @endforeach
    </div>
</div>
@endsection