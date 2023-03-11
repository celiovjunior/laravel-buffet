@extends('layouts.main')

@section('title', 'Code Buffet')
  @section('content')
  
  @if ($time != '')
      <p>search for {{ $time }}</p>
  @endif

@endsection