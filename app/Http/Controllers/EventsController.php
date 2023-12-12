<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('dashboard/events/index')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/events/create');
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $this->validate($request, [
        'title' => 'required',
        'start_at'=> 'required',
        'description' => 'required',
        'location' => 'required',
        'price' => 'required',
        'end_at'=> 'required'
    ]);

    $event = new Event();
    $event->title = $request->title;
    $event->start_at = $request->start_at;
    $event->description = $request->description; // fix the typo here (descriptions)
    $event->location = $request->location;
    $event->price = $request->price;
    $event->end_at = $request->end_at;
    $event->save();

    return redirect()->route('events.index');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::findorFail($id);
        return view('dashboard/events/show')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard/events/edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::destroy($id);
        return redirect()->route('events.index');
        //
    }
}
