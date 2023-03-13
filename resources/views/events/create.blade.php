@extends('layouts.main')

@section('title', 'New Event - Code Buffet')
    @section('content')

    <div id="event-create-container" class="col-md-6 offset-md">
        <h1>Create an event</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Event</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Event's Title">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Upload banner</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Event's ticket price">
            </div>
            <div class="form-group">
                <label for="private">Private?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <input type="submit" value="Create" class="btn btn-primary">
        </form>
    </div>
@endsection