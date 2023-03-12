@extends('layouts.main')

@section('title', 'Code Buffet')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Search for a event</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="What are you looking for?">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Next events</h2>
    <p>See what's comming in the next few weeks!</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="./img/image-1.svg" alt="{{ $event->title }}">
                <div class="card-body">
                    <p class="card-date">10/10/2020</p>
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-participants"><span></span>participants</p>
                    <a href="" class="btn btn-primary">See more</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection 
