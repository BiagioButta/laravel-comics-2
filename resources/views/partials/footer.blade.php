<?php 
$linksComics = config('comicsdb.linksComics');
$linksShop = config('comicsdb.linksShop');
$linksDc = config('comicsdb.linksDc');
$linksSites = config('comicsdb.linksSites');

?>



<div class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col-1">
                <ul><span class="text-white text-uppercase"><h6>DC Comics</h6></span>
                    @foreach ($linksComics as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-1">
                <ul><span class="text-white text-uppercase"><h6>Shop</h6></span>
                    @foreach ($linksShop as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-1">
                <ul><span class="text-white text-uppercase"><h6>DC</h6></span>
                    @foreach ($linksDc as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <ul><span class="text-white text-uppercase"><h6>Sites</h6></span>
                    @foreach ($linksSites as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <img src="{{Vite::asset('/resources/img/dc-logo-bg.png' )}}" alt="">
            </div>
            
        </div>
        
    </div>
</div>
<div class="bg-dark-grey">
    <div class="container">
        <div class="row">
            <div class="col">
                <button>sign-up now</button>
            </div>
            <div class="col">
                <ul class="d-flex">Follow us
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li> 
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li> 
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>  
                    <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>  
                    <li><a href="#"><i class="fa-brands fa-periscope"></i></a></li> 
                </ul>
            </div>
        </div>
    </div>
</div>
