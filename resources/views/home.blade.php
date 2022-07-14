@extends('layout.base')

@section('page-title')
    Home    
@endsection

@section('page-content')
    @dump($comics)
    <section class="container">
        <h1>Lista Fumetti</h1>
        <ul class="card__list">
            @foreach ($comics as $comic)
                <li class="card">
                    <div class="card__sx">
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    </div>
                    <div class="card__dx">
                        <h6>{{$comic->title}}</h6>
                        <a href="{{route('page.comic.show')}}">maggiori info</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
@endsection