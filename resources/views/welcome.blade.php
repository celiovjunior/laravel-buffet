@extends('layouts.main')

@section('title', 'Code Buffet')
    @section('content')

@foreach ($events as $item)
    <h1>{{ $item->title }}</h1>
    <p>{{ $item->description }}</p>
@endforeach
@endsection
