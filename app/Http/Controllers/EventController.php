<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Controllers\Controller;
use App\Mail\RegMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $events = Event::all();

        try {
            Mail::to('mikey@test.com')->send(new RegMail());
            Log::info('Email sent successfully');
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
        }

        return view('events.index', [ 'events' => $events ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required'],
            'location' => ['required'],
            'date' => ['required'],
        ]);

        // Create Event
        Event::Create($fields);

        // Redirect to index
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', [ 'event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
         // Validate
         $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'description' => ['required'],
            'location' => ['required'],
            'date' => ['required'],
        ]);

        // Update Event
        $event->update($fields);

        // Redirect to index
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index');
    }
}
