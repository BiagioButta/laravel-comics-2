

@extends('layout.app')
<?php 
$linksSinglePage = config('comicsdb.linksSinglePage');

?>
@section('content')

<div class="container">
    <div><img src="{{$comic['thumb']}}" alt=""></div>

    <div class="row">
        <div class="col">
            <div class="row row-cols-1">
                <div class="col">{{$comic['series']}} : THE DELUX EDITION</div>
                <div class="col">U.S. Price: {{$comic['price']}}</div>
                <div class="col"><span>Available</span><span>Check avaibility</span></div>
                <div class="col"><p>{{$comic['description']}}</p></div>
            </div>
        </div>
        <div class="col">Immagine</div>
    </div>

    <div class="row">
        <div class="col">
            <div class="row">Talent</div>
            <div class="row">
                <div class="col">Aet by:</div>
                <div class="col">{{$comic['artists']}}</div>
            </div>
            <div class="row">
                <div class="col">Written by:</div>
                <div class="col">{{$comic['writers']}}</div>
            </div>
        </div>
            
        <div class="col">
            <div class="row">Specs</div>
            <div class="row">
                <div class="col">Series:</div>
                <div class="col">{{$comic['series']}}</div>
            </div>
            <div class="row">
                <div class="col">U.S. Price:</div>
                <div class="col">{{$comic['price']}}</div>
            </div>
            <div class="row">
                <div class="col">On sale date:</div>
                <div class="col">{{$comic['sale_date']}}</div>
            </div>
        </div>
    </div>
</div>


@endsection