@extends('layout.base')

@section('page-title')
    Aggiungi ai preferiti
@endsection

@section('page-content')
    <section class="container">
        <div class="card__display">

                <div class="card__create">
                    <h2>Aggiungi ai preferiti</h2>
                    <form action="{{route('comics.store')}}" method="POST">
                        @csrf
                        <input type="text" class="form-control" name="title" placeholder="Titolo">
                        <input type="text" class="form-control" name="description" placeholder="Descrizione">
                        <input type="text" class="form-control" name="thumb" placeholder="url copertina">
                        <input type="number" class="form-control" required name="price" min="0" value="0" step="any">
                        <input type="text" class="form-control" name="serie" placeholder="serie"> 
                        <input type="text" class="form-control" name="type" placeholder="tipo"> 
                        <div class="btn__list">
                            <a class="btn remove" href="{{route('comics.index')}}"><i class="fa-solid fa-xmark"></i></a>
                            <button type="submit" class="btn add"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </form>
                </div>
            
        </div>



