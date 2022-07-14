@extends('layout.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <section class="container">
        <ul class="card__display">

            
                <div class="card">
                    <h2>{{$comic->title}}</h2>
                    <div class="card__info">
                        <div class="card__sx">
                            <img src="{{$comic->thumb ? $comic->thumb : 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Placeholder_female_superhero_c.png'}}" alt="{{$comic->title}}">
                        </div>
                        <div class="card__dx">

                            <p>{{$comic->description}}</p>
                            <div  class="card__info">
                                <span> 
                                    <div>
                                        Prezzo:
                                    </div>
                                    <div>
                                        {{$comic->price}} €
                                    </div>
                                </span>
                                <span> 
                                    <div>
                                        Serie: 
                                    </div>
                                    <div>
                                        {{$comic->serie}}
                                    </div> 
                                </span>
                            </div>
                        </div>
                    </div>
                    <a class="card__link" href="{{route('comics.index')}}">Torna alla lista</a>
                </div>
            
        </ul>
    </section>
@endsection