<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $events = Event::all();

        return view('events.IndexForm', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.CreateForm');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:25',
        ]);

        Event::create($request->all());

        return redirect('/events')->with('success', 'Event has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.EditForm', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){

        $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:25',
        ]);

        $event = Event::findOrFail($id);
        $event->update($request->all());

        return redirect('/events')->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
