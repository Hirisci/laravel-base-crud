@extends('layout.base')

@section('page-title')
    Home    
@endsection

@section('page-content')
    <section class="container">
        <div class="list__header">
            <h1>Lista Fumetti preferiti</h1>
            <div class="btn__list"> 
                <a class="btn add" href="{{route('comics.create')}}"><i class="fa-solid fa-plus"></i></a> 
            </div>
        </div>
        <ul class="list__card">
            @foreach ($comics as $comic)
                <li class="card">
                    <div class="card__sx">
                        <img src="{{$comic->thumb ? $comic->thumb : 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Placeholder_female_superhero_c.png'}}" alt="{{$comic->title}}">
                    </div>
                    <div class="card__dx">
                        <h6 class="card__title">{{$comic->title}}</h6>
                        <a class="card__link" href="{{route('comics.show', $comic->id)}}">maggiori info</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
@endsection