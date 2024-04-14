@extends('layouts.main')

@section('title', 'Ifood - Home')

@section('content')
    <div class="m-5 d-flex justify-content-center align-items-center gap-3 flex-wrap">

        @foreach ($restaurants as $restaurant)
            <a href="/restaurantes/{{ $restaurant->id }}" style="text-decoration: none; color: black">
                <div class="restaurants d-flex justify-content-left align-items-center">
                    <img class="img" src={{ $restaurant->logo }} alt="">
                    <div class="info d-flex justify-content-center align-items-left flex-column">
                        <p>{{ $restaurant->title }}</p>
                        <p>{{ $restaurant->type }}</p>
                        <p>{{ $restaurant->time }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
