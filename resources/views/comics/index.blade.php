@extends('layout.app')
<?php 
$linksImage = config('comicsdb.linksImage');
?>
@section('content')


<div class="container">
    <div class="row">
        <div class="col">
            <div>
                <button class="btn btn-primary">Series</button>
            </div>
        </div>
        <div class="col">
            <div>
                <button class="btn btn-primary"><a href="{{route('comics.create')}}">Add</a></button>
            </div>
        </div>
    </div>
    <div class="row row-cols-6">
        @foreach ($comics as $key => $comic)
            <div class="card">
                <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$comic['series']}}</h5>
                    <p class="card-text">{{$comic['price']}}</p>
                    <a href="{{route('comics.show', ['comic'=> $comic->id])}}">
                        <div class="img-box">
                            <button class="delete  myBtn">Delete</button>
                            <a href="{{route('comics.edit',$comic->id)}}" class="edit"><button>Edit</button></a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="modal myModal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="form-delete">
                    @csrf
                    @method('DELETE')
                    <span>Are u sure? {{$comic->series}}?</span> 
                    <button  type="submit" class="btn-delete">Yes</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection