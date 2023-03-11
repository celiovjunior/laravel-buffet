@extends('layouts.main')

@section('title', 'Event - Code Buffet')

  @section('content')
  
  @if ($id != null)
      <p>exibindo produto: {{ $id }}</p>
  @endif
  
@endsection
