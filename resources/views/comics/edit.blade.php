@extends('layout.app')

@section('content')
<div class="container">
    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="my-form">
        @csrf
        @method('PUT')
        <h1 class="text-center fs-1">Aggiungi il tuo Comic</h1>
            <div>
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" required maxlength="150" value="{{old('title', $comic->title)}}">
            </div>
            <div>
                <label for="price">Prezzo $</label>
                <input type="number" name="price" id="price" placeholder="25.99" step="0.01" required value="{{old('price', $comic->price)}}">
            </div>
            <div>
                <label for="series">Series</label>
                <input type="text" name="series" id="series" required maxlength="50" value="{{old('series', $comic->series)}}">
            </div>
            <div>
                <label for="sale_date">Data di Uscita</label>
                <input type="date" name="sale_date" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
            </div>
            <div>
                <label for="type">Tipo</label>
                <select name="type" id="type">
                    <option value="comic book" {{old('type',$comic->type == 'comic book' ? 'selected' : '')}}>Comic Book</option>
                    <option value="graphic novel" {{old('type',$comic->type == 'graphic novel' ? 'selected' : '')}}>Graphic Novel</option>
                </select>
            </div>
            <div>
                <label for="artists">Artisti</label>
                <input type="text" name="artists" id="artists" placeholder="Artista1, Artista2,..." value="{{old('artists', $comic->artists)}}">
            </div>
            <div>
                <label for="writers">Scrittori</label>
                <input type="text" name="writers" id="writers" placeholder="Scrittore1, Scrittore2,..." value="{{old('writers', $comic->writers)}}">
            </div>
            <div>
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" rows="4" required>{{old('description', $comic->description)}}</textarea>
            </div>
            <button type="submit" class="my-btn">Invia</button>
        </form>
</div>
@endsection