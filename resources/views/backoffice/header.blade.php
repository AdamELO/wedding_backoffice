@extends('templates.dashboard')

@section('content')
    <div class="container">
        <div class="text-center mb-4 ">
            <h1 class="pink-text mt-4">Infos Sur Le Header</h1>
        </div>
        <div class="text-center mt-2">
            <!-- Editable table -->
            <div class="card container">
                <div class="text-center mt-2 mb-2">
                    <a class="btn-floating btn-lg dusty-grass-gradient text-white" href='header/create'>
                        <i class="fas fa-plus text-white"></i>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive-md table-striped text-center">
                        <thead>
                            <tr>
                                <th class="text-center h4">Image</th>
                                <th class="text-center h4">Titre</th>
                                <th class="text-center h4">Sous titre</th>
                                <th class="text-center h4">Sous titre Date</th>
                                <th class="text-center h4">Date</th>
                                <th class="text-center h4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($headers as $header)
                            <tr>
                                <td class="pt-3-half" contenteditable="true">
                                    @if (Storage::disk('public')->has($header->img))
                                    <img width="250px" height="120px" src="{{asset('storage/'.$header->img)}}" alt="">
                                @else
                                    <img width="250px" height="120px" src="{{$header->img}}" alt="">
                                @endif
                                </td>
                                <td class="pt-3-half" contenteditable="true">{{$header->title}}</td>
                                <td class="pt-3-half" contenteditable="true">{{$header->subtitle}}</td>
                                <td class="pt-3-half" contenteditable="true">{{$header->subtitledate}}</td>
                                <td class="pt-3-half" contenteditable="true">
                                    {{date('d F Y', strtotime($header->date)) }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-4">
                                            <form action='header/{{$header->id}}/edit' method="get">
                                                <button type="submit" class="btn-floating border-0 sunny-morning-gradient text-white">
                                                    <i class="fas fa-edit text-white"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col-4">
                                            <form action='header/{{$header->id}}' method='POST'>
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    class="btn-floating border-0 young-passion-gradient text-white"><i
                                                    class="fas fa-trash-alt text-white"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection