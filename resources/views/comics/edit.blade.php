@extends('layout.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <section class="container">
        <ul class="card__display">

            
                <div class="card">
                    <div class="card__header-edit">
                        <h2>{{$comic->title}}</h2>
                    </div>
                    <div class="card__info">
                        <div class="card__sx">
                            <img src="{{$comic->thumb ? $comic->thumb : 'https://upload.wikimedia.org/wikipedia/commons/d/d5/Placeholder_female_superhero_c.png'}}" alt="{{$comic->title}}">
                        </div>
                        <div class="card__dx">

                            <form action="{{route('comics.update', $comic->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" class="form-control" name="title" placeholder="Titolo" value="{{$comic->title}}">
                                <input type="text" class="form-control" name="description" placeholder="Descrizione" value="{{$comic->description}}">
                                <input type="text" class="form-control" name="thumb" placeholder="url copertina" value="{{$comic->thumb}}">
                                <input type="number" class="form-control" required name="price" min="0" value="0" step="any" value="{{$comic->price}}">
                                <input type="text" class="form-control" name="serie" placeholder="serie" value="{{$comic->serie}}"> 
                                <input type="text" class="form-control" name="type" placeholder="tipo" value="{{$comic->type}}"> 
                                <div class="btn__list">
                                    <a class="btn remove" href="{{route('comics.index')}}"><i class="fa-solid fa-xmark"></i></a>
                                    <button type="submit" class="btn add"><i class="fa-solid fa-plus"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                  

                    <a class="card__link" href="{{route('comics.index')}}">Torna alla lista</a>
                </div>
            
        </ul>
    </section>
@endsection