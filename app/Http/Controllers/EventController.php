<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
  public function index()
  {
    $events = Event::all();
    return view('welcome', ['events' => $events]);
  }

  public function create()
  {
    return view('events.create');
  }

  public function store(Request $request)
  {
    $event = new Event;

    $event->title = $request->title;
    $event->description = $request->description;
    $event->ticket_price = $request->price;
    $event->private = $request->private;

    // image upload
    if ($request->hasFile('image') ** $request->file('image')->isValid()) {
      $requestImage = $request->image;
      $extension = $requestImage->extension();

      // setting name and extension inside a variable
      $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

      $request->image->move(public_path('img/events'), $imageName);

      // add the register inside the event object
      $event->image = $imageName;
    }

    $event->save();

    return redirect('/')->with('msg', 'event added');
  }
}
