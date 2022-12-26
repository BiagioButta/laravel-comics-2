<?php 
$links = config('comicsdb.navbar');
?>

<div class="container">
    <header>
        <div class="row justify-content-between align-items-center">
            <div class="col">
                <a href="{{route('welcome')}}">
                    <div>
                        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
                    </div>
                </a>
            </div>
            <div class="col">
                <ul class="d-flex">
                    @foreach ($links as $link)
                    <li class="m-2 {{(Route::currentRouteName() == $link['url'] || (Str::contains(Route::currentRouteName() , 'comics') && $link['url'] == 'comics.index'))  ? 'active' : ''}}">
                        <a href="{{route($link['url'])}}">{{$link['text']}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col text-end">
                <input type="text" placeholder="Search">
            </div>
        </div>
    </header>
</div>