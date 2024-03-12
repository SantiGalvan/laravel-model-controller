@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
    <main>
        <div class="container my-5">
            <div class="row g-4">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card text-center">
                            <div class="card-body">
                            <h5 class="card-title">{{$movie['title']}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie['original_title']}}</h6>
                            <p class="card-text">{{$movie['nationality']}}</p>
                            <p class="card-text">{{$movie['date']}}</p>
                            <p class="card-text">{{$movie['vote']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection